@extends('layouts.theme')

@section('title')
     Delegate || Upload CSV - {{ trans('panel.site_title') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Bulk Import</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Import CSV</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
        <div class='row'>
            <div class='col-md-12'>
                <div class="card panel-default">
                    <div class="card-header">
                        @lang('global.app_csvImport')
                    </div>

                    <div class="card-body table-responsive">
                        <form class="form-horizontal" method="POST" action="{{ route($routeName) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="filename" value="{{ $filename }}" />
                            <input type="hidden" name="hasHeader" value="{{ $hasHeader }}" />
                            <input type="hidden" name="modelName" value="{{ $modelName }}" />
                            <input type="hidden" name="redirect" value="{{ $redirect }}" />
                            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
                            <table class="table">
                                @if(isset($headers))
                                    <tr>
                                        @foreach($headers as $field)
                                            <th>{{ $field }}</th>
                                        @endforeach
                                    </tr>
                                @endif
                                @if($lines)
                                    @foreach($lines as $line)
                                        <tr>
                                            @foreach($line as $field)
                                                <td>{{ $field }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>
                                    @foreach($headers as $key => $header)
                                        <td>
                                            <select name="fields[{{ $key }}]">
                                                <option value=''>Please select</option>
                                                @foreach($fillables as $k => $fillable)
                                                    <option value="{{ $fillable }}" {{ strtolower($header) === strtolower($fillable) ? 'selected' : '' }}>{{ $fillable }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary">
                                @lang('global.app_import_data')
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
