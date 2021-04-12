@extends('layouts.theme')

@section('title')
View Media - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">View Media</h1>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Media</li>
                </ol> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.media.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $medium->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $medium->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $medium->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $medium->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.postal_address') }}
                                        </th>
                                        <td>
                                            {{ $medium->postal_address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $medium->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.media.fields.country') }}
                                        </th>
                                        <td>
                                            {{ $medium->country }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.media.index') }}">
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
