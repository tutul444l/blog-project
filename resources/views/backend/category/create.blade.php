@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">


            <div class="container">
                <h1 class="text-info">Create Category</h1>
                <div class="row ">
                    <div class="col-md-8">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                            @csrf
                            <div class="mb-3">
                                <label for="inputName" class="form-label"> Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">Category Image</label>
                                <input type="file" class="form-control" id="image" name="category_image">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
