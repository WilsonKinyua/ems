<div class="modal fade" id="sponsortemplate" tabindex="-1" role="dialog" aria-labelledby="sendemailsLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        {{-- modal-lg --}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendemailsLabel">Edit Sponsor Template</h5>
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
                            {{-- @foreach($delegates as $key => $delegate)
                                <option value="{{ $delegate->id }}">{{ $delegate->firstname}}</option>
                            @endforeach --}}
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
