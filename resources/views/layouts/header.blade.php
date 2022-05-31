<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex align-items-center position-relative d-header">
        <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 white">
            <img class="logo" src="/front-end/images/logo2stay.png" alt="logo" width="120px">
        </a>
        <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 violet">
            <img class="logo" src="/front-end/images/logo2stay1.png" alt="logo" width="120px">
        </a>
        <nav class="navbar nav-menu navbar-expand-lg navbar-light ml-0">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" aria-current="page" href="#">Khám phá điểm đến</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Khám phá ẩm thực</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#" tabindex="-1">Văn hóa lễ hội</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#" tabindex="-1">2stay</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="search position-relative">
                            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                            <img src="/front-end/images/search.png" alt="search" width="20">
                        </div>
                        {{--                            <button class="btn btn-outline-success" type="submit">Search</button>--}}
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
