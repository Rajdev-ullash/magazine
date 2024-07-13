@extends('admin.layouts.admin')
@section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@stop
@section('content')
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="offset-2 col-lg-8">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-2">Create Article</h1>
                    </div>
                    <form class="user" action="{{ URL::to('store-article') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}" placeholder="Enter your article name">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <select class="form-select form-select-lg form-control" name="category" id="category">
                                <option value="" {{ old('category') == '' ? 'selected' : '' }}>Select category
                                </option>
                                @foreach ($categories as $d)
                                    <option value="{{ $d->id }}" {{ old('category') == $d->id ? 'selected' : '' }}>
                                        {{ $d->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="short_des" name="short_des" rows="3"
                                placeholder="Enter your article short description">{{ old('short_des') }}</textarea>
                            @if ($errors->has('short_des'))
                                <span class="text-danger">{{ $errors->first('short_des') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="details" name="details" placeholder="Enter your article description"
                                value="{{ old('details') }}">{{ old('details') }}</textarea>
                            @if ($errors->has('details'))
                                <span class="text-danger">{{ $errors->first('details') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="main_image">Select your main image</label>
                            <input type="file" class="form-control" id="main_image" name="main_image">
                            @if ($errors->has('main_image'))
                                <span class="text-danger">{{ $errors->first('main_image') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="thumbnail_image">Select your thumbnail image</label>
                            <input type="file" class="form-control" id="thumbnail_image" name="thumbnail_image">
                            @if ($errors->has('thumbnail_image'))
                                <span class="text-danger">{{ $errors->first('thumbnail_image') }}</span>
                            @endif
                        </div>

                        <div id="images">
                            @if (old('images'))
                                @foreach (old('images') as $index => $image)
                                    <div class="form-group image-upload">
                                        <label for="images[]">Images</label>
                                        <input type="file"
                                            class="form-control @error('images.' . $index) is-invalid @enderror"
                                            name="images[]">
                                        @error('images.' . $index)
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <label for="captions[]">Captions</label>
                                        <input type="text"
                                            class="form-control @error('captions.' . $index) is-invalid @enderror"
                                            name="captions[]" value="{{ old('captions.' . $index) }}"
                                            placeholder="Caption for image">
                                        @error('captions.' . $index)
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        {{-- <button type="button" class="btn btn-danger remove-image">Remove</button> --}}
                                    </div>
                                @endforeach
                            @else
                                <div class="form-group image-upload">
                                    <label for="images[]">Images</label>
                                    <input type="file" class="form-control" name="images[]">
                                    <label for="captions[]">Captions</label>
                                    <input type="text" class="form-control" name="captions[]"
                                        placeholder="Caption for image">
                                    {{-- <button type="button" class="btn btn-danger remove-image">Remove</button> --}}
                                </div>
                            @endif
                        </div>

                        <button class="btn btn-primary mb-2" type="button" id="add_image">Add another image</button>

                        <div class="form-group">
                            <input type="text" class="form-control" id="writer" name="writer"
                                value="{{ old('writer') }}" placeholder="Enter your writer name">
                            @if ($errors->has('writer'))
                                <span class="text-danger">{{ $errors->first('writer') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <select class="form-select form-select-lg form-control" name="show_home_page"
                                id="show_home_page">
                                <option value="" {{ old('show_home_page') == '' ? 'selected' : '' }}>Select show home
                                    page</option>
                                <option value="1" {{ old('show_home_page') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('show_home_page') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                            @if ($errors->has('show_home_page'))
                                <span class="text-danger">{{ $errors->first('show_home_page') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <select class="form-select form-select-lg form-control" name="features" id="features">
                                <option value="" {{ old('features') == '' ? 'selected' : '' }}>Is features!</option>
                                <option value="1" {{ old('features') == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('features') == '0' ? 'selected' : '' }}>No</option>
                            </select>
                            @if ($errors->has('features'))
                                <span class="text-danger">{{ $errors->first('features') }}</span>
                            @endif
                        </div>

                        <input name="submit" type="submit" value="Create" class="btn btn-primary btn-user btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#details'))
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('min-height', '200px', editor.editing.view.document.getRoot());
                });
            })
            .catch(error => {
                console.error(error);
            });

        document.getElementById('add_image').addEventListener('click', function() {
            let imageUploadDiv = document.createElement('div');
            imageUploadDiv.className = 'form-group image-upload';

            imageUploadDiv.innerHTML = `
                <label for="images[]">Images</label>
                <input type="file" class="form-control" name="images[]">
                <label for="captions[]">Captions</label>
                <input type="text" class="form-control" name="captions[]" placeholder="Caption for image">
                <button type="button" class="btn btn-danger remove-image">Remove</button>
            `;

            document.getElementById('images').appendChild(imageUploadDiv);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-image')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@stop
