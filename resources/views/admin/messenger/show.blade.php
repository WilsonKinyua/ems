@extends('layouts.main-admin')
@section('title')
    {{ trans('panel.site_title') }} || {{ $topic->subject }}
@endsection
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner p-0">

        <div class="app-inner-layout">
            <div class="app-inner-layout__header bg-heavy-rain">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="fas fa-user-alt"></i>
                            </div>
                            <div>Mailbox
                                <div class="page-title-subheading">View all emails</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content card">
                    <div>
                        <div class="app-inner-layout__top-pane">
                            <div class="pane-left">
                                <div class="mobile-app-menu-btn">
                                    <button type="button" class="hamburger hamburger--elastic">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                                <h4 class="mb-0">Inbox</h4>
                            </div>
                            <div class="pane-right">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-search fa-w-16 "></i>
                                        </div>
                                    </div>
                                    <input placeholder="Search..." type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="table-responsive">
                                <table class="text-nowrap table-lg mb-0 table table-hover">
                                    <thead>
                                        <th>
                                            <p>
                                                @if($topic->receiverOrCreator() !== null && !$topic->receiverOrCreator()->trashed())
                                                    <a href="{{ route('admin.messenger.reply', [$topic->id]) }}" class="btn btn-primary btn-lg">
                                                        {{ trans('global.reply') }}
                                                    </a>
                                                @endif
                                            </p>
                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach($topic->messages as $message)
                                        <tr>
                                            <td>
                                                <strong>{{ $message->sender->email }}</strong>
                                            </td>
                                            <td>
                                                {{ $message->content }}
                                            </td>
                                            <td>
                                                {{ $message->created_at->diffForHumans() }}
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="app-inner-layout__sidebar card">
                    <ul class="nav flex-column">
                        <li class="pt-4 pl-3 pr-3 pb-3 nav-item">
                            <a href="{{ route('admin.messenger.createTopic') }}" class="btn-pill btn-shadow btn btn-primary btn-block">
                                Write New Email
                            </a>
                        </li>
                        <li class="nav-item-header nav-item">My Account</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.messenger.index') }}" class="nav-link">
                                <span>All Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.messenger.showInbox') }}" class="nav-link">
                                @if($unreads['inbox'] > 0)
                                    <strong>
                                        {{ trans('global.inbox') }}
                                        ({{ $unreads['inbox'] }})
                                    </strong>
                                @else
                                    {{ trans('global.inbox') }}
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.messenger.showOutbox') }}" class="nav-link">
                                @if($unreads['outbox'] > 0)
                                    <strong>
                                        {{ trans('global.outbox') }}
                                        ({{ $unreads['outbox'] }})
                                    </strong>
                                @else
                                    {{ trans('global.outbox') }}
                                @endif
                            </a>
                        </li>
                        <li class="nav-item-divider nav-item"></li>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </div>

</div>

@endsection
