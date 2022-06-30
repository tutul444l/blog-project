@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <div class="container">
                <h1 class="text-info">Update Subategory</h1>
                <div class="row ">
                    <div class="col-md-8">
                        <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="inputName" class="form-label"> Subcategory Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $subcategory->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">Subcategory Image</label>
                                <input type="file" class="form-control" id="image" name="subcategory_image"
                                   {{-- value="{{ $post->image }}"--}}>
                                    <img src="{{asset('storage/subcategory/'.$subcategory->subcategory_image)}}" alt="" width="150px" height="70px">


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
