
 <section id="trending-area">
    <div class="trending-area-heading">
      <h2 class="fs-1 text-center pt-3 my-5 fw-bold">Trending</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme">
            @foreach ($posts as $post)
          <div class="item d-flex">
            <div class="col-5">
              <img src="{{asset('storage/post/'.$post->image)}}" alt="" width="460" height="350">
            </div>
            <div class=" col-6 carousel-content m-5">
              <p class="fw-bold">{{$post->category_name}}<span class="text-secondary fw-normal"> — July 2, 2020</span></p>
              <h2>{{$post->description}}</h2>
              <p class="text=secondary">{{$post->meta_description}}</p>
              <div class="profile d-flex">
                <a href="#">
                  <img src="{{asset('storage/userprofile/'.$post->user->img)}}" alt="" class="rounded-circle" width="50" height="50">
                </a>
                <div class="d-block ps-2">
                  <a href="#" class="fw-bold text-decoration-none text-dark ">{{$post->user->name}}</a><br>
                  <a href="#" class="text-decoration-none text-secondary">CEO and Founder</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

