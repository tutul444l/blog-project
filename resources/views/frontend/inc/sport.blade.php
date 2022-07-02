<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <h2  class="pb-2">Latest</h2>
            @foreach ($posts as $post)

            <div class="card border-0 mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/post/'.$post->image)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <h6>{{$post->category_name}} <span style="color:gray"> — July 2, 2020</span></h6>
                        <h6>Your most unhappy customers are your greatest source of learning.</h6>
                        {{-- <p style="color: gray;font-size: 8px;">Your most unhappy customers are your greatest source of learning.</p> --}}
                        <p>{{$post->title}}</p>
                        <div class="user-profile d-flex">
                          <div class="user-img">
                            <img src="{{asset('storage/userprofile/'.$post->user->img)}}"  id="profile-img-sport" alt="">
                          </div>
                          <div class="user-info " id="sport-content">
                            <h5>{{$post->user->name}}</h5>
                            <p style="color: gray;">CEO and Founder</p>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>



        <div class="col-md-6 ">
            <h2  class="pb-2">Top</h2>
            @foreach ($posts as $post)

            <div class="card border-0 mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/post/'.$post->image)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <h6>{{$post->category_name}} <span style="color:gray"> — July 2, 2020</span></h6>
                        <h6>Your most unhappy customers are your greatest source of learning.</h6>
                        {{-- <p style="color: gray;font-size: 8px;">Your most unhappy customers are your greatest source of learning.</p> --}}
                        <p>{{$post->title}}</p>
                        <div class="user-profile d-flex">
                          <div class="user-img">
                            <img src="{{asset('storage/userprofile/'.$post->user->img)}}"  id="profile-img-sport" alt="">
                          </div>
                          <div class="user-info " id="sport-content">
                            <h5>{{$post->user->name}}</h5>
                            <p style="color: gray;">CEO and Founder</p>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>

    </div>
