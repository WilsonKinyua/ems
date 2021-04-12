@extends('layouts.theme')

@section('title')
View Exhibitor - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">View</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.exhibitors.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.postal_address') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->postal_address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.country') }}
                                        </th>
                                        <td>
                                            {{ $exhibitor->country }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.exhibitors.index') }}">
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
