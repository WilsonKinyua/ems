@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.exhibitorsTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exhibitors-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $exhibitorsTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $exhibitorsTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.exhibitorsTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $exhibitorsTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exhibitors-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection