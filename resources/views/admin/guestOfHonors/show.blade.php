@extends('layouts.theme')

@section('title')
      Edit Guest Of Honor List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">View Guest Of Honor</h1>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Create Guest Of Honor List</li>
                </ol> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.guest-of-honors.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.guestOfHonor.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $guestOfHonor->id }}
                                        </td>
                                    </tr>
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
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.guest-of-honors.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
