@extends('layout.admin')

@section('title')
      Create Visa - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Create Visa</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route("admin.visas.store") }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label class="required" for="name">{{ trans('cruds.visa.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.name_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="phone">{{ trans('cruds.visa.fields.phone') }}</label>
                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.phone_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">{{ trans('cruds.visa.fields.email') }}</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.email_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="postal_address">{{ trans('cruds.visa.fields.postal_address') }}</label>
                        <input class="form-control {{ $errors->has('postal_address') ? 'is-invalid' : '' }}" type="text" name="postal_address" id="postal_address" value="{{ old('postal_address', '') }}">
                        @if($errors->has('postal_address'))
                            <div class="invalid-feedback">
                                {{ $errors->first('postal_address') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.postal_address_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="city">{{ trans('cruds.visa.fields.city') }}</label>
                        <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                        @if($errors->has('city'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.city_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="country">{{ trans('cruds.visa.fields.country') }}</label>
                        <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}" required>
                        @if($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.visa.fields.country_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" type="submit">
                            {{ trans('global.save') }}
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
