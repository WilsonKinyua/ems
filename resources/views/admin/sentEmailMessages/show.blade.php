@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sentEmailMessage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sent-email-messages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.id') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.sent_to_name') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->sent_to_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.sent_to_email') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->sent_to_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.subject') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.message') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.token') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->token }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.read') }}
                        </th>
                        <td>
                            {{ $sentEmailMessage->read }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sent-email-messages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection