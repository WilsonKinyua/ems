<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enable Speaker Self-Registration</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" readonly value="{{ route('speaker.create', [Auth::user()->id, Str::random(30)] )}}">
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal"><i
                    class="flaticon-cancel-12"></i> Close</button>
            <button type="button" class="btn btn-primary">Copy Link</button>
        </div>
    </div>
</div>
</div>
