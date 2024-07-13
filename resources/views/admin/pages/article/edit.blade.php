@extends('admin.layouts.admin')

@section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@stop

@section('content')
    <div class="card-body p-0">
        <div class="row">
            <div class="offset-2 col-lg-8">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Article</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::has('msg'))
                            <div class="alert alert-success">
                                <strong>{{ Session::get('msg') }}</strong>
                            </div>
                        @endif
                    </div>
                    <form class="user" action="{{ URL::to('/update-article/' . $article->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $article->title) }}" placeholder="Enter your article name">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category', $article->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_des">Short Description</label>
                            <textarea class="form-control" id="short_des" name="short_des" placeholder="Enter your article short description">{{ old('short_des', $article->short_description) }}</textarea>
                            @error('short_des')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" name="details" placeholder="Enter your article description">{{ old('details', $article->details) }}</textarea>
                            @error('details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="main_image">Main Image</label>
                            <input type="file" class="form-control" id="main_image" name="main_image">
                            @if ($article->main_image)
                                <img src="{{ asset($article->main_image) }}" alt="Current Main Image"
                                    style="max-height: 150px;">
                            @endif
                            @error('main_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="thumbnail_image">Thumbnail Image</label>
                            <input type="file" class="form-control" id="thumbnail_image" name="thumbnail_image">
                            @if ($article->thumbnail_image)
                                <img src="{{ asset($article->thumbnail_image) }}" alt="Current Thumbnail Image"
                                    style="max-height: 150px;">
                            @endif
                            @error('thumbnail_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div id="images">
                            <label for="images">Existing Images:</label>
                            @foreach ($images as $index => $image)
                                <div class="form-group image-upload">
                                    <label for="images[]">Image {{ $index + 1 }}</label>
                                    <input type="file" class="form-control" name="images[]">
                                    <label for="captions[]">Caption</label>
                                    <input type="text" class="form-control" name="captions[]"
                                        value="{{ old('captions.' . $index, $image->caption) }}"
                                        placeholder="Caption for image">
                                    <button type="button" class="btn btn-danger remove-image">Remove</button>
                                    @error('images.' . $index)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('captions.' . $index)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br>
                                    <img src="{{ asset($image->image_path) }}" alt="Image {{ $index + 1 }}"
                                        style="max-width: 150px; margin-top: 10px;">
                                </div>
                            @endforeach
                        </div>

                        <button class="btn btn-primary mb-2" type="button" id="add_image">Add Another Image</button>

                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input type="text" class="form-control" id="writer" name="writer"
                                value="{{ old('writer', $article->writer) }}" placeholder="Enter the writer's name">
                            @error('writer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status"
                                {{ session('userrole') == 'editor' ? 'disabled' : '' }}>
                                <option value="1" {{ old('status', $article->status) == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', $article->status) == '0' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="show_home_page">Show on Home Page</label>
                            <select class="form-control" id="show_home_page" name="show_home_page">
                                <option value="1"
                                    {{ old('show_home_page', $article->show_home_page) == '1' ? 'selected' : '' }}>
                                    Yes</option>
                                <option value="0"
                                    {{ old('show_home_page', $article->show_home_page) == '0' ? 'selected' : '' }}>
                                    No</option>
                            </select>
                            @error('show_home_page')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="features">Is features !</label>
                            <select class="form-control" id="features" name="features">
                                <option value="1" {{ old('features', $article->features) == '1' ? 'selected' : '' }}>
                                    Yes</option>
                                <option value="0" {{ old('features', $article->features) == '0' ? 'selected' : '' }}>
                                    No</option>
                            </select>
                            @error('features')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <input name="submit" type="submit" value="Update" class="btn btn-primary btn-user btn-block">

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
