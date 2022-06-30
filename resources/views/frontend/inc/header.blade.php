<nav class="navbar navbar-light  border ">
    <div class="container ">
      <div class="row w-100">
        <div class="col-md-4 col-sm-12 bg-warnin order-2 order-md-0  ">
          <input type="text" id="nav-search" placeholder="Search..." class="mt-1">
        </div>
        <div class="col-md-4 bg-inf">
          <a href="#" id="link">MAGDESIGN</a>
        </div>
        <div class="col-md-4 bg-inf ">
          <!-- <div class="container"> -->

            <div class="row bg-inf p-0">
              <div class=" col-md-12 bg-dang d-flex justify-content-between  ">
                <div class="socaial pt-1">
                  <i class="fa-brands fa-twitter p-1"></i>
                  <i class="fa-brands fa-facebook-f p-1"></i>
                  <i class="fa-brands fa-instagram p-1"></i>
                </div>
                <div class="socaial">
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li> --}}
                        <li class="nav-item">


                            @guest
                            <a class="nav-link active" aria-current="page" href="{{ url('post') }}"><span><i class="fa-solid fa-user"></i></span> Login</a>

                                @else

                            <a class="nav-link active" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i>
                             {{ __('Logout') }}
                         </a>


                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                         @endguest



                          </li>
                      </ul>

                    </div>
                  </div>
                </div>


              </div>

            </div>


          <!-- </div> -->
        </div>
      </div>
    </div>
    </div>
  </nav>
