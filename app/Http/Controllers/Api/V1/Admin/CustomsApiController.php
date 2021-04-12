<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomRequest;
use App\Http\Requests\UpdateCustomRequest;
use App\Http\Resources\Admin\CustomResource;
use App\Models\Custom;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('custom_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomResource(Custom::with(['created_by'])->get());
    }

    public function store(StoreCustomRequest $request)
    {
        $custom = Custom::create($request->all());

        return (new CustomResource($custom))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Custom $custom)
    {
        abort_if(Gate::denies('custom_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomResource($custom->load(['created_by']));
    }

    public function update(UpdateCustomRequest $request, Custom $custom)
    {
        $custom->update($request->all());

        return (new CustomResource($custom))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Custom $custom)
    {
        abort_if(Gate::denies('custom_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $custom->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
