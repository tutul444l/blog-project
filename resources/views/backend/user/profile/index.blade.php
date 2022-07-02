@extends('backend.app')


@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">


            <div class="container">
                <h1 class="text-info">Update Profile</h1>
                <div class="row ">
                    <div class="col-md-6">
                        <form action="{{ route('update.user') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                            @csrf
                            <div class="mb-3">
                                <label for="inputName" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputName" class="form-label">  Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputImage" class="form-label">User Image</label>
                                <input type="file" class="form-control" id="image" name="img">
                                {{-- <img src="{{asset('frontend/img/CEO.jpg')}}"class="card-img-top" alt="..."  > --}}
                                <img src="{{asset('storage/userprofile/'.Auth::user()->img)}}" alt="" width="150px" height="70px">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img src="{{asset('storage/userprofile/'.Auth::user()->img)}}"class="card-img-top" alt="..." >
                            {{-- <img src="{{asset('frontend/img/CEO.jpg')}}" alt="" width="350px" height="400px" > --}}
                            <div class="card-body">
                              <h5 class="card-title">{{Auth::user()->name}}</h5>
                              <p class="card-text"><span style="color: red">Bio:<br></span> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>

                            {{-- <div class="card-body">
                              <a href="#" class="card-link">Card link</a>
                              <a href="#" class="card-link">Another link</a>
                            </div> --}}
                          </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
