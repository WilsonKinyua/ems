<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('event_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/event-listings*") ? "c-show" : "" }} {{ request()->is("admin/event-categories*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fab fa-tencent-weibo c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.event.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('event_listing_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.event-listings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/event-listings") || request()->is("admin/event-listings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-terminal c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventListing.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('event_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.event-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/event-categories") || request()->is("admin/event-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-bookmark c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventCategory.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('sponsor_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sponsors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sponsors") || request()->is("admin/sponsors/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.sponsor.title') }}
                </a>
            </li>
        @endcan
        @can('sponsor_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/sponsors*") ? "c-show" : "" }} {{ request()->is("admin/sponsor-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.sponsorManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('sponsor_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.sponsors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sponsors") || request()->is("admin/sponsors/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.sponsor.title') }}
                        </a>
                    </li>
                @endcan
                @can('sponsor_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.sponsor-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sponsor-templates") || request()->is("admin/sponsor-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.sponsorTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('speaker_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/speakers*") ? "c-show" : "" }} {{ request()->is("admin/speaker-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fab fa-speakap c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.speakerManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('speaker_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.speakers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/speakers") || request()->is("admin/speakers/*") ? "c-active" : "" }}">
                            <i class="fa-fw fab fa-speakap c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.speaker.title') }}
                        </a>
                    </li>
                @endcan
                @can('speaker_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.speaker-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/speaker-templates") || request()->is("admin/speaker-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.speakerTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('guest_of_honor_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/guest-of-honors*") ? "c-show" : "" }} {{ request()->is("admin/guest-of-honor-templates*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.guestOfHonorManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('guest_of_honor_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.guest-of-honors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/guest-of-honors") || request()->is("admin/guest-of-honors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.guestOfHonor.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('guest_of_honor_template_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.guest-of-honor-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/guest-of-honor-templates") || request()->is("admin/guest-of-honor-templates/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.guestOfHonorTemplate.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('exhibitors_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/exhibitors*") ? "c-show" : "" }} {{ request()->is("admin/exhibitors-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-asterisk c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.exhibitorsManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('exhibitor_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.exhibitors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exhibitors") || request()->is("admin/exhibitors/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.exhibitor.title') }}
                        </a>
                    </li>
                @endcan
                @can('exhibitors_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.exhibitors-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exhibitors-templates") || request()->is("admin/exhibitors-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.exhibitorsTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('media_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/media*") ? "c-show" : "" }} {{ request()->is("admin/media-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-asterisk c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.mediaManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('medium_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.media.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/media") || request()->is("admin/media/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.medium.title') }}
                        </a>
                    </li>
                @endcan
                @can('media_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.media-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/media-templates") || request()->is("admin/media-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-compact-disc c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.mediaTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('partners_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/partners*") ? "c-show" : "" }} {{ request()->is("admin/partners-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fab fa-mandalorian c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.partnersManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('partner_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.partners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.partner.title') }}
                        </a>
                    </li>
                @endcan
                @can('partners_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.partners-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partners-templates") || request()->is("admin/partners-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-file-image c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.partnersTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('customs_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/customs*") ? "c-show" : "" }} {{ request()->is("admin/customs-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-arrow-alt-circle-down c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.customsManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('custom_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.customs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customs") || request()->is("admin/customs/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.custom.title') }}
                        </a>
                    </li>
                @endcan
                @can('customs_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.customs-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customs-templates") || request()->is("admin/customs-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-file-image c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.customsTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
    @can('visa_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/visas*") ? "c-show" : "" }} {{ request()->is("admin/visa-templates*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fab fa-cc-visa c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.visaManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('visa_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.visas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/visas") || request()->is("admin/visas/*") ? "c-active" : "" }}">
                            <i class="fa-fw fab fa-cc-visa c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.visa.title') }}
                        </a>
                    </li>
                @endcan
                @can('visa_template_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.visa-templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/visa-templates") || request()->is("admin/visa-templates/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-file-image c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.visaTemplate.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/user-alerts*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_alert_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.userAlert.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('task_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/task-statuses*") ? "c-show" : "" }} {{ request()->is("admin/task-tags*") ? "c-show" : "" }} {{ request()->is("admin/tasks*") ? "c-show" : "" }} {{ request()->is("admin/tasks-calendars*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.taskManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('task_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-statuses") || request()->is("admin/task-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-tags") || request()->is("admin/task-tags/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.task.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tasks_calendar_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks-calendars.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks-calendars") || request()->is("admin/tasks-calendars/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-calendar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tasksCalendar.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.systemCalendar") }}" class="c-sidebar-nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "c-active" : "" }}">
                <i class="c-sidebar-nav-icon fa-fw fas fa-calendar">

                </i>
                {{ trans('global.systemCalendar') }}
            </a>
        </li>
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
