<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyVisaRequest;
use App\Http\Requests\StoreVisaRequest;
use App\Http\Requests\UpdateVisaRequest;
use App\Models\Visa;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisaController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('visa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visas = Visa::with(['created_by'])->get();

        return view('admin.visas.index', compact('visas'));
    }

    public function create()
    {
        abort_if(Gate::denies('visa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.visas.create');
    }

    public function store(StoreVisaRequest $request)
    {
        $visa = Visa::create($request->all());

        return redirect()->route('admin.visas.index');
    }

    public function edit(Visa $visa)
    {
        abort_if(Gate::denies('visa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visa->load('created_by');

        return view('admin.visas.edit', compact('visa'));
    }

    public function update(UpdateVisaRequest $request, Visa $visa)
    {
        $visa->update($request->all());

        return redirect()->route('admin.visas.index');
    }

    public function show(Visa $visa)
    {
        abort_if(Gate::denies('visa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visa->load('created_by');

        return view('admin.visas.show', compact('visa'));
    }

    public function destroy(Visa $visa)
    {
        abort_if(Gate::denies('visa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visa->delete();

        return back();
    }

    public function massDestroy(MassDestroyVisaRequest $request)
    {
        Visa::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
