<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use App\Http\Resources\Admin\SponsorResource;
use App\Models\Sponsor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SponsorApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sponsor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SponsorResource(Sponsor::all());
    }

    public function store(StoreSponsorRequest $request)
    {
        $sponsor = Sponsor::create($request->all());

        if ($request->input('logo', false)) {
            $sponsor->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($request->input('signature', false)) {
            $sponsor->addMedia(storage_path('tmp/uploads/' . basename($request->input('signature'))))->toMediaCollection('signature');
        }

        return (new SponsorResource($sponsor))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Sponsor $sponsor)
    {
        abort_if(Gate::denies('sponsor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SponsorResource($sponsor);
    }

    public function update(UpdateSponsorRequest $request, Sponsor $sponsor)
    {
        $sponsor->update($request->all());

        if ($request->input('logo', false)) {
            if (!$sponsor->logo || $request->input('logo') !== $sponsor->logo->file_name) {
                if ($sponsor->logo) {
                    $sponsor->logo->delete();
                }

                $sponsor->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($sponsor->logo) {
            $sponsor->logo->delete();
        }

        if ($request->input('signature', false)) {
            if (!$sponsor->signature || $request->input('signature') !== $sponsor->signature->file_name) {
                if ($sponsor->signature) {
                    $sponsor->signature->delete();
                }

                $sponsor->addMedia(storage_path('tmp/uploads/' . basename($request->input('signature'))))->toMediaCollection('signature');
            }
        } elseif ($sponsor->signature) {
            $sponsor->signature->delete();
        }

        return (new SponsorResource($sponsor))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Sponsor $sponsor)
    {
        abort_if(Gate::denies('sponsor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsor->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
