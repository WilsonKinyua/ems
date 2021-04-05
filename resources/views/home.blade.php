    {{-- @section('title')

        Admin Dashboard {{ trans('panel.site_title') }}

    @endsection

@extends('layouts.main-admin')

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        Welcome back, <span style="text-transform: capitalize" class="username text-success">{{ Auth::user()->first_name }}</span>
                    </div>
                </div>    </div>
        </div>

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
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="">
                    <div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">

                                    <div class="widget-content-left">
                                        <div class="widget-heading">Download Excel File
                                            <a style="color: black;" data-toggle="tooltip" data-placement="top" title="Sometext" class="btn btn-xs">?</a>
                                        </div>
                                        <div class="widget-subheading">Download the guide...

                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">
                                            <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download
                                                <i class="fas fa-file-excel"></i>
                                                <img height="20px" src="{{ asset('icons/excel.png')}}" alt="">
                                            </a>

                                                <img height="35px" src="{{ asset('icons/excel.png')}}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-xl-5">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Upload Excel File<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Upload something following the format" class="btn btn-xs">?</a></div>
                                        <div class="widget-subheading">The csv file must be a file of type: csv, txt.</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#csvImportModal">Upload <i class="fas fa-upload"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Sponsor template<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary">View Template</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Delegate template<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Speaker template<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Guest of Honor<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Exhibitor<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Media<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Partners<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Customs<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Visa<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers"> Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Immigration<a style="color: black;" data-toggle="tooltip" data-placement="top" title="Download something!" class="btn btn-xs">?</a></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download <img height="20px" src="{{ asset('icons/word.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
@parent

@endsection


    @section('modal')

        @include('modal.sponsor-modal')

    @endsection --}}


@section('title')

    Welcome back - {{ trans('panel.site_title') }}

@endsection

@extends('layouts.theme')


@section('content')
<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Row -->
					<div class="row">
						<div class="col-xl-8">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<div class="card overflow-hidden bg-primary-gradient">
										<div class="card-body">
											<div class="d-flex clearfix">
												<div class="text-left">
													<p class="mb-0 text-white fs-24">Guests</p>
													<h1 class="mb-0 text-white fs-30">000</h1>
													<p class="mb-0 text-white icon-service-1"><span
															class="text-white"><i
																class="fa fa-chevron-up text-white"></i> +%</span>
													</p>
												</div>
												<div class="ml-auto">
													<span class="bg-primary icon-service text-white ">
														<i class="fas fa-user sub-icon"></i>
													</span>
												</div>
											</div>
										</div>
										<img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/pngs/img-1.png"
											alt="img" class="img-card-circle">
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<div class="card overflow-hidden bg-secondary-gradient">
										<div class="card-body">
											<div class="d-flex clearfix">
												<div class="text-left">
													<p class="mb-0 text-white fs-24">Delegates</p>
													<h1 class="mb-0 text-white fs-30">000 K</h1>
													<p class="mb-0 text-white icon-service-1"><span
															class="text-white"><i
																class="fa fa-chevron-up text-white"></i> +%</span>
													</p>
												</div>
												<div class="ml-auto">
													<span class="bg-secondary icon-service text-white ">
														<i class="fas fa-users sub-icon"></i>
													</span>
												</div>
											</div>
										</div>
										<img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/pngs/img-2.png"
											alt="img" class="img-card-circle">
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<div class="card overflow-hidden bg-purple-gradient">
										<div class="card-body">
											<div class="d-flex clearfix">
												<div class="text-left">
													<p class="mb-0 text-white fs-24">Sponsors</p>
													<h1 class="mb-0 text-white fs-30">000 K</h1>
													<p class="mb-0 text-white icon-service-1"><span
															class="text-white"><i
																class="fa fa-chevron-down text-white"></i> -%</span>
													</p>
												</div>
												<div class="ml-auto">
													<span class="bg-purple icon-service text-white">
														<i class="fas fa-layer-group"></i>
													</span>
												</div>
											</div>
										</div>
										<img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/pngs/img-2.png"
											alt="img" class="img-card-circle">
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
									<div class="card overflow-hidden bg-success-gradient">
										<div class="card-body">
											<div class="d-flex clearfix">
												<div class="text-left">
													<p class="mb-0 text-white fs-24">Speakers</p>
													<h1 class="mb-0 text-white fs-30">000 K</h1>
													<p class="mb-0 text-white icon-service-1"><span
															class="text-white"><i
																class="fa fa-chevron-up text-white"></i> +%</span>
													</p>
												</div>
												<div class="ml-auto">
													<span class="bg-success icon-service text-white ">
														<i class="fab fa-speaker-deck"></i>
													</span>
												</div>
											</div>
										</div>
										<img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/pngs/img-1.png"
											alt="img" class="img-card-circle">
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="card">
								<div class="card-header pd-t-20 bd-b-0">
									<div class="d-md-flex justify-content-between">
										<h4 class="card-title font-weight-semibold mb-sm-3">A simple Bar Graph</h4>
										<div class="dash2-select wd-150">
											<select name="coins" class="form-control custom-select select2">
												<option value="1" selected>Guests</option>
												<option value="2">Sponsors</option>
												<option value="3">Delegates</option>
												<option value="4">Speakers</option>
												<option value="5">Etc</option>
											</select>
										</div>
									</div>
								</div>
								<div class="card-body p-0 mb-0">
									<div id="bar" class="sales-bar"></div>
								</div>
							</div>
						</div>
					</div>

        </div>
    </div>

@endsection
