@extends('layout.admin')

@section('title')
      View Customs - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">View Customs</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">
  <!-- Row -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <a class="btn btn-primary btn-lg" href="{{ route('admin.visas.index') }}">
                            Back
                        </a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.id') }}
                                </th>
                                <td>
                                    {{ $visa->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.name') }}
                                </th>
                                <td>
                                    {{ $visa->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.phone') }}
                                </th>
                                <td>
                                    {{ $visa->phone }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.email') }}
                                </th>
                                <td>
                                    {{ $visa->email }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.postal_address') }}
                                </th>
                                <td>
                                    {{ $visa->postal_address }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.city') }}
                                </th>
                                <td>
                                    {{ $visa->city }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.visa.fields.country') }}
                                </th>
                                <td>
                                    {{ $visa->country }}
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
