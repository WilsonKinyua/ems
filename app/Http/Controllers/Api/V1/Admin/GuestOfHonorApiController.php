<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuestOfHonorRequest;
use App\Http\Requests\UpdateGuestOfHonorRequest;
use App\Http\Resources\Admin\GuestOfHonorResource;
use App\Models\GuestOfHonor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestOfHonorApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('guest_of_honor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GuestOfHonorResource(GuestOfHonor::with(['created_by'])->get());
    }

    public function store(StoreGuestOfHonorRequest $request)
    {
        $guestOfHonor = GuestOfHonor::create($request->all());

        return (new GuestOfHonorResource($guestOfHonor))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(GuestOfHonor $guestOfHonor)
    {
        abort_if(Gate::denies('guest_of_honor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GuestOfHonorResource($guestOfHonor->load(['created_by']));
    }

    public function update(UpdateGuestOfHonorRequest $request, GuestOfHonor $guestOfHonor)
    {
        $guestOfHonor->update($request->all());

        return (new GuestOfHonorResource($guestOfHonor))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(GuestOfHonor $guestOfHonor)
    {
        abort_if(Gate::denies('guest_of_honor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonor->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
