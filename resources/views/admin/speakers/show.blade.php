@extends('layouts.theme')
@section('title')
      View Speaker - {{ trans('panel.site_title') }}
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
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.speakers.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $speaker->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $speaker->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $speaker->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $speaker->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.postal_address') }}
                                        </th>
                                        <td>
                                            {{ $speaker->postal_address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $speaker->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.speaker.fields.country') }}
                                        </th>
                                        <td>
                                            {{ $speaker->country }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a class="btn btn-primary" href="{{ route('admin.speakers.index') }}">
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
