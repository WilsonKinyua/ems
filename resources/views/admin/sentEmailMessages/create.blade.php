@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sentEmailMessage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sent-email-messages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="sent_to_name">{{ trans('cruds.sentEmailMessage.fields.sent_to_name') }}</label>
                <input class="form-control {{ $errors->has('sent_to_name') ? 'is-invalid' : '' }}" type="text" name="sent_to_name" id="sent_to_name" value="{{ old('sent_to_name', '') }}" required>
                @if($errors->has('sent_to_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sent_to_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.sent_to_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="sent_to_email">{{ trans('cruds.sentEmailMessage.fields.sent_to_email') }}</label>
                <input class="form-control {{ $errors->has('sent_to_email') ? 'is-invalid' : '' }}" type="email" name="sent_to_email" id="sent_to_email" value="{{ old('sent_to_email') }}" required>
                @if($errors->has('sent_to_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sent_to_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.sent_to_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="subject">{{ trans('cruds.sentEmailMessage.fields.subject') }}</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', '') }}" required>
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="message">{{ trans('cruds.sentEmailMessage.fields.message') }}</label>
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message" required>{{ old('message') }}</textarea>
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="token">{{ trans('cruds.sentEmailMessage.fields.token') }}</label>
                <textarea class="form-control {{ $errors->has('token') ? 'is-invalid' : '' }}" name="token" id="token">{{ old('token') }}</textarea>
                @if($errors->has('token'))
                    <div class="invalid-feedback">
                        {{ $errors->first('token') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.token_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="read">{{ trans('cruds.sentEmailMessage.fields.read') }}</label>
                <input class="form-control {{ $errors->has('read') ? 'is-invalid' : '' }}" type="number" name="read" id="read" value="{{ old('read', '0') }}" step="1" required>
                @if($errors->has('read'))
                    <div class="invalid-feedback">
                        {{ $errors->first('read') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sentEmailMessage.fields.read_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection