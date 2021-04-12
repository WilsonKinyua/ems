<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyMediasRequest;
use App\Http\Requests\StoreMediasRequest;
use App\Http\Requests\UpdateMediasRequest;
use App\Models\Medias;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MediasController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('media_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $media = Medias::with(['created_by'])->get();

        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        abort_if(Gate::denies('media_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.media.create');
    }

    public function store(StoreMediasRequest $request)
    {
        $medium = Medias::create($request->all());

        return redirect()->route('admin.media.index');
    }

    public function edit(Medias $medium)
    {
        abort_if(Gate::denies('media_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->load('created_by');

        return view('admin.media.edit', compact('medium'));
    }

    public function update(UpdateMediasRequest $request, Medias $medium)
    {
        $medium->update($request->all());

        return redirect()->route('admin.media.index');
    }

    public function show(Medias $medium)
    {
        abort_if(Gate::denies('media_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->load('created_by');

        return view('admin.media.show', compact('medium'));
    }

    public function destroy(Medias $medium)
    {
        abort_if(Gate::denies('media_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->delete();

        return back();
    }

    public function massDestroy(MassDestroyMediasRequest $request)
    {
        Medias::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
