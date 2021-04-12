@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mediaTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.media-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $mediaTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $mediaTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $mediaTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.media-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection