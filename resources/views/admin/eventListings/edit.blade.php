@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.eventListing.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.event-listings.update", [$eventListing->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="event_name">{{ trans('cruds.eventListing.fields.event_name') }}</label>
                <input class="form-control {{ $errors->has('event_name') ? 'is-invalid' : '' }}" type="text" name="event_name" id="event_name" value="{{ old('event_name', $eventListing->event_name) }}" required>
                @if($errors->has('event_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.event_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_description">{{ trans('cruds.eventListing.fields.event_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('event_description') ? 'is-invalid' : '' }}" name="event_description" id="event_description">{!! old('event_description', $eventListing->event_description) !!}</textarea>
                @if($errors->has('event_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.event_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_category_id">{{ trans('cruds.eventListing.fields.event_category') }}</label>
                <select class="form-control select2 {{ $errors->has('event_category') ? 'is-invalid' : '' }}" name="event_category_id" id="event_category_id" required>
                    @foreach($event_categories as $id => $event_category)
                        <option value="{{ $id }}" {{ (old('event_category_id') ? old('event_category_id') : $eventListing->event_category->id ?? '') == $id ? 'selected' : '' }}>{{ $event_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('event_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.event_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="language">{{ trans('cruds.eventListing.fields.language') }}</label>
                <input class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" type="text" name="language" id="language" value="{{ old('language', $eventListing->language) }}" required>
                @if($errors->has('language'))
                    <div class="invalid-feedback">
                        {{ $errors->first('language') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.language_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="photo">{{ trans('cruds.eventListing.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_start_date">{{ trans('cruds.eventListing.fields.event_start_date') }}</label>
                <input class="form-control date {{ $errors->has('event_start_date') ? 'is-invalid' : '' }}" type="text" name="event_start_date" id="event_start_date" value="{{ old('event_start_date', $eventListing->event_start_date) }}" required>
                @if($errors->has('event_start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.event_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_end_date">{{ trans('cruds.eventListing.fields.event_end_date') }}</label>
                <input class="form-control date {{ $errors->has('event_end_date') ? 'is-invalid' : '' }}" type="text" name="event_end_date" id="event_end_date" value="{{ old('event_end_date', $eventListing->event_end_date) }}">
                @if($errors->has('event_end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.event_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="eventsponsors">{{ trans('cruds.eventListing.fields.eventsponsors') }}</label>
                <input class="form-control {{ $errors->has('eventsponsors') ? 'is-invalid' : '' }}" type="text" name="eventsponsors" id="eventsponsors" value="{{ old('eventsponsors', $eventListing->eventsponsors) }}">
                @if($errors->has('eventsponsors'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eventsponsors') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.eventsponsors_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location">{{ trans('cruds.eventListing.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', $eventListing->location) }}" required>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_link">{{ trans('cruds.eventListing.fields.facebook_link') }}</label>
                <input class="form-control {{ $errors->has('facebook_link') ? 'is-invalid' : '' }}" type="text" name="facebook_link" id="facebook_link" value="{{ old('facebook_link', $eventListing->facebook_link) }}">
                @if($errors->has('facebook_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.facebook_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_link">{{ trans('cruds.eventListing.fields.twitter_link') }}</label>
                <input class="form-control {{ $errors->has('twitter_link') ? 'is-invalid' : '' }}" type="text" name="twitter_link" id="twitter_link" value="{{ old('twitter_link', $eventListing->twitter_link) }}">
                @if($errors->has('twitter_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.twitter_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin">{{ trans('cruds.eventListing.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $eventListing->linkedin) }}">
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="google_link">{{ trans('cruds.eventListing.fields.google_link') }}</label>
                <input class="form-control {{ $errors->has('google_link') ? 'is-invalid' : '' }}" type="text" name="google_link" id="google_link" value="{{ old('google_link', $eventListing->google_link) }}">
                @if($errors->has('google_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('google_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.google_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_link">{{ trans('cruds.eventListing.fields.youtube_link') }}</label>
                <input class="form-control {{ $errors->has('youtube_link') ? 'is-invalid' : '' }}" type="text" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $eventListing->youtube_link) }}">
                @if($errors->has('youtube_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventListing.fields.youtube_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/event-listings/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $eventListing->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.event-listings.storeMedia') }}',
    maxFilesize: 20, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($eventListing) && $eventListing->photo)
      var file = {!! json_encode($eventListing->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection