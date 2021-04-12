@extends('layouts.theme')

@section('title')
Edit Partner - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Edit Partners</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Partner</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.partners.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $partner->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $partner->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $partner->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $partner->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.postal_address') }}
                                        </th>
                                        <td>
                                            {{ $partner->postal_address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $partner->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.partner.fields.country') }}
                                        </th>
                                        <td>
                                            {{ $partner->country }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.partners.index') }}">
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
