

@extends('layouts.main-admin')

@section('title')
    {{ trans('panel.site_title') }} ||  Upload CSV
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
                    <div>List of all uploads maybe (delegates)
                        <div class="page-title-subheading">
                            Short description maybe
                        </div>
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

            <div class="d-flex justify-content-between mt-3">
                <div>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createdelegate">Add Delegate</button>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sendemails">Send Email</button>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.title') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.firstname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.lastname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.secondname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.email') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.delegate.fields.company') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.citizenship') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.type_of_attendee') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.delegate.fields.payment_status') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($delegates as $key => $delegate)
                        <tr data-entry-id="{{ $delegate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $delegate->id ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->title ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->firstname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->lastname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->secondname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->email ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $delegate->company ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->citizenship ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->type_of_attendee ?? '' }}
                            </td> --}}
                            <td>
                                {{ $delegate->payment_status ?? '' }}
                            </td>
                            <td>
                                {{-- @can('delegate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.delegates.show', $delegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('delegate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.delegates.edit', $delegate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan --}}

                                @can('delegate_delete')
                                    <form action="{{ route('admin.delegates.destroy', $delegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.title') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.firstname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.lastname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.secondname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.email') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.delegate.fields.company') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.citizenship') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.type_of_attendee') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.delegate.fields.payment_status') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </tfoot>
                </table>
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
                <h5 class="modal-title" id="sendemailsLabel">Send Emails to Many users at once</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.delagates.emails')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h5 class="card-title">Please Select recipient</h5>
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
{{-- create delegate --}}
<div class="modal fade" id="createdelegate" tabindex="-1" role="dialog" aria-labelledby="createdelegateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createdelegateLabel">Add Delegate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route("admin.delegates.store") }}" enctype="multipart/form-data">
                    @csrf
                   <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">{{ trans('cruds.delegate.fields.title') }}</label>
                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Dr" type="text" name="title" id="title" value="{{ old('title', '') }}">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.delegate.fields.title_helper') }}</span>
                        </div>
                       </div>
                       <div class="col-md-6">
                        <div class="form-group">
                            <label class="required" for="firstname">{{ trans('cruds.delegate.fields.firstname') }}</label>
                            <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" placeholder="John" type="text" name="firstname" id="firstname" value="{{ old('firstname', '') }}" required>
                            @if($errors->has('firstname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('firstname') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.delegate.fields.firstname_helper') }}</span>
                        </div>
                       </div>
                       <div class="col-md-6">
                        <div class="form-group">
                            <label class="required" for="lastname">{{ trans('cruds.delegate.fields.lastname') }}</label>
                            <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" placeholder="Doe" name="lastname" id="lastname" value="{{ old('lastname', '') }}" required>
                            @if($errors->has('lastname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lastname') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.delegate.fields.lastname_helper') }}</span>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="secondname">{{ trans('cruds.delegate.fields.secondname') }}</label>
                                <input class="form-control {{ $errors->has('secondname') ? 'is-invalid' : '' }}" placeholder="James" type="text" name="secondname" id="secondname" value="{{ old('secondname', '') }}" required>
                                @if($errors->has('secondname'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('secondname') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.secondname_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="email">{{ trans('cruds.delegate.fields.email') }}</label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="johndoe@mail.com" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.email_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">{{ trans('cruds.delegate.fields.company') }}</label>
                                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" placeholder="Wezaprosoft" type="text" name="company" id="company" value="{{ old('company', '') }}">
                                @if($errors->has('company'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('company') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.company_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="citizenship">{{ trans('cruds.delegate.fields.citizenship') }}</label>
                                <input class="form-control {{ $errors->has('citizenship') ? 'is-invalid' : '' }}" placeholder="Kenya" type="text" name="citizenship" id="citizenship" value="{{ old('citizenship', '') }}">
                                @if($errors->has('citizenship'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('citizenship') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.citizenship_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type_of_attendee">{{ trans('cruds.delegate.fields.type_of_attendee') }}</label>
                                <input class="form-control {{ $errors->has('type_of_attendee') ? 'is-invalid' : '' }}" placeholder="Finance" type="text" name="type_of_attendee" id="type_of_attendee" value="{{ old('type_of_attendee', '') }}">
                                @if($errors->has('type_of_attendee'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('type_of_attendee') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.type_of_attendee_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="payment_status">{{ trans('cruds.delegate.fields.payment_status') }}</label>
                                <input class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" type="text" name="payment_status" id="payment_status" value="{{ old('payment_status', '') }}">
                                @if($errors->has('payment_status'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('payment_status') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.delegate.fields.payment_status_helper') }}</span>
                            </div>
                        </div>
                   </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="send_emails">Add Delegate</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
@endsection
