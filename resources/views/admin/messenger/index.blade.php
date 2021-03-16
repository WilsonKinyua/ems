{{-- @extends('admin.messenger.template')

@section('title', $title)

@section('messenger-content')
<div class="row">
    <div class="col-lg-12">
        <div class="list-group">
            @forelse($topics as $topic)
                <div class="row list-group-item d-flex">
                    <div class="col-lg-4">
                        <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                            @php($receiverOrCreator = $topic->receiverOrCreator())
                                @if($topic->hasUnreads())
                                    <strong>
                                        {{ $receiverOrCreator !== null ? $receiverOrCreator->email : '' }}
                                    </strong>
                                @else
                                    {{ $receiverOrCreator !== null ? $receiverOrCreator->email : '' }}
                                @endif
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                            @if($topic->hasUnreads())
                                <strong>
                                    {{ $topic->subject }}
                                </strong>
                            @else
                                {{ $topic->subject }}
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-2 text-right">{{ $topic->created_at->diffForHumans() }}</div>
                    <div class="col-lg-1 text-center">
                        <form action="{{ route('admin.messenger.destroyTopic', [$topic->id]) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                        </form>
                    </div>
                </div>
                @empty
                <div class="row list-group-item">
                    {{ trans('global.you_have_no_messages') }}
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.main-admin')
@section('title')
    {{ trans('panel.site_title') }} || Send Messenges
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
                                    <tbody>

                                        @forelse($topics as $topic)

                                        <tr>
                                            <td class="text-center" style="width: 78px;">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" id="eCheckbox1"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label"
                                                        for="eCheckbox1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="text-left pl-1">
                                                <i class="fa fa-star"></i>
                                            </td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle"
                                                                src="{{ asset('assets/images/avatars/1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">
                                                                <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                                                                    @php($receiverOrCreator = $topic->receiverOrCreator())
                                                                        @if($topic->hasUnreads())
                                                                            <strong>
                                                                                {{ $receiverOrCreator !== null ? $receiverOrCreator->email : '' }}
                                                                            </strong>
                                                                        @else
                                                                            {{ $receiverOrCreator !== null ? $receiverOrCreator->email : '' }}
                                                                        @endif
                                                                </a>
                                                            </div>
                                                            {{-- <div class="widget-subheading">Last seen online
                                                                15 minutes ago</div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                                                    @if($topic->hasUnreads())
                                                        <strong>
                                                            {{ $topic->subject }}
                                                        </strong>
                                                    @else
                                                        {{ $topic->subject }}
                                                    @endif
                                                </a>
                                        </td>
                                            <td class="text-right">
                                                <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                                {{ $topic->created_at->diffForHumans() }}
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.messenger.destroyTopic', [$topic->id]) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @csrf
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-center">{{ trans('global.you_have_no_messages') }}</td>
                                        </tr>
                                        @endforelse
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
