<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyMediumRequest;
use App\Http\Requests\StoreMediumRequest;
use App\Http\Requests\UpdateMediumRequest;
use App\Models\Medium;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MediasController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('medium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $media = Medium::with(['created_by'])->get();

        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        abort_if(Gate::denies('medium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.media.create');
    }

    public function store(StoreMediumRequest $request)
    {
        $medium = Medium::create($request->all());

        return redirect()->route('admin.media.index');
    }

    public function edit(Medium $medium)
    {
        abort_if(Gate::denies('medium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->load('created_by');

        return view('admin.media.edit', compact('medium'));
    }

    public function update(UpdateMediumRequest $request, Medium $medium)
    {
        $medium->update($request->all());

        return redirect()->route('admin.media.index');
    }

    public function show(Medium $medium)
    {
        abort_if(Gate::denies('medium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->load('created_by');

        return view('admin.media.show', compact('medium'));
    }

    public function destroy(Medium $medium)
    {
        abort_if(Gate::denies('medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medium->delete();

        return back();
    }

    public function massDestroy(MassDestroyMediumRequest $request)
    {
        Medium::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
