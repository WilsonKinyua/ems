<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reset Password - {{ trans('panel.site_title') }}</title>
    <link rel="shortcut icon" href="https://developerwilson.com/assets/images/ico/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Please fill your email to receive reset code to -- {{ trans('panel.site_title') }}">
    {{-- Main style --}}
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('{{ asset('assets/images/loginregister/loginregister.jpg')}}');"></div>
                                        <div class="slider-content">
                                            <h3>Perfect Balance</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, 
                                                adipisicing elit. Eos sapiente ad ipsa eveniet tenetur non!.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('{{ asset('assets/images/originals/citynights.jpg')}}');"></div>
                                        <div class="slider-content">
                                            <h3>Scalable, Modular, Consistent</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, 
                                                adipisicing elit. Eos sapiente ad ipsa eveniet tenetur non!.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('https://images.pexels.com/photos/129830/pexels-photo-129830.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');"></div>
                                        <div class="slider-content">
                                            <h3>Complex, but lightweight</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, 
                                                adipisicing elit. Eos sapiente ad ipsa eveniet tenetur non!.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-8 col-lg-6">
                            <div class="app-logo"></div>
                            <h4>
                                <div>Forgot your Password?</div>
                                <span>Use the form below to recover it.</span>
                                @if(session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </h4>
                            <div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Email</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email') }}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <h6 class="mb-0">
                                            <a href="{{ route('login')}}" class="text-primary">Sign in existing account</a>
                                        </h6>
                                        <div class="ml-auto">
                                            <button class="btn btn-primary btn-lg">Recover Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('assets/scripts/main.js')}}"></script></body>
</html>