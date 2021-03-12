

@extends('layouts.main-admin')

@section('title')
    {{ trans('panel.site_title') }} ||  Upload CSV
@endsection

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <div>List of all upload maybe (delegates)
                        <div class="page-title-subheading">
                            Short description maybe
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
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
                            {{-- <th>
                                &nbsp;
                            </th> --}}
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
                            {{-- <td>
                                @can('delegate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.delegates.show', $delegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

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

                            </td> --}}

                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
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
                            {{-- <th>
                                &nbsp;
                            </th> --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
