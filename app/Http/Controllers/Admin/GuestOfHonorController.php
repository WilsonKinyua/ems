<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyGuestOfHonorRequest;
use App\Http\Requests\StoreGuestOfHonorRequest;
use App\Http\Requests\UpdateGuestOfHonorRequest;
use App\Models\GuestOfHonor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestOfHonorController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('guest_of_honor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonors = GuestOfHonor::with(['created_by'])->get();

        return view('admin.guestOfHonors.index', compact('guestOfHonors'));
    }

    public function create()
    {
        abort_if(Gate::denies('guest_of_honor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.guestOfHonors.create');
    }

    public function store(StoreGuestOfHonorRequest $request)
    {
        $guestOfHonor = GuestOfHonor::create($request->all());

        return redirect()->route('admin.guest-of-honors.index');
    }

    public function edit(GuestOfHonor $guestOfHonor)
    {
        abort_if(Gate::denies('guest_of_honor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonor->load('created_by');

        return view('admin.guestOfHonors.edit', compact('guestOfHonor'));
    }

    public function update(UpdateGuestOfHonorRequest $request, GuestOfHonor $guestOfHonor)
    {
        $guestOfHonor->update($request->all());

        return redirect()->route('admin.guest-of-honors.index');
    }

    public function show(GuestOfHonor $guestOfHonor)
    {
        abort_if(Gate::denies('guest_of_honor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonor->load('created_by');

        return view('admin.guestOfHonors.show', compact('guestOfHonor'));
    }

    public function destroy(GuestOfHonor $guestOfHonor)
    {
        abort_if(Gate::denies('guest_of_honor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonor->delete();

        return back();
    }

    public function massDestroy(MassDestroyGuestOfHonorRequest $request)
    {
        GuestOfHonor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
