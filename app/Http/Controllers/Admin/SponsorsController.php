<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySponsorRequest;
use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use App\Models\Sponsor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SponsorsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('sponsor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsors = Sponsor::with(['created_by'])->get();

        return view('admin.sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        abort_if(Gate::denies('sponsor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sponsors.create');
    }

    public function store(StoreSponsorRequest $request)
    {
        $sponsor = Sponsor::create($request->all());

        return redirect()->route('admin.sponsors.index');
    }

    public function edit(Sponsor $sponsor)
    {
        abort_if(Gate::denies('sponsor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsor->load('created_by');

        return view('admin.sponsors.edit', compact('sponsor'));
    }

    public function update(UpdateSponsorRequest $request, Sponsor $sponsor)
    {
        $sponsor->update($request->all());

        return redirect()->route('admin.sponsors.index');
    }

    public function show(Sponsor $sponsor)
    {
        abort_if(Gate::denies('sponsor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsor->load('created_by');

        return view('admin.sponsors.show', compact('sponsor'));
    }

    public function destroy(Sponsor $sponsor)
    {
        abort_if(Gate::denies('sponsor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsor->delete();

        return back();
    }

    public function massDestroy(MassDestroySponsorRequest $request)
    {
        Sponsor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
