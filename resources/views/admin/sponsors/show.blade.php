@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sponsor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sponsors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.id') }}
                        </th>
                        <td>
                            {{ $sponsor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.name') }}
                        </th>
                        <td>
                            {{ $sponsor->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.phone') }}
                        </th>
                        <td>
                            {{ $sponsor->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.email') }}
                        </th>
                        <td>
                            {{ $sponsor->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.postal_address') }}
                        </th>
                        <td>
                            {{ $sponsor->postal_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.city') }}
                        </th>
                        <td>
                            {{ $sponsor->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.country') }}
                        </th>
                        <td>
                            {{ $sponsor->country }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sponsors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection