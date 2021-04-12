<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="{{ route("admin.home")}}">
            {{-- <img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/brand/logo.png"
                class="header-brand-img desktop-logo" alt="logo">
            <img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/brand/icon.png"
                class="header-brand-img icon-logo" alt="logo">
            <img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/brand/dark-logo.png"
                class="header-brand-img desktop-logo theme-logo" alt="logo">
            <img src="https://www.spruko.com/demo/dashpro/Dashpro/assets/img/brand/icon.png"
                class="header-brand-img icon-logo theme-logo" alt="logo"> --}}
                <span style="text-transform: uppercase">Events MS</span>
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            {{-- <li class="nav-header"><span class="nav-label">Dashboard</span></li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
            </li>
            @can('delegate_access')
                <li class="nav-item {{ request()->is("admin/delegates") || request()->is("admin/delegates/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route('admin.delegates.index')}}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">Delegates</span></a>
                </li>
            @endcan
            @can('sponsor_access')
                <li class="nav-item {{ request()->is("admin/sponsors/*") || request()->is("admin/sponsors/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.sponsors.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">Sponsors</span></a>
                </li>
            @endcan
            @can('speaker_management_access')
            @can('speaker_access')
                <li class="nav-item {{ request()->is("admin/speakers") || request()->is("admin/speakers/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.speakers.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.speaker.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('guest_of_honor_management_access')
            @can('guest_of_honor_access')
                <li class="nav-item {{ request()->is("admin/guest-of-honors") || request()->is("admin/guest-of-honors/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.guest-of-honors.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.guestOfHonor.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('exhibitors_management_access')
            @can('exhibitor_access')
                <li class="nav-item {{ request()->is("admin/exhibitors") || request()->is("admin/exhibitors/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.exhibitors.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.exhibitor.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('media_management_access')
            @can('media_access')
                <li class="nav-item {{ request()->is("admin/media") || request()->is("admin/media/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.media.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.media.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('partners_management_access')
            @can('partner_access')
                <li class="nav-item {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.partners.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.partner.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('customs_management_access')
            @can('custom_access')
                <li class="nav-item {{ request()->is("admin/customs") || request()->is("admin/customs/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.customs.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.custom.title') }}</span></a>
                </li>
            @endcan
            @endcan
            @can('visa_management_access')
            @can('visa_access')
                <li class="nav-item {{ request()->is("admin/visas") || request()->is("admin/visas/*") ? "" : "" }}">
                    <a class="nav-link" href="{{ route("admin.visas.index") }}"><i class="fas fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">{{ trans('cruds.visa.title') }}</span></a>
                </li>
            @endcan
            @endcan
            {{-- <li class="nav-item">
                <a class="nav-link " href="index2.html"><i class="fe fe-layers sidemenu-icon"></i><span
                        class="sidemenu-label">Analytics</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index3.html"><i class="fe fe-bar-chart-2 sidemenu-icon"></i><span
                        class="sidemenu-label">Sales</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fa fa-shopping-bag sidemenu-icon"></i><span
                        class="sidemenu-label">E-commerce</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-products.html">Products</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-product-details.html">Product Details</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-cart.html">Cart</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-checkout.html">Checkout</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-orders.html">Orders</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="ecommerce-account.html">Account</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Applications</span></li>
            <li class="nav-item">
                <a class="nav-link" href="widgets.html"><i class="fe fe-grid sidemenu-icon"></i><span
                        class="sidemenu-label">Widgets</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-message-square sidemenu-icon"></i><span
                        class="sidemenu-label">Mail</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="mail-compose.html">Mail-Compose</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="mail-inbox.html">Mail-Inbox</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="viewmail.html">View-Mail</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-droplet sidemenu-icon"></i><span
                        class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons.html">Font Awesome</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons2.html">Material Design Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons3.html">Simple Line Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons4.html">Feather Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons5.html">Ionic Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons6.html">Flag Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons7.html">Pe7 Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons8.html">Themify Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons9.html">Typicons Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons10.html">Weather Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="icons11.html">Material Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-map-pin sidemenu-icon"></i><span
                        class="sidemenu-label">Maps</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="map-mapel.html">Mapel Maps</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="map-vector.html">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-layout sidemenu-icon"></i><span
                        class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="table-basic.html">Basic Tables</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="table-data.html">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-box sidemenu-icon"></i><span
                        class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chat.html">Chat</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="cards.html">Cards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="counters.html">Counters</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="calendar.html">Calendar</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="contacts.html">Contacts</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-file sidemenu-icon"></i><span
                        class="sidemenu-label">Forms</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-elements.html">Form Elements</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-advanced.html">Advanced Forms</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-layouts.html">Form Layouts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-validation.html">Form Validation</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-wizards.html">Form Wizards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="form-editor.html">WYSIWYG Editor</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-pie-chart sidemenu-icon"></i><span
                        class="sidemenu-label">Charts</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chart-morris.html">Morris Charts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chart-flot.html">Flot Charts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chart-chartjs.html">ChartJS</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chart-spark-peity.html">Sparkline &amp; Peity</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="chart-echart.html">Echart</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Components</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="ti-package sidemenu-icon"></i><span
                        class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="alerts.html">Alerts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="avatar.html">Avatar</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="buttons.html">Buttons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="badge.html">Badge</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="dropdown.html">Dropdown</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="thumbnails.html">Thumbnails</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="list-group.html">List Group</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="navigation.html">Navigation</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="pagination.html">Pagination</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="popover.html">Popover</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="progress.html">Progress</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="spinners.html">Spinners</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="media-object.html">Media Object</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="typography.html">Typography</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="tooltip.html">Tooltip</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="toast.html">Toast</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="tags.html">Tags</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-layout sidemenu-icon"></i><span
                        class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="accordion.html">Accordion</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="carousel.html">Carousel</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="collapse.html">Collapse</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="modals.html">Modals</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="timeline.html">Timeline</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="sweet-alert.html">Sweet Alert</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="rating.html">Ratings</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="search.html">Search</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="userlist.html">Userlist</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="blog.html">Blog</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Other Pages</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-book-open sidemenu-icon"></i><span
                        class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="profile.html">Profile</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="invoice.html">Invoice</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="pricing.html">Pricing</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="faq.html">Faqs</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="empty.html">Empty Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-bell sidemenu-icon"></i><span
                        class="sidemenu-label ">Alert-pages</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="message-success.html">Success Message</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="message-danger.html">Danger Message</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="message-warning.html">Warning Message</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-life-buoy sidemenu-icon"></i><span
                        class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="background.html">Background</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="border.html">Border</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="display.html">Display</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="flex.html">Flex</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="height.html">Height</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="margin.html">Margin</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="padding.html">Padding</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="position.html">Position</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="width.html">Width</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="extras.html">Extras</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="fe fe-lock sidemenu-icon"></i><span
                        class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span class="sidemenu-label">Sign In</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link" href="signin.html">SignIn-01</a>
                            </li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="signin2.html">SignIn-02</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span class="sidemenu-label">Sign Up</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link" href="signup.html">SignUp-01</a>
                            </li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="signup2.html">SignUp-02</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span class="sidemenu-label">Forgot
                                Password</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link" href="forgot.html">Forgot-01</a>
                            </li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="forgot2.html">Forgot-02</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span class="sidemenu-label">Reset
                                Password</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link" href="reset.html">Reset-01</a></li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="reset2.html">Reset-02</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span
                                class="sidemenu-label">Lockscreen</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link"
                                    href="lockscreen.html">lockscreen-01</a></li>
                            <li class="nav-sub-item"><a class="nav-sub-link"
                                    href="lockscreen2.html">lockscreen-02</a></li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-link sub-with-sub" href="#"><span class="sidemenu-label">404
                                Error</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="sub-nav-sub">
                            <li class="nav-sub-item"><a class="nav-sub-link" href="404.html">Error-01</a></li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="404-1.html">Error-02</a></li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="underconstruction.html">UnderConstruction</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="comingsoon.html">Coming-Soon</a>
                    </li>
                </ul>
            </li> --}}





        </ul>
    </div>
</div>
