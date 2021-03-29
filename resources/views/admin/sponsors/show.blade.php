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
                            {{ trans('cruds.sponsor.fields.subject') }}
                        </th>
                        <td>
                            {{ $sponsor->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.logo') }}
                        </th>
                        <td>
                            @if($sponsor->logo)
                                <a href="{{ $sponsor->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $sponsor->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.date') }}
                        </th>
                        <td>
                            {{ $sponsor->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.address') }}
                        </th>
                        <td>
                            {!! $sponsor->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.ref') }}
                        </th>
                        <td>
                            {{ $sponsor->ref }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.body') }}
                        </th>
                        <td>
                            {!! $sponsor->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.signature') }}
                        </th>
                        <td>
                            @if($sponsor->signature)
                                <a href="{{ $sponsor->signature->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $sponsor->signature->getUrl('thumb') }}">
                                </a>
                            @endif
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
                            {{ trans('cruds.sponsor.fields.company_organisation') }}
                        </th>
                        <td>
                            {{ $sponsor->company_organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sponsor.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $sponsor->phone_number }}
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
                            {{ trans('cruds.sponsor.fields.website_link') }}
                        </th>
                        <td>
                            {{ $sponsor->website_link }}
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