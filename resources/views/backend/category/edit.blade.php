@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <div class="container">
                <h1 class="text-info">Update Category</h1>
                <div class="row ">
                    <div class="col-md-8">
                        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="inputName" class="form-label"> Category Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $category->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">Category Image</label>
                                <input type="file" class="form-control" id="image" name="category_image"
                                   {{-- value="{{ $post->image }}"--}}>
                                    <img src="{{asset('storage/category/'.$category->category_image)}}" alt="" width="150px" height="70px">


                            </div>
                            {{-- Storage::disk('public')->delete('post/' . $post->image); --}}
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
