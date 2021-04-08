<div class="modal fade" id="csvImportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Select Recipient </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class='row'>
                    <div class='col-md-12'>

                        <form class="form-horizontal" method="POST" action="{{ route("admin.guestofhonor.emails") }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $template->id }}">
                            <div class="form-group">
                                <label class="required" for="emails">Please Select recipient</label>
                                <div style="padding-bottom: 20px">
                                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0; padding:10px">{{ trans('global.select_all') }}</span>
                                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0; padding:10px">{{ trans('global.deselect_all') }}</span>
                                </div>
                                <select class=" form-control select2" name="emails[]" id="emails" multiple required>
                                        @foreach($guests as $key => $guest)
                                            <option value="{{ $guest->id }}">{{ $guest->name}}</option>
                                        @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
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
