@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.visaTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visa-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $visaTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $visaTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $visaTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $visaTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $visaTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $visaTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $visaTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $visaTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $visaTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $visaTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $visaTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $visaTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $visaTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visa-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection