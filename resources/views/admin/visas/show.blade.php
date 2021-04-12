@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.visa.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visas.index') }}">
                    {{ trans('global.back_to_list') }}
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
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection