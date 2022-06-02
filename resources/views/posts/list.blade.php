@extends('layouts.app')
@section('title', 'Blog - 2stay')
@section('content')
    @include('layouts.header-white')
    <section id="main" class="page-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-select">
                        <span class="name-cate">Đà Nẵng</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-9 col-md-8">
                    <div class="list-post-categories">
                        @for($i=0; $i<=5; $i++)
                        <div class="post-category">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="/front-end/images/slide.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-category-info">
                                        <h4>Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu Á</h4>
                                        <div class="post-extend">
                                            <span class="post-view">2987 Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">17/02/2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 post-detail-right">
                    <div class="d-flex">
                        <div class="txt-truyen-cam-hung">Truyền cảm hứng </div>
                        <div class="border-horiz"></div>
                    </div>
                    <div class="list-categories">
                        <div class="category-inner position-relative">
                            <div class="position-absolute box-name-category">
                                <h4 class="text-center">Khám phá điểm đến</h4>
                            </div>
                            <img src="/front-end/images/slide.jpg" alt="">
                        </div>
                        <div class="category-inner position-relative">
                            <div class="position-absolute box-name-category">
                                <h4 class="text-center">Khám phá ẩm thực</h4>
                            </div>
                            <img src="/front-end/images/nhahang.jpg" alt="">
                        </div>
                        <div class="category-inner position-relative">
                            <div class="position-absolute box-name-category">
                                <h4 class="text-center">Người trong muôn nghề</h4>
                            </div>
                            <img src="/front-end/images/nguoitrongnghe.jpg" alt="">
                        </div>
                        <div class="category-inner position-relative">
                            <div class="position-absolute box-name-category">
                                <h4 class="text-center">Khám phá ẩm thực</h4>
                            </div>
                            <img src="/front-end/images/nhahang.jpg" alt="">
                        </div>
                        <div class="category-inner position-relative">
                            <div class="position-absolute box-name-category">
                                <h4 class="text-center">Người trong muôn nghề</h4>
                            </div>
                            <img src="/front-end/images/nguoitrongnghe.jpg" alt="">
                        </div>
                    </div>
                    <div class="box-banner">
                        <img src="/front-end/images/banner1.png" alt="">
                        <img src="/front-end/images/banner1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

