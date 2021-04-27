@extends('layout.admin')

@section('title')
       Guest of Honor Email Template - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Create Guest of Honor Email Template</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route("admin.guest-of-honor-templates.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="subject">Subject </label>
                                        <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" required value="{{ old('subject', '') }}">
                                        @if($errors->has('subject'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.subject_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="date">{{ trans('cruds.guestOfHonorTemplate.fields.date') }} </label>
                                        <input class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="basicFlatpickr" value="{{ old('date') }}" required>
                                        @if($errors->has('date'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('date') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.date_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="logo">{{ trans('cruds.guestOfHonorTemplate.fields.logo') }} </label> <br>
                                        <input  type="file" name="logo" id="logo" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="required" for="ref">Ref </label>
                                <input class="form-control {{ $errors->has('ref') ? 'is-invalid' : '' }}" type="text" name="ref" id="ref" placeholder="Why Market Research is Crucial for your Growing Business" value="{{ old('ref', '') }}" required>
                                @if($errors->has('ref'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('ref') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.ref_helper') }}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">{{ trans('cruds.guestOfHonorTemplate.fields.address') }} </label>
                                        <textarea class="form-control ckeditor {{ $errors->has('address') ? 'is-invalid' : '' }}" required name="address" id="address">{!! old('address') !!}
                                            <p>
                                                Nicole Thomas<br />
                                                35 Chestnut Street<br />
                                                Dell Village, Wisconsin 54101<br />
                                                555-555-5555<br />
                                                nicole@thomas.com
                                            </p>
                                        </textarea>
                                        @if($errors->has('address'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.address_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="body">{{ trans('cruds.guestOfHonorTemplate.fields.body') }} </label>
                                        <textarea class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body" required>{!! old('body') !!}</textarea>
                                        @if($errors->has('body'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('body') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.body_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="signature">{{ trans('cruds.guestOfHonorTemplate.fields.signature') }} </label>
                                        <br>
                                        <input  type="file" name="signature" id="signature" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="name">{{ trans('cruds.guestOfHonorTemplate.fields.name') }} </label>
                                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.name_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="company_organisation">{{ trans('cruds.guestOfHonorTemplate.fields.company_organisation') }} </label>
                                        <input class="form-control {{ $errors->has('company_organisation') ? 'is-invalid' : '' }}" type="text" name="company_organisation" id="company_organisation" value="{{ old('company_organisation', '') }}" required>
                                        @if($errors->has('company_organisation'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('company_organisation') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.company_organisation_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="phone_number">{{ trans('cruds.guestOfHonorTemplate.fields.phone_number') }} </label>
                                        <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" step="1" required>
                                        @if($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.phone_number_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="email">{{ trans('cruds.guestOfHonorTemplate.fields.email') }} </label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.email_helper') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required" for="website_link">{{ trans('cruds.guestOfHonorTemplate.fields.website_link') }} </label>
                                        <input class="form-control {{ $errors->has('website_link') ? 'is-invalid' : '' }}" type="text" placeholder="https://www.google.com" name="website_link" id="website_link" value="{{ old('website_link', '') }}" required>
                                        @if($errors->has('website_link'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('website_link') }}
                                            </div>
                                        @endif
                                        <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.website_link_helper') }}</span>
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
