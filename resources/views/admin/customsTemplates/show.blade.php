@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customsTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customs-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $customsTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $customsTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $customsTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $customsTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $customsTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $customsTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $customsTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $customsTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $customsTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $customsTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $customsTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $customsTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customsTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $customsTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customs-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection