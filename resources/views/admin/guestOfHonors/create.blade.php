@extends('layouts.theme')

@section('title')
      Create Guest Of Honor List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Create Guest Of Honor</h1>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Create Guest Of Honor List</li>
                </ol> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route("admin.guest-of-honors.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="required" for="name">{{ trans('cruds.guestOfHonor.fields.name') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.name_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required" for="phone">{{ trans('cruds.guestOfHonor.fields.phone') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                                @if($errors->has('phone'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.phone_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required" for="email">{{ trans('cruds.guestOfHonor.fields.email') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.email_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="postal_address">{{ trans('cruds.guestOfHonor.fields.postal_address') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('postal_address') ? 'is-invalid' : '' }}" type="text" name="postal_address" id="postal_address" value="{{ old('postal_address', '') }}">
                                @if($errors->has('postal_address'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('postal_address') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.postal_address_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="city">{{ trans('cruds.guestOfHonor.fields.city') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                                @if($errors->has('city'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('city') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.city_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required" for="country">{{ trans('cruds.guestOfHonor.fields.country') }} <span class="text-danger">*</span></label>
                                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}" required>
                                @if($errors->has('country'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('country') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.guestOfHonor.fields.country_helper') }}</span>
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
