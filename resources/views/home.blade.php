@extends('layouts.app')
@section('title', 'Blog - 2stay')
@section('content')
    @include('layouts.header')
    <section id="slide" class="hero-animated d-flex align-items-center specialBlock_1">
        <div class="slide owl-carousel owl-theme">
            @foreach($slides as $slide)
                <div class="item">
                    <a href="{{$slide['url']}}">
                        <div class="wrapBox">
                            <div class="imgBanner">
                                <picture>
                                    <source media="(min-width:768px)" srcset="{{$slide['image']}}">
                                    <img alt="khách sạn tình yêu" loading="lazy" src="{{$slide['image']}}">

                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section id="destination">
        <div class="container">
            <div class="destination owl-carousel owl-theme">
                <div class="item">
                    <a href="">
                        <div class="box-destination bg-violet">
                            <div class="description">
                                <img class="img" alt="khách sạn tình yêu" loading="lazy"
                                     src="/front-end/images/diemden.jpg">
                                <p class="title">Hội An</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="box-destination bg-pink">
                            <div class="description">
                                <img class="img" alt="khách sạn tình yêu" loading="lazy"
                                     src="/front-end/images/diemden1.jpg">
                                <p class="title">Hội An</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="post-categories">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="/front-end/images/slide1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và trái đất">
                                            <h2>Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và
                                                trái đất</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">2987 Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">17/02/2022</span>
                                        </div>
                                        <div class="post-description">
                                            Một phố cổ giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố
                                            xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ, Một phố cổ
                                            giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố xá
                                        </div>
                                        <div class="post-button text-center">
                                            <a href="" class="btn raise">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="box-category">
                                    <div class="d-category c---color-violet">
                                        <h4 class="name-category">Khám phá điểm đến</h4>
                                    </div>
                                    <div class="list-posts">
                                        @for($i=0; $i<4; $i++)
                                            <article class="item-post">
                                                <div class="thumb-art">
                                                    <a title="" href="" class="thumb thumb-16x9" data-id="0">
                                                        <picture>
                                                            <img loading="lazy" intrinsicsize="120x72" alt=""
                                                                 class="lazy lazied"
                                                                 src="https://witchbeauty.net/Images/Uploadimages/T%E1%BA%A3o%20xo%E1%BA%AFn%20Spirulina%20l%C3%A0%20g%C3%AC.png"
                                                                 data-src="" data-ll-status="loaded">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="right-description">
                                                    <h3 class="title-post">
                                                        <a class="txt-title" title="" href="" data-itm-source=""
                                                           data-itm-added="1">
                                                            Cẩm nang du lịch Cát Bà Hải Phòng tự túc
                                                        </a>
                                                    </h3>
                                                    <div class="post-extend">
                                                        <span class="post-view">2987 Lượt xem</span>
                                                        <span>|</span>
                                                        <span class="post-date">17/02/2022</span>
                                                    </div>
                                                    <a class="more yellow" href="">Xem thêm</a>
                                                </div>
                                            </article>
                                        @endfor
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="post-categories">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="/front-end/images/slide1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và trái đất">
                                            <h2>Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và
                                                trái đất</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">2987 Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">17/02/2022</span>
                                        </div>
                                        <div class="post-description">
                                            Một phố cổ giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố
                                            xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ, Một phố cổ
                                            giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố xá
                                        </div>
                                        <div class="post-button text-center">
                                            <a href="" class="btn raise">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="box-category">
                                    <div class="d-category c---color-yellow">
                                        <h4 class="name-category">Khám phá điểm đến</h4>
                                    </div>
                                    <div class="list-posts">
                                        @for($i=0; $i<4; $i++)
                                            <article class="item-post">
                                                <div class="thumb-art">
                                                    <a title="" href="" class="thumb thumb-16x9" data-id="0">
                                                        <picture>
                                                            <img loading="lazy" intrinsicsize="120x72" alt=""
                                                                 class="lazy lazied"
                                                                 src="https://witchbeauty.net/Images/Uploadimages/T%E1%BA%A3o%20xo%E1%BA%AFn%20Spirulina%20l%C3%A0%20g%C3%AC.png"
                                                                 data-src="" data-ll-status="loaded">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="right-description">
                                                    <h3 class="title-post">
                                                        <a class="txt-title" title="" href="" data-itm-source=""
                                                           data-itm-added="1">
                                                            Cẩm nang du lịch Cát Bà Hải Phòng tự túc
                                                        </a>
                                                    </h3>
                                                    <div class="post-extend">
                                                        <span class="post-view">2987 Lượt xem</span>
                                                        <span>|</span>
                                                        <span class="post-date">17/02/2022</span>
                                                    </div>
                                                    <a class="more pink raise" href="">Xem thêm</a>
                                                </div>
                                            </article>
                                        @endfor
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="post-categories">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="/front-end/images/slide1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và trái đất">
                                            <h2>Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và
                                                trái đất</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">2987 Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">17/02/2022</span>
                                        </div>
                                        <div class="post-description">
                                            Một phố cổ giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố
                                            xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ, Một phố cổ
                                            giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố xá
                                        </div>
                                        <div class="post-button text-center">
                                            <a href="" class="btn raise">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="box-category">
                                    <div class="d-category c---color-violet">
                                        <h4 class="name-category">Khám phá điểm đến</h4>
                                    </div>
                                    <div class="list-posts">
                                        @for($i=0; $i<4; $i++)
                                            <article class="item-post">
                                                <div class="thumb-art">
                                                    <a title="" href="" class="thumb thumb-16x9" data-id="0">
                                                        <picture>
                                                            <img loading="lazy" intrinsicsize="120x72" alt=""
                                                                 class="lazy lazied"
                                                                 src="https://witchbeauty.net/Images/Uploadimages/T%E1%BA%A3o%20xo%E1%BA%AFn%20Spirulina%20l%C3%A0%20g%C3%AC.png"
                                                                 data-src="" data-ll-status="loaded">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="right-description">
                                                    <h3 class="title-post">
                                                        <a class="txt-title" title="" href="" data-itm-source=""
                                                           data-itm-added="1">
                                                            Cẩm nang du lịch Cát Bà Hải Phòng tự túc
                                                        </a>
                                                    </h3>
                                                    <div class="post-extend">
                                                        <span class="post-view">2987 Lượt xem</span>
                                                        <span>|</span>
                                                        <span class="post-date">17/02/2022</span>
                                                    </div>
                                                    <a class="more pink" href="">Xem thêm</a>
                                                </div>
                                            </article>
                                        @endfor
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="most-read">
                        <div class="text-center txt-most-read">
                            <span>Đọc nhiều nhất</span>
                        </div>
                        <div class="list-post-read">
                            @for($i=0; $i<3; $i++)
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="/front-end/images/slide1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và trái đất">
                                            <h2>Phố cổ Hội An - Thành phố cổ đẹp hàng đầu Châu á Lớn nhất thế giới và
                                                trái đất</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">2987 Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">17/02/2022</span>
                                        </div>
                                        <div class="post-description">
                                            Một phố cổ giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố
                                            xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ, Một phố cổ
                                            giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố xá
                                        </div>
                                        <div class="post-button text-center ">
                                            <a class="btn raise">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="box-banner">
                            <img src="/front-end/images/banner1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            /**
             * Sticky header on scroll
             */
            const selectHeader = document.querySelector('#header');
            if (selectHeader) {
                document.addEventListener('scroll', () => {
                    window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
                });
            }
        });
    </script>
@endpush
