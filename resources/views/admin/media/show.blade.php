@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.medium.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.id') }}
                        </th>
                        <td>
                            {{ $medium->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.name') }}
                        </th>
                        <td>
                            {{ $medium->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.phone') }}
                        </th>
                        <td>
                            {{ $medium->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.email') }}
                        </th>
                        <td>
                            {{ $medium->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.postal_address') }}
                        </th>
                        <td>
                            {{ $medium->postal_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.city') }}
                        </th>
                        <td>
                            {{ $medium->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medium.fields.country') }}
                        </th>
                        <td>
                            {{ $medium->country }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection