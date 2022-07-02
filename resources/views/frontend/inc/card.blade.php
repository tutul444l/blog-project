<div class="container  mt-5" >
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 ps-4 mt-5 mb-3">
            <div class="card border-0" >
              <img src="{{asset('storage/post/'.$post->image)}}" class="card-img-top " alt="...">
              <div class="card-body">

              <h6>{{$post->category_name}} <span style="color:gray"> — July 2, 2020</span></h6>
                      <h4>{{$post->category_name}}</h4>
                      <h2 class="fs-5 fw-bold">{{$post->description}}</h2>
                      <p>{{$post->meta_description}}</p>
                      <div class="user-profile d-flex">
                        <div class="user-img">
                         <img src="{{asset('storage/userprofile/'.$post->user->img)}}"  id="profile-img" alt="">
                         {{-- <img src="{{asset('storage/userprofile/'.$post->userImg->img)}}"  id="profile-img" alt=""> --}}
                        </div>
                        <div class="user-info ms-3">

                          {{-- <h5>{{Auth::user()->name}}</h5> --}}
                          <h5>{{$post->user->name}}</h5>

                          <p style="color: gray;">CEO and Founder</p>
                        </div>
                      </div>
              </div>
            </div>
          </div>
        @endforeach




  </div>


