@extends('layouts.dashboard')
@section('content')
    <div class="row">

        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="font-weight-bold text-black">Edit Category </h4>
                    {{-- <h3 class="float-end">Count: <span></span></h3> --}}
                </div>
                <div class="card-body">

                    <form action="{{ url('/category/update') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Category Name</label>

                            <input type="text" name="category_name" class="form-control"
                                value="{{ $category_info->category_name }}">
                            <input type="hidden" name="id" class="form-control" value="{{ $category_info->id }}">
                            @error('category_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Category Name</label>
                            <input type="hidden" name="old_img" value="{{ $category_info->id }}">

                            <input type="file" name="category_image" class="form-control"
                                value="{{ $category_info->category_image }}">
                            <img src="{{ asset('/uploads/category/') }}/{{ $category_info->category_image }}"
                                height="90px" alt="">

                            @error('category_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <button class="btn btn-primary" type="submit">Update Category</button>


                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
