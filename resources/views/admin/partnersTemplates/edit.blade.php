@extends('layouts.theme')

@section('title')
      Compose Mail - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Partners</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Preview</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route("admin.partners-templates.update", [$partnersTemplate->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="subject">Subject <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" required value="{{ old('subject', $partnersTemplate->subject) }}">
                                        @if($errors->has('subject'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.subject_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="date">{{ trans('cruds.partnersTemplate.fields.date') }} <span class="text-danger">*</span></label>
                                        <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $partnersTemplate->date) }}" required>
                                        @if($errors->has('date'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('date') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.date_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="logo">{{ trans('cruds.partnersTemplate.fields.logo') }} <span class="text-danger">*</span></label> <br>
                                        <input  type="file" name="logo" id="logo" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="required" for="ref">Ref <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('ref') ? 'is-invalid' : '' }}" type="text" name="ref" id="ref" placeholder="Why Market Research is Crucial for your Growing Business" value="{{ old('ref', $partnersTemplate->ref) }}" required>
                                @if($errors->has('ref'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('ref') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.partnersTemplate.fields.ref_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="address">{{ trans('cruds.partnersTemplate.fields.address') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control ckeditor {{ $errors->has('address') ? 'is-invalid' : '' }}" required name="address" id="address">{!! old('address', $partnersTemplate->address) !!}
                                </textarea>
                                @if($errors->has('address'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.partnersTemplate.fields.address_helper') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="body">{{ trans('cruds.partnersTemplate.fields.body') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body" required>{!! old('body',$partnersTemplate->body) !!}</textarea>
                                @if($errors->has('body'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('body') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.partnersTemplate.fields.body_helper') }}</span>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="signature">{{ trans('cruds.partnersTemplate.fields.signature') }} <span class="text-danger">*</span></label>
                                        <br>
                                        <input  type="file" name="signature" id="signature" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="name">{{ trans('cruds.partnersTemplate.fields.name') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $partnersTemplate->name) }}" required>
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.name_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="company_organisation">{{ trans('cruds.partnersTemplate.fields.company_organisation') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('company_organisation') ? 'is-invalid' : '' }}" type="text" name="company_organisation" id="company_organisation" value="{{ old('company_organisation', $partnersTemplate->company_organisation) }}" required>
                                        @if($errors->has('company_organisation'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('company_organisation') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.company_organisation_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="phone_number">{{ trans('cruds.partnersTemplate.fields.phone_number') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $partnersTemplate->phone_number) }}" step="1" required>
                                        @if($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.phone_number_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="email">{{ trans('cruds.partnersTemplate.fields.email') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email',$partnersTemplate->email) }}" required>
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.email_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="website_link">{{ trans('cruds.partnersTemplate.fields.website_link') }} <span class="text-danger">*</span></label>
                                        <input class="form-control {{ $errors->has('website_link') ? 'is-invalid' : '' }}" type="text" placeholder="https://www.google.com" name="website_link" id="website_link" value="{{ old('website_link', $partnersTemplate->website_link) }}" required>
                                        @if($errors->has('website_link'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('website_link') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.partnersTemplate.fields.website_link_helper') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    Preview
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
