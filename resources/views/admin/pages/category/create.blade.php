@extends('admin.layouts.admin')

@section('content')
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="offset-3 col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create Category</h1>
                    </div>
                    <form class="user" action="{{ URL::to('store-category') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                value="{{ old('name') }}" placeholder="Enter your category name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <input name="submit" type="submit" value="Create" class="btn btn-primary btn-user btn-block">


                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
