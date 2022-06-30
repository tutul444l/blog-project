{{-- <section class="slider">
    <div class="slider-header text-center mt-5 mb-5">
    <h2>Trending</h2>
    </div>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <img src="img/1.jpg" height="300px" width="350px" class="d-block w-100" alt="..."> -->
            <div class="container">
              <div class="row">
                <div class="col-md-4  " style="height:300px ;">
                  <!-- <img src="img/1.jpg" alt=""> -->
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, doloribus.</p> -->
                  <div class="main-slider-image image1 border danger w-100 h-100" ></div>

                </div>
                <div class="col-md-8 ">
                  <h6>Business, Travel <span style="color:gray"> — July 2, 2020</span></h6>
                  <h4>Your most unhappy customers are your greatest source of learning.</h4>
                  <p style="color: gray;font-size: 12px; ">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
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
          <div class="carousel-item">
            <!-- <img src="img/2.jpg" height="300px" width="350px" class="d-block w-100" alt="..."> -->
            <div class="container">
              <div class="row">
                <div class="col-md-4 ">
                  <!-- <img src="img/1.jpg" alt=""> -->
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, doloribus.</p> -->
                  <div class="main-slider-image image2 border danger w-100 h-100"></div>
                </div>
                <div class="col-md-8">
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
          <div class="carousel-item">
            <!-- <img src="img/3.jpg " height="300px" width="350px" class="d-block w-100" alt="..."> -->
            <div class="container">
              <div class="row">
                <div class="col-md-4 ">
                  <!-- <img src="img/1.jpg" alt=""> -->
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, doloribus.</p> -->
                  <div class="main-slider-image image3  border danger w-100 h-100"></div>
                </div>
                <div class="col-md-8">
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
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span> -->
        </button>
      </div>
    </div>
  </section> --}}

  {{-- ................................................. --}}


  <!-- trending-area start -->
 <section id="trending-area">
    <div class="trending-area-heading">
      <h2 class="fs-1 text-center pt-3 my-5 fw-bold">Trending</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme">
          <div class="item d-flex">
            <div class="col-5">
              <img src="{{asset('frontend/img/4.jpg')}}" alt="" width="460" height="350">
            </div>
            <div class=" col-6 carousel-content m-5">
              <p class="fw-bold">Business, Travel<span class="text-secondary fw-normal"> — July 2, 2020</span></p>
              <h2>Your most unhappy customers are your greatest source of learning.</h2>
              <p class="text=secondary">Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean.</p>
              <div class="profile d-flex">
                <a href="#">
                  <img src="{{asset('frontend/img/CEO.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                </a>
                <div class="d-block ps-2">
                  <a href="#" class="fw-bold text-decoration-none text-dark ">Sergy Campbell</a><br>
                  <a href="#" class="text-decoration-none text-secondary">CEO and Founder</a>
                </div>
              </div>
            </div>
          </div>
          <div class=" item d-flex">
            <div class="col-5">
              <img src="{{asset('frontend/img/1.jpg')}}" alt="" width="460" height="350">
            </div>
            <div class=" col-6 carousel-content m-5">
              <p class="fw-bold">Business, Travel<span class="text-secondary fw-normal"> — July 2, 2020</span></p>
              <h2>Your most unhappy customers are your greatest source of learning.</h2>
              <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean.</p>
              <div class="profile d-flex">
                <a href="#">
                  <img src="{{asset('frontend/img/CEO.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                </a>
                <div class="d-block ps-2">
                  <a href="#" class="fw-bold text-decoration-none text-dark ">Sergy Campbell</a><br>
                  <a href="#" class="text-decoration-none text-secondary">CEO and Founder</a>
                </div>
              </div>
            </div>
          </div>
          <div class=" item d-flex">
            <div class="col-5">
              <img src="{{asset('frontend/img/2.jpg')}}" alt="" width="460" height="350">
            </div>
            <div class=" col-6 carousel-content m-5">
              <p class="fw-bold">Business, Travel<span class="text-secondary fw-normal"> — July 2, 2020</span></p>
              <h2>Your most unhappy customers are your greatest source of learning.</h2>
              <p class="text-secondary">Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean.</p>
              <div class="profile d-flex">
                <a href="#">
                  <img src="{{asset('frontend/img/CEO.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                </a>
                <div class="d-block ps-2">
                  <a href="#" class="fw-bold text-decoration-none text-dark ">Sergy Campbell</a><br>
                  <a href="#" class="text-decoration-none text-secondary">CEO and Founder</a>
                </div>
              </div>
            </div>
          </div>
          <div class=" item d-flex">
            <div class="col-5">
              <img src="{{asset('frontend/img/3.jpg')}}" alt="" width="460" height="350">
            </div>
            <div class=" col-6 carousel-content m-5">
              <p class="fw-bold">Business, Travel<span class="text-secondary fw-normal"> — July 2, 2020</span></p>
              <h2>Your most unhappy customers are your greatest source of learning.</h2>
              <p class="text-secondary"> Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean.</p>
              <div class="profile d-flex">
                <a href="#">
                  <img src="{{asset('frontend/img/CEO.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                </a>
                <div class="d-block ps-2">
                  <a href="#" class="fw-bold text-decoration-none text-dark">Sergy Campbell</a><br>
                  <a href="#" class="text-decoration-none text-secondary">CEO and Founder</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- trending-area end -->
