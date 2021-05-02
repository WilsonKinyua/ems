@section('title')

    Delegate Management - {{ trans('panel.site_title') }}

@endsection

@extends('layout.admin')
@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
                <div class="page-header">
                    <div class="page-header-1">
                        <h3 class="main-content-title tx-30" style="font-weight: 900">Good evening, <span class="text-primary">{{ Auth::user()->first_name }}</span> </h3>
                    </div>
                </div>
             <!-- End Page Header -->
        </div>

    @can('delegate_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>DM</span>
                    </div>

                    <div class="w-title">

                        <h5>Delegate Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.delegates.index')}}">View Delegates List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.delegates.create') }}">Add Delegate</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.compose.mailmail')}}">Compose Delegate Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan

    @can('sponsor_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>SM</span>
                    </div>

                    <div class="w-title">

                        <h5>Sponsor Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.sponsors.index')}}">View Sponsors List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.sponsors.create') }}">Add Sponsor</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.sponsor-templates.create')}}">Compose Sponsor Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan

    @can('speaker_management_access')
    @can('speaker_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>SM</span>
                    </div>

                    <div class="w-title">

                        <h5>Speaker Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.speakers.index')}}">View Speaker List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.speakers.create') }}">Add Speaker</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.compose.speaker')}}">Compose Speaker Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('guest_of_honor_management_access')
    @can('guest_of_honor_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>GHM</span>
                    </div>

                    <div class="w-title">

                        <h5>Guest of Honor Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.guest-of-honors.index')}}">View Guest of Honor List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.guest-of-honors.create') }}">Add Guest of Honor</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.guest-of-honor-templates.create')}}">Compose Guest of Honor Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('exhibitors_management_access')
    @can('exhibitor_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>EM</span>
                    </div>

                    <div class="w-title">

                        <h5>Exhibitors Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.exhibitors.index')}}">View Exhibitor List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.exhibitors.create') }}">Add Exhibitor</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.compose.exhibitors')}}">Compose Exhibitor Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('media_management_access')
    @can('media_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>MM</span>
                    </div>

                    <div class="w-title">

                        <h5>Media Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.media.index')}}">View Media List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.media.create') }}">Add Media</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.media-templates.create')}}">Compose Media Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('partners_management_access')
    @can('partner_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>PM</span>
                    </div>

                    <div class="w-title">

                        <h5>Partners Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.partners.index')}}">View Partners List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.partners.create') }}">Add Partner</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.compose.partners')}}">Compose Partner's Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('customs_management_access')
    @can('custom_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>CM</span>
                    </div>

                    <div class="w-title">

                        <h5>Custom Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.customs.index')}}">View Customs List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.customs.create') }}">Add Custom</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.customs-templates.create')}}">Compose Custom Email</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan

    @can('visa_management_access')
    @can('visa_access')
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-five">

            <div class="widget-heading">

                <a href="javascript:void(0)" class="task-info">

                    <div class="usr-avatar">
                        <span>VM</span>
                    </div>

                    <div class="w-title">

                        <h5>Visa Management</h5>
                        {{-- <span>Design Reset</span> --}}

                    </div>

                </a>

                <div class="task-action">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


            <div class="widget-content">
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.visas.index')}}">View Visa List</a></h6>
                            {{-- <p class="mg-b-0">25 New Travel Locations</p> --}}
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.visas.create') }}">Add Visa</a></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action">
                    <div class="media">
                        <div class="d-flex mr-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="tx-inverse"><a href="{{ route('admin.visa-templates.create')}}">Compose Visa Mail</a></h6>
                        </div>
                    </div>
                </li>

                <div class="progress-data">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    @endcan
    @endcan
</div>
</div>
@endsection
