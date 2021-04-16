@extends('layout.admin')

@section('title')
      View Speaker - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">View Speaker</h1>
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
                                <a class="btn btn-primary btn-lg" href="{{ route('admin.speakers.index') }}">
                                    Back
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
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection

