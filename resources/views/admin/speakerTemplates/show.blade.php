@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.speakerTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.speaker-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $speakerTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $speakerTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $speakerTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.speaker-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection