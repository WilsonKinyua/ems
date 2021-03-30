@extends('layouts.theme')

@section('title')
      Add Delegate - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Delegate</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Add Delegates</li>
                </ol>
            </div>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#csvImportModal">Upload CSV <i class="fas fa-upload"></i></button>
        </div>
        <!-- End Page Header -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route("admin.delegates.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">{{ trans('cruds.delegate.fields.title') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
                                        @if($errors->has('title'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.title_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="firstname">{{ trans('cruds.delegate.fields.firstname') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', '') }}" required>
                                        @if($errors->has('firstname'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('firstname') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.firstname_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="lastname">{{ trans('cruds.delegate.fields.lastname') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', '') }}" required>
                                        @if($errors->has('lastname'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('lastname') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.lastname_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="secondname">{{ trans('cruds.delegate.fields.secondname') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('secondname') ? 'is-invalid' : '' }}" type="text" name="secondname" id="secondname" value="{{ old('secondname', '') }}" required>
                                        @if($errors->has('secondname'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('secondname') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.secondname_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="email">{{ trans('cruds.delegate.fields.email') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.email_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">{{ trans('cruds.delegate.fields.company') }}<span class="text-danger">*</span> </label>
                                        <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', '') }}">
                                        @if($errors->has('company'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('company') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.company_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="citizenship">{{ trans('cruds.delegate.fields.citizenship') }}<span class="text-danger">*</span> </label>
                                        <input class="form-control {{ $errors->has('citizenship') ? 'is-invalid' : '' }}" type="text" name="citizenship" id="citizenship" value="{{ old('citizenship', '') }}">
                                        @if($errors->has('citizenship'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('citizenship') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.citizenship_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_of_attendee">{{ trans('cruds.delegate.fields.type_of_attendee') }}<span class="text-danger">*</span> </label>
                                        <input class="form-control {{ $errors->has('type_of_attendee') ? 'is-invalid' : '' }}" type="text" name="type_of_attendee" id="type_of_attendee" value="{{ old('type_of_attendee', '') }}">
                                        @if($errors->has('type_of_attendee'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('type_of_attendee') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.delegate.fields.type_of_attendee_helper') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="payment_status">{{ trans('cruds.delegate.fields.payment_status') }}<span class="text-danger">*</span> </label>
                                <input class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" type="text" name="payment_status" id="payment_status" value="{{ old('payment_status', '') }}">
                                @if($errors->has('payment_status'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('payment_status') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.payment_status_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    Add Delegate
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('modal')
    @include('csvImport.modal', ['model' => 'Delegate', 'route' => 'admin.delegates.parseCsvImport'])
@endsection
@endsection
