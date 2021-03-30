@extends('layouts.theme')

@section('title')
      View Sponsor - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Sponsor</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">View Sponsor</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('admin.sponsors.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.postal_address') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->postal_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.city') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.country') }}
                                    </th>
                                    <td>
                                        {{ $sponsor->country }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('admin.sponsors.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
