@extends('layouts.main-admin')

@section('title')
    {{ trans('panel.site_title') }} || Create - Sponsor Template
@endsection

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <div>
                       Create Sponsor Template
                        <div class="page-title-subheading">
                            This is a Short description maybe to explain further what this page is.....
                        </div>
                    </div>
                </div>
            </div>

           <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
                @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               </div>
               <div class="col-md-4"></div>
           </div>

        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="POST" action="{{ route("admin.sponsors.store") }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject">Subject <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" required value="{{ old('subject', '') }}">
                                @if($errors->has('subject'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('subject') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.subject_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="date">{{ trans('cruds.sponsor.fields.date') }} <span class="text-danger">*</span></label>
                                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                                @if($errors->has('date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('date') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.date_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="logo">{{ trans('cruds.sponsor.fields.logo') }} <span class="text-danger">*</span></label> <br>
                                <input  type="file" name="logo" id="logo" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="required" for="ref">Ref <span class="text-danger">*</span></label>
                        <input class="form-control {{ $errors->has('ref') ? 'is-invalid' : '' }}" type="text" name="ref" id="ref" placeholder="Why Market Research is Crucial for your Growing Business" value="{{ old('ref', '') }}" required>
                        @if($errors->has('ref'))
                            <div class="invalid-feedback">
                                {{ $errors->first('ref') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.sponsor.fields.ref_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="address">{{ trans('cruds.sponsor.fields.address') }} <span class="text-danger">*</span></label>
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
                        <span class="help-block">{{ trans('cruds.sponsor.fields.address_helper') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="body">{{ trans('cruds.sponsor.fields.body') }} <span class="text-danger">*</span></label>
                        <textarea class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body" required>{!! old('body') !!}</textarea>
                        @if($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.sponsor.fields.body_helper') }}</span>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="signature">{{ trans('cruds.sponsor.fields.signature') }} <span class="text-danger">*</span></label>
                                <br>
                                <input  type="file" name="signature" id="signature" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="name">{{ trans('cruds.sponsor.fields.name') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.name_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="company_organisation">{{ trans('cruds.sponsor.fields.company_organisation') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('company_organisation') ? 'is-invalid' : '' }}" type="text" name="company_organisation" id="company_organisation" value="{{ old('company_organisation', '') }}" required>
                                @if($errors->has('company_organisation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('company_organisation') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.company_organisation_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="phone_number">{{ trans('cruds.sponsor.fields.phone_number') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="number" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" step="1" required>
                                @if($errors->has('phone_number'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone_number') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.phone_number_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="email">{{ trans('cruds.sponsor.fields.email') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.email_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="required" for="website_link">{{ trans('cruds.sponsor.fields.website_link') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('website_link') ? 'is-invalid' : '' }}" type="text" placeholder="https://www.google.com" name="website_link" id="website_link" value="{{ old('website_link', '') }}" required>
                                @if($errors->has('website_link'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('website_link') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.sponsor.fields.website_link_helper') }}</span>
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

@endsection