@extends('layouts.theme')

@section('title')
Partner List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Partners</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Partner List</li>
                </ol>
            </div>
        </div>
        @can('media_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.partners.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.partner.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Medias', 'route' => 'admin.media.parseCsvImport'])
                    <a class="btn btn-success" href="{{ route('admin.partners-templates.create') }}">
                        Create {{ trans('cruds.partnersTemplate.title_singular') }}
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
                                                {{ trans('cruds.partner.fields.id') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.name') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.phone') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.email') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.postal_address') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.city') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.partner.fields.country') }}
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($partners as $key => $partner)
                                            <tr data-entry-id="{{ $partner->id }}">
                                                <td>

                                                </td>
                                                <td>
                                                    {{ $partner->id ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->phone ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->email ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->postal_address ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->city ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $partner->country ?? '' }}
                                                </td>
                                                <td>
                                                    @can('partner_show')
                                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.partners.show', $partner->id) }}">
                                                            {{ trans('global.view') }}
                                                        </a>
                                                    @endcan

                                                    @can('partner_edit')
                                                        <a class="btn btn-xs btn-info" href="{{ route('admin.partners.edit', $partner->id) }}">
                                                            {{ trans('global.edit') }}
                                                        </a>
                                                    @endcan

                                                    @can('partner_delete')
                                                        <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
