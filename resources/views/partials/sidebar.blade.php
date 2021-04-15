 <!--  BEGIN SIDEBAR  -->
 <div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image"></figure>
            <div class="user-info">
                <img src="{{ asset('assets/img/profile-17.jpg')}}" alt="avatar">
                <h6 class="">Susan Markims</h6>
                <p class="">Web Developer</p>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ request()->is("admin/#") || request()->is("admin/#") ? "active" : "" }}">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled {{ request()->is("admin/*") ? "c-show" : "" }} {{ request()->is("admin/*") ? "show" : "" }}"
                    id="dashboard" data-parent="#accordionExample">
                    {{-- <li>
                        <a href="#"> Sales </a>
                    </li> --}}
                    <li class="{{ request()->is("admin/#") || request()->is("admin/#") ? "active" : "" }}">
                        <a href="{{ route('admin.home') }}"> Dashboard </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="menu">
                <a href="#" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li> --}}
            @can('delegate_access')
            <li class="menu {{ request()->is("admin/delegates/*") || request()->is("admin/delegates/*") ? "active" : ""}}">
                <a href="{{ route('admin.delegates.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>Delegates</span>
                    </div>
                </a>
            </li>
            @endcan
            @can('sponsor_access')
            <li class="menu {{ request()->is("admin/sponsors/*") || request()->is("admin/sponsors/*") ? "active" : "" }}">
                <a href="{{ route("admin.sponsors.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span>Sponsors</span>
                    </div>
                </a>
            </li>
            @endcan
            @can('speaker_management_access')
            @can('speaker_access')
            <li class="menu {{ request()->is("admin/speakers") || request()->is("admin/speakers/*") ? "active" : "" }}">
                <a href="{{ route("admin.speakers.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-target">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                        <span>Speakers</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('guest_of_honor_management_access')
            @can('guest_of_honor_access')
            <li class="menu {{ request()->is("admin/guest-of-honors") || request()->is("admin/guest-of-honors/*") ? "active" : "" }}">
                <a href="{{ route("admin.guest-of-honors.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-layout">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <span>Guest Of Honor</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('exhibitors_management_access')
            @can('exhibitor_access')
            <li class="menu {{ request()->is("admin/exhibitors") || request()->is("admin/exhibitors/*") ? "active" : "" }}">
                <a href="{{ route("admin.exhibitors.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-layers">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                        <span>Exhibitors</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('media_management_access')
            @can('media_access')
            <li class="menu {{ request()->is("admin/media") || request()->is("admin/media/*") ? "active" : "" }}">
                <a href="{{ route("admin.media.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-airplay">
                            <path
                                d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                            </path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Medias</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('partners_management_access')
            @can('partner_access')
            <li class="menu {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "active" : "" }}">
                <a href="{{ route("admin.partners.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span>Partners</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('customs_management_access')
            @can('custom_access')
            <li class="menu {{ request()->is("admin/customs") || request()->is("admin/customs/*") ? "active" : "" }}">
                <a href="{{ route("admin.customs.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span>Customs</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
            @can('visa_management_access')
            @can('visa_access')
            <li class="menu {{ request()->is("admin/visas") || request()->is("admin/visas/*") ? "active" : "" }}">
                <a href="{{ route("admin.visas.index") }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-terminal">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                        <span>Visa</span>
                    </div>
                </a>
            </li>
            @endcan
            @endcan
        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->
