@extends('layout.admin')

@section('title')
      Send Mail - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Send Mail</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route("admin.visa-templates.emails") }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $template->id }}">
                            <div class="form-group">
                                <label class="required" for="emails">Please Select recipient</label>
                                <div style="padding-bottom: 20px">
                                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0; padding:10px">{{ trans('global.select_all') }}</span>
                                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0; padding:10px">{{ trans('global.deselect_all') }}</span>
                                </div>
                                <select class=" form-control select2" name="emails[]" id="emails" multiple required>
                                    @foreach($visas as $key => $visa)
                                        <option value="{{ $visa->id }}">{{ $visa->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                       Send
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
