<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyExhibitorRequest;
use App\Http\Requests\StoreExhibitorRequest;
use App\Http\Requests\UpdateExhibitorRequest;
use App\Models\Exhibitor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExhibitorsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('exhibitor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitors = Exhibitor::with(['created_by'])->get();

        return view('admin.exhibitors.index', compact('exhibitors'));
    }

    public function create()
    {
        abort_if(Gate::denies('exhibitor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exhibitors.create');
    }

    public function store(StoreExhibitorRequest $request)
    {
        $exhibitor = Exhibitor::create($request->all());

        return redirect()->route('admin.exhibitors.index');
    }

    public function edit(Exhibitor $exhibitor)
    {
        abort_if(Gate::denies('exhibitor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitor->load('created_by');

        return view('admin.exhibitors.edit', compact('exhibitor'));
    }

    public function update(UpdateExhibitorRequest $request, Exhibitor $exhibitor)
    {
        $exhibitor->update($request->all());

        return redirect()->route('admin.exhibitors.index');
    }

    public function show(Exhibitor $exhibitor)
    {
        abort_if(Gate::denies('exhibitor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitor->load('created_by');

        return view('admin.exhibitors.show', compact('exhibitor'));
    }

    public function destroy(Exhibitor $exhibitor)
    {
        abort_if(Gate::denies('exhibitor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitor->delete();

        return back();
    }

    public function massDestroy(MassDestroyExhibitorRequest $request)
    {
        Exhibitor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
