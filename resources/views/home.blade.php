@extends('layouts.app')
@section('title', 'Blog - 2stay')
@section('content')
    @include('layouts.header')
    <section id="slide" class="hero-animated d-flex align-items-center specialBlock_1">
        <div class="slide owl-carousel owl-theme">
            @foreach($slides as $slide)
                <div class="item">
                    <a href="{{$slide['url'] ? $slide['url'] : 'javascript:'}}">
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
                @foreach($destinations as $k_des => $destination)
                @if($k_des%2 == 0)
                <div class="item">
                    <a href="{{route('destination', $destination['slug'])}}">
                        <div class="box-destination bg-violet">
                            <div class="description">
                                <img class="img" alt="khách sạn tình yêu" loading="lazy"
                                     src="{{$destination['avatar']}}">
                                <p class="title">{{$destination['name']}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @else
                    <div class="item">
                        <a href="{{route('destination', $destination['slug'])}}">
                            <div class="box-destination bg-pink">
                                <div class="description">
                                    <img class="img" alt="khách sạn tình yêu" loading="lazy"
                                         src="{{$destination['avatar']}}">
                                    <p class="title">{{$destination['name']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @endforeach

            </div>
        </div>
    </section>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    @foreach($categories as $key_cate => $category)
                    <div class="post-categories">
                        <div class="row">
                            <div class="col-lg-5">
                                @foreach($category['posts'] as $k_pro => $post)
                                @if($k_pro == 0)
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="{{$post['avatar']}}" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="{{$post['name']}}">
                                            <h2>{{$post['name']}}</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">{{$post['view']}} Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">{{date('d/m/Y', strtotime($post['created_at']))}}</span>
                                        </div>
                                        <div class="post-description">
                                            {!! $post['description'] !!}
                                        </div>
                                        <div class="post-button text-center">
                                            <a href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}" class="btn {{$key_cate%2 == 0 ? 'raise' : 'raise-yellow'}}">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-lg-7">
                                <div class="box-category">
                                    <a href="{{route('slug', ['category_slug' => $category['slug']])}}">
                                        <div class="d-category {{$key_cate%2 == 0 ? 'c---color-violet' : 'c---color-yellow'}}">
                                            <h4 class="name-category">{{$category['name']}}</h4>
                                        </div>
                                    </a>

                                    <div class="list-posts">
                                        @foreach($category['posts'] as $k_pro => $post)
                                            @if($k_pro > 0)
                                            <article class="item-post">
                                                <div class="thumb-art">
                                                    <a href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}" class="thumb thumb-16x9" data-id="0">
                                                        <picture>
                                                            <img loading="lazy" intrinsicsize="120x72" alt="{{$post['name']}}"
                                                                 class="lazy lazied"
                                                                 src="{{$post['avatar']}}"
                                                                 data-src="" data-ll-status="loaded">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="right-description">
                                                    <h3 class="title-post">
                                                        <a class="txt-title" title="{{$post['name']}}" href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}" data-itm-source=""
                                                           data-itm-added="1">
                                                            {{$post['name']}}
                                                        </a>
                                                    </h3>
                                                    <div class="post-extend">
                                                        <span class="post-view">{{$post['view']}} Lượt xem</span>
                                                        <span>|</span>
                                                        <span class="post-date">{{date('d/m/Y', strtotime($post['created_at']))}}</span>
                                                    </div>
                                                    <a class="more {{$key_cate%2 == 0 ? 'pink' : 'yellow'}}" href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}">Xem thêm</a>
                                                </div>
                                            </article>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="most-read">
                        <div class="text-center txt-most-read">
                            <span>Đọc nhiều nhất</span>
                        </div>
                        <div class="list-post-read">
                            @foreach($postReadALots as $postRead)
                                <div class="box-post">
                                    <div class="post-avatar">
                                        <img src="{{$postRead['avatar']}}" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title"
                                             title="{{$postRead['name']}}">
                                            <h2>{{$postRead['name']}}</h2>
                                        </div>
                                        <div class="post-extend">
                                            <span class="post-view">{{$postRead['view']}} Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">{{date('d/m/Y', strtotime($postRead['created_at']))}}</span>
                                        </div>
                                        <div class="post-description">
                                            {{$postRead['description']}}

                                        </div>
                                        <div class="post-button text-center ">
                                            <a href="{{route('slug',['category_slug' => $postRead->categories[0]['slug'], 'slug' => $postRead['slug']])}}" class="btn raise">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="box-banner">
                            @foreach($banner->bannerDetails()->where('status', true)->get() as $ban)
                                <a href="{{$ban['url'] ? $ban['url'] : 'javascript:'}}" target="_blank">
                                    <img src="{{$ban['image']}}" alt="{{$ban['name']}}">
                                </a>
                            @endforeach
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
