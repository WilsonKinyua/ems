@extends('layout.admin')

@section('title')
      View Guest Of Honor - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">View Guest Of Honor</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary btn-lg" href="{{ route('admin.guest-of-honors.index') }}">
                                    Back
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    {{-- <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->id }}
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.postal_address') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->postal_address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.country') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->country }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
