@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partnersTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partners-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $partnersTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $partnersTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $partnersTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partners-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection