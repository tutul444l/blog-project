<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url('/')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Show
                    </a>
                    <a class="nav-link" href="{{route('post.create')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Create Post
                    </a>
                    <a class="nav-link" href="{{route('category.create')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Create Category
                    </a>
                    <a class="nav-link" href="{{route('subcategory.create')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Create Sub-Category
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Product
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('category.index')}}">category</a>
                            <a class="nav-link" href="{{route('category.create')}}">category create</a>
                            <a class="nav-link" href="layout-sidenav-light.html">sub-category</a>
                            <a class="nav-link" href="{{route('post.create')}}">Create Post</a>
                            <a class="nav-link" href="{{route('post.index')}}">All Post</a>

                        </nav>
                    </div>




                </div>
            </div>

        </nav>
    </div>




</div>


