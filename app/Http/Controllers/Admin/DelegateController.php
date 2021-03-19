<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyDelegateRequest;
use App\Http\Requests\StoreDelegateRequest;
use App\Http\Requests\UpdateDelegateRequest;
use App\Models\Delegate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DelegateController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('delegate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $delegates = Delegate::with(['created_by'])->get();

        return view('admin.delegates.index', compact('delegates'));
    }

    public function create()
    {
        abort_if(Gate::denies('delegate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.delegates.create');
    }

    public function store(StoreDelegateRequest $request)
    {
        $delegate = Delegate::create($request->all());

        return redirect()->route('admin.delegates.index')->with('message', 'Delegate added successfully');;
    }

    public function edit(Delegate $delegate)
    {
        abort_if(Gate::denies('delegate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $delegate->load('created_by');

        return view('admin.delegates.edit', compact('delegate'));
    }

    public function update(UpdateDelegateRequest $request, Delegate $delegate)
    {
        $delegate->update($request->all());

        return redirect()->route('admin.delegates.index');
    }

    public function show(Delegate $delegate)
    {
        abort_if(Gate::denies('delegate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $delegate->load('created_by');

        return view('admin.delegates.show', compact('delegate'));
    }

    public function destroy(Delegate $delegate)
    {
        abort_if(Gate::denies('delegate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $delegate->delete();

        return back();
    }

    public function massDestroy(MassDestroyDelegateRequest $request)
    {
        Delegate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
