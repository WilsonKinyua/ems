@extends('layouts.main-admin')

@section('title')
{{ trans('panel.site_title') }} ||  My Profile - {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
@endsection
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">

      <div class="row">
          <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Update Profile</h5>
                            @if(session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                        <form method="POST" class="col-md-10 mx-auto" action="{{ route("profile.password.updateProfile") }}">
                            @csrf
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <div>
                                <input type="text" class="form-control" id="firstname" value="{{ old('firstname', auth()->user()->first_name) }}" name="firstname" placeholder="First name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last name</label>
                            <div>
                                <input type="text" class="form-control" id="lastname" value="{{ old('lastname', auth()->user()->last_name) }}" name="lastname" placeholder="Last name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <div>
                                <input type="text" class="form-control" id="company" value="{{ old('company', auth()->user()->company) }}" name="company" placeholder="Company" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <div>
                                <input type="text" class="form-control" id="job_title" value="{{ old('job_title', auth()->user()->job_title) }}" name="job_title" placeholder="Job Title" />
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="email">Email</label>
                            <div>
                                <input type="email" class="form-control" id="email" value="{{ old('email', auth()->user()->email) }}" name="email" value="Email" />
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="description">Description</label>
                            <div>
                                <textarea name="description" id="description" placeholder="I am teacher..." class="form-control" >{{ old('description', auth()->user()->description) }}</textarea>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="photo">Profile Picture</label>
                            <input id="photo" type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>

          {{-- Update password --}}
          <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Update Password</h5>
                        <form method="POST" class="col-md-10 mx-auto" action="{{ route("profile.password.update") }}">
                            @csrf
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" placeholder="Password" id="password" required>
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm password</label>
                            <div>
                                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"  placeholder="Confirm password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="update_pass" value="Update Password">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection
