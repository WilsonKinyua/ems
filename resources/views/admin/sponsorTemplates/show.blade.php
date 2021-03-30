@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sponsorTemplate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sponsor-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.id') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.subject') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.logo') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.date') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.address') }}
                        </th>
                        <td>
                            {!! $sponsorTemplate->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.ref') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.body') }}
                        </th>
                        <td>
                            {!! $sponsorTemplate->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.signature') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->signature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.name') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.email') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.website_link') }}
                        </th>
                        <td>
                            {{ $sponsorTemplate->website_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sponsor-templates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection