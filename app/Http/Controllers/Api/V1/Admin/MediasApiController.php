<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMediumRequest;
use App\Http\Requests\UpdateMediumRequest;
use App\Http\Resources\Admin\MediumResource;
use App\Models\Medium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MediasApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('medium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MediumResource(Medium::with(['created_by'])->get());
    }

    public function store(StoreMediumRequest $request)
    {
        $medium = Medium::create($request->all());

        return (new MediumResource($medium))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Medium $medium)
    {
        abort_if(Gate::denies('medium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MediumResource($medium->load(['created_by']));
    }

    public function update(UpdateMediumRequest $request, Medium $medium)
    {
        $medium->update($request->all());

        return (new MediumResource($medium))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Medium $medium)
    {
        abort_if(Gate::denies('medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
