@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.guestOfHonorTemplate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.guest-of-honor-templates.update", [$guestOfHonorTemplate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="subject">{{ trans('cruds.guestOfHonorTemplate.fields.subject') }}</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', $guestOfHonorTemplate->subject) }}" required>
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="logo">{{ trans('cruds.guestOfHonorTemplate.fields.logo') }}</label>
                <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}" type="text" name="logo" id="logo" value="{{ old('logo', $guestOfHonorTemplate->logo) }}" required>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.guestOfHonorTemplate.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $guestOfHonorTemplate->date) }}" required>
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.guestOfHonorTemplate.fields.address') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{!! old('address', $guestOfHonorTemplate->address) !!}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ref">{{ trans('cruds.guestOfHonorTemplate.fields.ref') }}</label>
                <input class="form-control {{ $errors->has('ref') ? 'is-invalid' : '' }}" type="text" name="ref" id="ref" value="{{ old('ref', $guestOfHonorTemplate->ref) }}" required>
                @if($errors->has('ref'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ref') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.ref_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="body">{{ trans('cruds.guestOfHonorTemplate.fields.body') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body">{!! old('body', $guestOfHonorTemplate->body) !!}</textarea>
                @if($errors->has('body'))
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.body_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="signature">{{ trans('cruds.guestOfHonorTemplate.fields.signature') }}</label>
                <input class="form-control {{ $errors->has('signature') ? 'is-invalid' : '' }}" type="text" name="signature" id="signature" value="{{ old('signature', $guestOfHonorTemplate->signature) }}" required>
                @if($errors->has('signature'))
                    <div class="invalid-feedback">
                        {{ $errors->first('signature') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.signature_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.guestOfHonorTemplate.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $guestOfHonorTemplate->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="company_organisation">{{ trans('cruds.guestOfHonorTemplate.fields.company_organisation') }}</label>
                <input class="form-control {{ $errors->has('company_organisation') ? 'is-invalid' : '' }}" type="text" name="company_organisation" id="company_organisation" value="{{ old('company_organisation', $guestOfHonorTemplate->company_organisation) }}" required>
                @if($errors->has('company_organisation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_organisation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.company_organisation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.guestOfHonorTemplate.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $guestOfHonorTemplate->phone_number) }}">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.guestOfHonorTemplate.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $guestOfHonorTemplate->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="website_link">{{ trans('cruds.guestOfHonorTemplate.fields.website_link') }}</label>
                <input class="form-control {{ $errors->has('website_link') ? 'is-invalid' : '' }}" type="text" name="website_link" id="website_link" value="{{ old('website_link', $guestOfHonorTemplate->website_link) }}" required>
                @if($errors->has('website_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.guestOfHonorTemplate.fields.website_link_helper') }}</span>
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
                xhr.open('POST', '/admin/guest-of-honor-templates/ckmedia', true);
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
                data.append('crud_id', '{{ $guestOfHonorTemplate->id ?? 0 }}');
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

@endsection