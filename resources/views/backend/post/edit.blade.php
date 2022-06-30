@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            {{-- @include('layouts.backend.inc.content') --}}
            <div class="container-fluid ">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid offset">

                        <!-- start page title -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="page-title-box page-title-box-alt">
                                    <h4 class="page-title">Edit Post</h4>
                                    <div class="page-title-right">
                                        {{-- <ol class="breadcrumb m-0 ">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog-Project</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                        <li class="breadcrumb-item active">Post List</li>
                                    </ol> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{ session('success') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <a href="{{ route('post.index') }}" class="btn btn-success mb-2"><i
                                                        class="mdi mdi-format-list-bulleted me-1"></i> Post List</a>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-12">

                                                <form action="{{ route('post.update', $post->id) }}" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal" role="form">
                                                    @csrf
                                                    @method('PUT')
                                                    {{-- title-area start --}}
                                                    <div class="mb-3">
                                                        <label for="post_title" class="form-label">Title</label>
                                                        <input type="text" name="title" value="{{ $post->title }}"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="post_title">

                                                        @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="post_meta_title" class="form-label">Meta Title</label>
                                                        <input type="text" name="meta_title"
                                                            value="{{ $post->meta_title }}"
                                                            class="form-control @error('meta_title') is-invalid @enderror"
                                                            id="post-meta-title">

                                                        @error('meta_title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>
                                                    {{-- title-area end --}}

                                                    {{-- desciption-area start --}}
                                                    <div class="mb-3">
                                                        <label for="post_description" class="form-label">Description</label>
                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="post_description"
                                                            cols="30" rows="10">{{ $post->description }}</textarea>

                                                        @error('description')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="post_meta_description" class="form-label">Meta
                                                            Description</label>
                                                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                                            id="meta_description" cols="30" rows="10">{{ $post->meta_description }}</textarea>
                                                        @error('meta_description')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    {{-- desciption-area end --}}

                                                    {{-- category start --}}
                                                    {{-- <div class="mb-3">
                                                        <label for="post_category" class="form-label">Category</label>
                                                        <input type="number" name="category_id"
                                                            value="{{ $post->category_id }}"
                                                            class="form-control @error('category_id') is-invalid @enderror"
                                                            id="category">
                                                        @error('category_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="post_sub_category"
                                                            class="form-label">Sub-Category</label>
                                                        <input type="number" name="sub_category_id"
                                                            value="{{ $post->sub_category_id }}"
                                                            class="form-control @error('sub_category_id') is-invalid @enderror"
                                                            id="post_sub_category">

                                                        @error('sub_category_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div> --}}

                                                    <div class="mb-3">
                                                        <label for="post_category" class="form-label">Category name</label>
                                                        <select class="form-select form-select-lg mb-3" name="category_name"  aria-label=".form-select-lg example" >

                                                       @foreach ($categories as $category )

                                                       <option selected value="{{$category->name}}">{{$category->name}}</option>
                                                       {{-- <option value="{{$category->name}}">{{$category->name}}</option> --}}
                                                       {{-- <option value="2">sojib</option> --}}
                                                       {{-- <option selected>{{$row->class}}</option> --}}

                                                       @endforeach
                                                      </select>

                                                </div>


                                                <div class="mb-3">
                                                    <label for="post_category" class="form-label">Sub-Category name</label>
                                                    <select class="form-select form-select-lg mb-3" name="subcategory_name"  aria-label=".form-select-lg example" >

                                                   @foreach ($subcategories as $subcategory )
                                                    {{-- <option value="2">sojib</option> --}}
                                                    <option selected value="{{$subcategory->name}}">{{$subcategory->name}}</option>
                                                   {{-- <option selected value="{{$subcategory->name}}">{{$subcategory->name}}</option> --}}

                                                   @endforeach
                                                  </select>

                                            </div>


                                                    {{-- category end --}}

                                                    {{-- date start --}}
                                                    <div class="mb-3">
                                                        <label for="post_date" class="form-label">Date</label>
                                                        <input type="date" name="date"
                                                            value="{{ $post->date->format('Y-m-d') }}"
                                                            class="form-control @error('date') is-invalid @enderror"
                                                            id="date">

                                                        {{-- value="{{$employee->join_date->format('Y-m-d')."T".$employee->join_date->format('H:i')}}" --}}
                                                        @error('date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror



                                                    </div>
                                                    {{-- date end --}}

                                                    {{-- image start --}}
                                                    <div class="mb-3">
                                                        <label for="post_image" class="form-label">Image</label>
                                                        <input type="file" name="image"
                                                            class="form-control @error('image') is-invalid @enderror"
                                                            id="post_image" value="{{ $post->image }}">

                                                        <img src="{{ asset('storage/post/' . $post->image) }}"
                                                            alt="" width="150px" height="70px">

                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>
                                                    {{-- image end --}}


                                                    <button type="submit" class="btn btn-success">Add
                                                        Post</button>
                                                </form>

                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
        </div>
    </div>
@endsection
