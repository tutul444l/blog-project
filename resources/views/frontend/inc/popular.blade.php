<div class="container">
    <div class="popular-post text-center mt-5 mb-5">
      <h2> Most Poopular Posts</h2>
    </div>
    <div class="my-slider">
        @foreach ($posts as $post)
        <div class="col-md-4 ps-4 mt-5 mb-3">
            <div class="card border-0" >
              <img src="{{asset('storage/post/'.$post->image)}}" class="card-img-top " alt="...">
              <div class="card-body">

              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
                      <h4>{{$post->title}}</h4>
                      <p>{{$post->description}}</p>
                      <div class="user-profile d-flex">
                        <div class="user-img">
                         <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                        </div>
                        <div class="user-info ms-3">
                          <h5>Sergy Campbell</h5>
                          <p style="color: gray;">CEO and Founder</p>
                        </div>
                      </div>
              </div>
            </div>
          </div>
        @endforeach
      {{-- <div class="container">
        <div class="popular-post-card justify-content-center d-flex">
          <div class="card" style="width: 38rem;">
            <img src="{{asset('frontend/img/s1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
              <h4>Your most unhappy customers are your greatest source of learning.</h4>
              <p style="color: gray;font-size: 12px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <div class="user-profile d-flex">
                <div class="user-img">
                 <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                </div>
                <div class="user-info ms-3">
                  <h5>Sergy Campbell</h5>
                  <p style="color: gray;">CEO and Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div> --}}

{{--
      <div class="container">
        <div class="popular-post-card justify-content-center d-flex">
          <div class="card" style="width: 38rem;">
            <img src="{{asset('frontend/img/G-2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
              <h4>Your most unhappy customers are your greatest source of learning.</h4>
              <p style="color: gray;font-size: 12px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <div class="user-profile d-flex">
                <div class="user-img">
                 <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                </div>
                <div class="user-info ms-3">
                  <h5>Sergy Campbell</h5>
                  <p style="color: gray;">CEO and Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="popular-post-card justify-content-center d-flex">
          <div class="card" style="width: 38rem;">
            <img src="{{asset('frontend/img/G-3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
              <h4>Your most unhappy customers are your greatest source of learning.</h4>
              <p style="color: gray;font-size: 12px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <div class="user-profile d-flex">
                <div class="user-img">
                 <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                </div>
                <div class="user-info ms-3">
                  <h5>Sergy Campbell</h5>
                  <p style="color: gray;">CEO and Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>




      <div class="container">
        <div class="popular-post-card justify-content-center d-flex">
          <div class="card" style="width: 38rem;">
            <img src="{{asset('frontend/img/G-5.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
              <h4>Your most unhappy customers are your greatest source of learning.</h4>
              <p style="color: gray;font-size: 12px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <div class="user-profile d-flex">
                <div class="user-img">
                 <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                </div>
                <div class="user-info ms-3">
                  <h5>Sergy Campbell</h5>
                  <p style="color: gray;">CEO and Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="popular-post-card justify-content-center d-flex">
          <div class="card" style="width: 38rem;">
            <img src="{{asset('frontend/img/G-6.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
              <h4>Your most unhappy customers are your greatest source of learning.</h4>
              <p style="color: gray;font-size: 12px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <div class="user-profile d-flex">
                <div class="user-img">
                 <img src="{{asset('frontend/img/CEO.jpg')}}"  id="profile-img" alt="">
                </div>
                <div class="user-info ms-3">
                  <h5>Sergy Campbell</h5>
                  <p style="color: gray;">CEO and Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
