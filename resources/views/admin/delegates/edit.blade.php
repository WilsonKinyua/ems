@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.delegate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.delegates.update", [$delegate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.delegate.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $delegate->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="firstname">{{ trans('cruds.delegate.fields.firstname') }}</label>
                <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', $delegate->firstname) }}" required>
                @if($errors->has('firstname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.firstname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lastname">{{ trans('cruds.delegate.fields.lastname') }}</label>
                <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', $delegate->lastname) }}" required>
                @if($errors->has('lastname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.lastname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="secondname">{{ trans('cruds.delegate.fields.secondname') }}</label>
                <input class="form-control {{ $errors->has('secondname') ? 'is-invalid' : '' }}" type="text" name="secondname" id="secondname" value="{{ old('secondname', $delegate->secondname) }}" required>
                @if($errors->has('secondname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('secondname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.secondname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.delegate.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $delegate->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.delegate.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', $delegate->company) }}">
                @if($errors->has('company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="citizenship">{{ trans('cruds.delegate.fields.citizenship') }}</label>
                <input class="form-control {{ $errors->has('citizenship') ? 'is-invalid' : '' }}" type="text" name="citizenship" id="citizenship" value="{{ old('citizenship', $delegate->citizenship) }}">
                @if($errors->has('citizenship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('citizenship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.citizenship_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_of_attendee">{{ trans('cruds.delegate.fields.type_of_attendee') }}</label>
                <input class="form-control {{ $errors->has('type_of_attendee') ? 'is-invalid' : '' }}" type="text" name="type_of_attendee" id="type_of_attendee" value="{{ old('type_of_attendee', $delegate->type_of_attendee) }}">
                @if($errors->has('type_of_attendee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_attendee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.type_of_attendee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_status">{{ trans('cruds.delegate.fields.payment_status') }}</label>
                <input class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" type="text" name="payment_status" id="payment_status" value="{{ old('payment_status', $delegate->payment_status) }}">
                @if($errors->has('payment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.delegate.fields.payment_status_helper') }}</span>
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