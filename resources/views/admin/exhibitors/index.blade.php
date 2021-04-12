@extends('layouts.theme')

@section('title')
Exhibitors List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Exhibitors</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Exhibitors List</li>
                </ol>
            </div>
        </div>
        @can('exhibitor_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.exhibitors.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.exhibitor.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Exhibitor', 'route' => 'admin.exhibitors.parseCsvImport'])
                    <a class="btn btn-success" href="{{ route('admin.exhibitors-templates.create') }}">
                        Compose Mail
                    </a>
                </div>
            </div>
        @endcan
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.name') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.phone') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.email') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.postal_address') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.city') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.exhibitor.fields.country') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($exhibitors as $key => $exhibitor)
                                        <tr data-entry-id="{{ $exhibitor->id }}">
                                            <td>

                                            </td>
                                            <td>
                                                {{ $exhibitor->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->name ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->phone ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->email ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->postal_address ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->city ?? '' }}
                                            </td>
                                            <td>
                                                {{ $exhibitor->country ?? '' }}
                                            </td>
                                            <td>
                                                @can('exhibitor_show')
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.exhibitors.show', $exhibitor->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>
                                                @endcan

                                                @can('exhibitor_edit')
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.exhibitors.edit', $exhibitor->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan

                                                @can('exhibitor_delete')
                                                    <form action="{{ route('admin.exhibitors.destroy', $exhibitor->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                    </form>
                                                @endcan

                                            </td>

                                        </tr>
                                    @endforeach
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
@section('scripts')
@parent
<script>
    @if (session()->has('success'))
        toastr.success("{{session()->get('success')}}");
    @endif

    @if (session()->has('danger'))
        toastr.warning("{{session()->get('danger')}}");
    @endif

    @if (session()->has('error'))
        toastr.error("{{session()->get('error')}}");
    @endif
</script>
@endsection
