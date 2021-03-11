    @section('title')

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
                        Welcome back, <span class="username text-success">{{ Auth::user()->first_name }}</span>
                    </div>
                </div>    </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="">
                    <div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Download Excel File</div>
                                        <div class="widget-subheading">Download the guide...</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">
                                            <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-5">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Upload Excel File</div>
                                        <div class="widget-subheading">The csv file must be a file of type: csv, txt.</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">
                                            <button class="btn btn-primary">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Sponsor template</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Delegate template</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Speaker template</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Guest of Honor</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Exhibitor</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Media</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Partners</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Customs</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Visa</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Immigration</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">
                                        <a href="{{ asset('downloads/justapdf.pdf')}}" class="btn btn-primary" download="GuideToUploadUsers">Download</a>
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
