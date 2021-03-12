@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.delegate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.delegates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.id') }}
                        </th>
                        <td>
                            {{ $delegate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.title') }}
                        </th>
                        <td>
                            {{ $delegate->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.firstname') }}
                        </th>
                        <td>
                            {{ $delegate->firstname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.lastname') }}
                        </th>
                        <td>
                            {{ $delegate->lastname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.secondname') }}
                        </th>
                        <td>
                            {{ $delegate->secondname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.email') }}
                        </th>
                        <td>
                            {{ $delegate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.company') }}
                        </th>
                        <td>
                            {{ $delegate->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.citizenship') }}
                        </th>
                        <td>
                            {{ $delegate->citizenship }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.type_of_attendee') }}
                        </th>
                        <td>
                            {{ $delegate->type_of_attendee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.delegate.fields.payment_status') }}
                        </th>
                        <td>
                            {{ $delegate->payment_status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.delegates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection