@extends('layouts.theme')

@section('title')
Media List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Media</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Media List</li>
                </ol>
            </div>
        </div>
        @can('media_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.media.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.media.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Medium', 'route' => 'admin.media.parseCsvImport'])
                    <a class="btn btn-success" href="{{ route('admin.media-templates.create') }}">
                        Create {{ trans('cruds.mediaTemplate.title_singular') }}
                    </a>
                </div>
            </div>
        @endcan

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered text-nowrap">
                                    <thead>
                                        <tr>
                                            <th width="10">

                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.id') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.name') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.phone') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.email') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.postal_address') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.city') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.country') }}
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($media as $key => $medium)
                                            <tr data-entry-id="{{ $medium->id }}">
                                                <td>

                                                </td>
                                                <td>
                                                    {{ $medium->id ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->phone ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->email ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->postal_address ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->city ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->country ?? '' }}
                                                </td>
                                                <td>
                                                    @can('media_show')
                                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.media.show', $medium->id) }}">
                                                            {{ trans('global.view') }}
                                                        </a>
                                                    @endcan

                                                    @can('media_edit')
                                                        <a class="btn btn-xs btn-info" href="{{ route('admin.media.edit', $medium->id) }}">
                                                            {{ trans('global.edit') }}
                                                        </a>
                                                    @endcan

                                                    @can('media_delete')
                                                        <form action="{{ route('admin.media.destroy', $medium->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

