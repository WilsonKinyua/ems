@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.guestOfHonorTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guest-of-honor-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $guestOfHonorTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $guestOfHonorTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $guestOfHonorTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.guest-of-honor-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection