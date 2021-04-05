@extends('layouts.theme')

@section('title')
      Delegates List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Delegates</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Delegates List</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
            @can('delegate_access')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        @can('delegate_create')
                        <a class="btn btn-success" href="{{ route('admin.delegates.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.delegate.title_singular') }}
                        </a>
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#csvImportModal">
                            Upload CSV
                            <i class="fas fa-upload"></i>
                        </button>
                        @endcan
                        @include('csvImport.modal', ['model' => 'Delegate', 'route' => 'admin.delegates.parseCsvImport'])
                        <a class="btn btn-secondary" href="{{ route('admin.compose.mailmail')}}">
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
									<div>
										<h6 class="main-content-label mb-1">Delegates List</h6>
										{{-- <p class="text-muted card-sub-title">Responsive is an extension for DataTables
											that resolves that problem by optimising the table's layout for different
											screen sizes through the dynamic insertion and removal of columns from the
											table.</p> --}}
									</div>
									<div class="table-responsive">
										<table id="example3" class="table table-striped table-bordered text-nowrap">
											<thead>
                                                <tr>
                                                    <th width="10">

                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.id') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.title') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.firstname') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.lastname') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.secondname') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.email') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.company') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.citizenship') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.type_of_attendee') }}
                                                    </th>
                                                    <th>
                                                        {{ trans('cruds.delegate.fields.payment_status') }}
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
											</thead>
											<tbody>
                                                @foreach($delegates as $key => $delegate)
                                                <tr data-entry-id="{{ $delegate->id }}">
                                                    <td>

                                                    </td>
                                                    <td>
                                                        {{ $delegate->id ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->title ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->firstname ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->lastname ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->secondname ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->email ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->company ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->citizenship ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->type_of_attendee ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $delegate->payment_status ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{-- @can('delegate_show')
                                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.delegates.show', $delegate->id) }}">
                                                                {{ trans('global.view') }}
                                                            </a>
                                                        @endcan --}}

                                                        @can('delegate_edit')
                                                            <a class="btn btn-xs btn-info" href="{{ route('admin.delegates.edit', $delegate->id) }}">
                                                                {{ trans('global.edit') }}
                                                            </a>
                                                        @endcan

                                                        @can('delegate_delete')
                                                            <form action="{{ route('admin.delegates.destroy', $delegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
					<!-- End Row -->

    </div>
</div>
@endsection

@section('modal')

@endsection
