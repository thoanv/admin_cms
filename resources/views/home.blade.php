@extends('layouts.app')
@section('title', 'Blog - 2stay')
@section('content')
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container d-flex align-items-center position-relative d-header">
            <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 white">
                <img src="/front-end/images/logo2stay.png" alt="logo" width="120px">
            </a>
            <a href="{{route('home')}}" class="logo align-items-center scrollto me-auto me-lg-0 violet">
                <img src="/front-end/images/logo2stay1.png" alt="logo" width="120px">
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
    <section id="slide" class="hero-animated d-flex align-items-center specialBlock_1">
        <div class="slide owl-carousel owl-theme">
            <div class="item">
                <div class="wrapBox">
                    <div class="imgBanner">
                        <picture>
                            <source media="(min-width:768px)" srcset="/front-end/images/slide.jpg">
                            <img alt="khách sạn tình yêu" loading="lazy" src="/front-end/images/slide.jpg">

                        </picture>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapBox">
                    <div class="imgBanner">
                        <picture>
                            <source media="(min-width:768px)" srcset="/front-end/images/slide1.jpg">
                            <img alt="khách sạn tình yêu" loading="lazy" src="/front-end/images/slide1.jpg">

                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="destination">
        <div class="container">
            <div class="destination owl-carousel owl-theme">
                <div class="item">
                    <a href="">
                        <div class="box-destination bg-violet">
                            <div class="description">
                                <picture>
                                    <img class="img" alt="khách sạn tình yêu" loading="lazy" src="/front-end/images/diemden.jpg">
                                </picture>
                                <p class="title">Hội An</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="box-destination bg-pink">
                            <div class="description">
                                <picture>
                                    <img class="img" alt="khách sạn tình yêu" loading="lazy" src="/front-end/images/diemden1.jpg">
                                </picture>
                                <p class="title">Hội An</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
