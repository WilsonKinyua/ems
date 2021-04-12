@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.custom.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.id') }}
                        </th>
                        <td>
                            {{ $custom->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.name') }}
                        </th>
                        <td>
                            {{ $custom->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.phone') }}
                        </th>
                        <td>
                            {{ $custom->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.email') }}
                        </th>
                        <td>
                            {{ $custom->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.postal_address') }}
                        </th>
                        <td>
                            {{ $custom->postal_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.city') }}
                        </th>
                        <td>
                            {{ $custom->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.custom.fields.country') }}
                        </th>
                        <td>
                            {{ $custom->country }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection