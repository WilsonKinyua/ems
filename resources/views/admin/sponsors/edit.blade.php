@extends('layouts.theme')

@section('title')
      Edit Sponsor - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Sponsor</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Sponsor</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="POST" action="{{ route("admin.sponsors.update", [$sponsor->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.sponsor.fields.name') }}</label>
                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $sponsor->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="phone">{{ trans('cruds.sponsor.fields.phone') }}</label>
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $sponsor->phone) }}" required>
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.sponsor.fields.email') }}</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $sponsor->email) }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="postal_address">{{ trans('cruds.sponsor.fields.postal_address') }}</label>
                            <input class="form-control {{ $errors->has('postal_address') ? 'is-invalid' : '' }}" type="text" name="postal_address" id="postal_address" value="{{ old('postal_address', $sponsor->postal_address) }}">
                            @if($errors->has('postal_address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('postal_address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.postal_address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="city">{{ trans('cruds.sponsor.fields.city') }}</label>
                            <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $sponsor->city) }}">
                            @if($errors->has('city'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('city') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.city_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="country">{{ trans('cruds.sponsor.fields.country') }}</label>
                            <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $sponsor->country) }}" required>
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sponsor.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection
