@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.guestOfHonor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guest-of-honors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.id') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.name') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.phone') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.email') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.postal_address') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->postal_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.city') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonor.fields.country') }}
                        </th>
                        <td>
                            {{ $guestOfHonor->country }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guest-of-honors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection