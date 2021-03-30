@extends('layouts.theme')

@section('title')
      Compose Mail || Delegates - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Delegate</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Compose Mail</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- row -->
        <div class="row">

            <div class="col-xl-12 col-lg-12  main-content-body-mail2">
                <div class="card">
                    <div class="card-header d-flex pt-4 pl-4 pr-4 pb-0">
                        <h4 class="card-title font-weight-semibold mb-0">Compose new message</h4>
                        <div class="ml-auto mt-2">
                            <ul class="unstyled inbox-pagination mb-0 ml-auto d-md-flex d-md-none">
                                <li><a href="#" class="tx-20 text-dark"><i class="fe fe-chevron-up"></i></a>
                                </li>
                                <li><a href="#" class="tx-20 text-dark ml-2"><i
                                            class="fe fe-maximize"></i></a></li>
                                <li><a href="#" class="tx-20 text-dark ml-2"><i class="fe fe-x"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pb-0">
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
                            <div class="card-footer border-top-0 mb-2 text-right">
                                <a class="btn ripple btn-primary mr-3 wd-100 rounded-11 mt-1 mb-1" href="#">
                                    Cancel</a>
                                <button class="btn ripple btn-primary wd-100 rounded-11  mt-1 mb-1" type="submit" > Send Mail</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
