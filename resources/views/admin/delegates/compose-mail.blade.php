

@extends('layouts.main-admin')

@section('title')
    {{ trans('panel.site_title') }} ||  Compose Mail
@endsection

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <div>Compose Mail
                        {{-- <div class="page-title-subheading">
                            Short description maybe
                        </div> --}}
                    </div>
                </div>
            </div>

           <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
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
               </div>
               <div class="col-md-4"></div>
           </div>

        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.delagates.emails')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="required" for="lastname">Subject</label>
                        <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', '') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="emails">Please Select recipient</label>
                        <div style="padding-bottom: 20px">
                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0; padding:10px">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0; padding:10px">{{ trans('global.deselect_all') }}</span>
                        </div>
                        <select class=" form-control select2" name="emails[]" id="emails" multiple required>
                                @foreach($delegates as $key => $delegate)
                                    <option value="{{ $delegate->id }}">{{ $delegate->firstname}} {{ $delegate->lastname}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control ckeditor" required name="body" id="body">{!! old('body') !!}</textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('modal')
<!-- mail Modal -->
<div class="modal fade" id="sendemails" tabindex="-1" role="dialog" aria-labelledby="sendemailsLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendemailsLabel">Send Email to Many recipients at once</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.delagates.emails')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h5 class="card-title">Please Select recipient</h5>
                    <button type="button" class="chosen-toggle select">Select all</button>
                    <button type="button" class="chosen-toggle deselect">Deselect all</button>
                    <select multiple="multiple" class="multiselect-dropdown form-control" name="emails[]">
                            @foreach($delegates as $key => $delegate)
                                <option value="{{ $delegate->id }}">{{ $delegate->firstname}}</option>
                            @endforeach
                    </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="send_emails">Send Mail</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
@endsection
