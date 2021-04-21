@extends('layout.admin')

@section('title')
    Manage Account Settings - {{ trans('panel.site_title') }}
@endsection

@section('styles')
    <link href="{{ asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="layout-px-spacing">

        <div class="row mt-4">
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <form id="general-info" class="section general-info" method="POST" action="{{ route('admin.general.user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="info">
                        <h6 class="">General Information</h6>
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                        <div class="upload mt-4 pr-md-4">
                                            <input type="file" name="file" required class="dropify" data-default-file="" data-max-file-size="2M"/>
                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="fullName">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control mb-4" name="first_name" id="fullName" placeholder="Jimmy" value="{{ old('first_name', Auth::user()->first_name) }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="fullName">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control mb-4" id="fullName" name="last_name" placeholder="Turner" value="{{ old('last_name', Auth::user()->last_name) }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="fullName">Company</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" name="company" placeholder="Wezaprosoft" value="{{ old('company', Auth::user()->company) }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="profession">Job Title</label>
                                                        <input type="text" class="form-control mb-4" id="profession" name="job_title" placeholder="Designer" value="{{ old('job_title', Auth::user()->job_title) }}">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="profession">Email</label>
                                                        <input type="text" class="form-control mb-4" disabled id="profession" name="email" placeholder="Designer" value="{{ old('email', Auth::user()->email) }}">
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right mb-5">
                                                <button id="add-work-platforms" type="submit" class="btn btn-primary btn-lg">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <form id="about" class="section about" method="POST" action="{{ route('admin.bio.user')}}">
                    @csrf
                    <div class="info">
                        <h5 class="">About</h5>
                        <div class="row">
                            <div class="col-md-11 mx-auto">
                                <div class="form-group">
                                    <label for="aboutBio">Bio</label>
                                    <textarea class="form-control" name="description" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10">{{ old('description', Auth::user()->description) }}</textarea>
                                </div>
                                <div class="col-md-12 text-right mb-5">
                                    <button id="add-work-platforms" type="submit" class="btn btn-primary btn-lg">Update Bio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
<script>
    @if (session()->has('success'))
        toastr.success("{{session()->get('success')}}");
    @endif

    @if (session()->has('danger'))
        toastr.warning("{{session()->get('danger')}}");
    @endif

    @if (session()->has('error'))
        toastr.error("{{session()->get('error')}}");
    @endif
</script>
    <script src="{{ asset('assets/js/users/account-settings.js')}}"></script>
@endsection
