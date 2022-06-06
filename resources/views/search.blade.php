@extends('layouts.app')
@section('title', 'Tìm kiếm')
@section('content')
    @include('layouts.header-white')
    <section id="main" class="page-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-search">
                        <span class="t-kq-search">Kết quả tìm kiếm cho:</span>
                        <span class="key-search">{{$key}}</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-9 col-md-8">
                    <div class="list-post-categories">
                    @foreach($posts as $post)
                        <div class="post-category item-post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{$post['avatar']}}" alt="{{$post['name']}}">
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-category-info position-relative">
                                        <h4 class="name-post">
                                            <a class="">
                                                {{$post['name']}}
                                            </a>
                                        </h4>
                                        <div class="post-extend">
                                            <span class="post-view">{{$post['view']}} Lượt xem</span>
                                            <span>|</span>
                                            <span class="post-date">{{date('d/m/Y', strtotime($post['created_at']))}}</span>
                                        </div>
                                        <div class="post-description">
                                            {{$post['description']}}
                                        </div>
                                        <div class="a-xem-them">
                                            <a class="more yellow"  >Xem thêm</a>
                                        </div>
                                        <div class="belong-categories position-absolute">
                                            @foreach(($post->categories()->where('status', true)->get()) as $key => $cate)
                                            <a class="a-category" href="{{route('slug', ['category_slug' => $cate['slug']])}}">
                                                <span class="{{$key%2==0 ? 'violet' : 'yellow'}}">
                                                    {{$cate['name']}}
                                                </span>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <input type="hidden" class="page" value="2">
                    <div class="text-center mt-4 btn-loading">
                        <button class="btn btn-xem-them raise" onclick="getPost()">Xem thêm</button>
                    </div>
                    <div class="text-center loading-box">
                        <div class="loader text-center">
                            <p class="text-center load-3" style="display: inline-block">
                                <i class="line-load"></i>
                                <i class="line-load"></i>
                                <i class="line-load"></i>
                            </p>
                        </div>
                    </div>
                </div>
                @include('components.inspire',['categories' => $categories, 'banner' => $banner])
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        {{--function getPost(){--}}
        {{--    $('.btn-loading').css('display', 'none');--}}
        {{--    $('.loading-box').css('display', 'block');--}}
        {{--    let page = $('.page').val();--}}
        {{--    $.ajax({--}}
        {{--        url: '{{route('slug',['category_slug' => $category['slug']])}}?page='+page,--}}
        {{--        success: function (res) {--}}
        {{--            if (res.success) {--}}
        {{--                let listPosts = res.data.data;--}}
        {{--                if(listPosts.length > 0){--}}
        {{--                    let html = '';--}}
        {{--                    listPosts.forEach((val, index) => {--}}
        {{--                        let list_cate = '';--}}
        {{--                        const cate_id = {{$category['id']}};--}}
        {{--                        if(val.categories.length >0){--}}
        {{--                            val.categories.forEach((v_c, index_c) => {--}}
        {{--                                let color = index_c%2 === 0 ? 'violet' : 'yellow';--}}
        {{--                                let route = 'javascript:';--}}
        {{--                                if(v_c['id'] !== cate_id)--}}
        {{--                                  route = '{{url('/')}}'+'/'+v_c['slug'];--}}

        {{--                                let txt_c = `<a class="a-category" href="${route}">--}}
        {{--                                    <span class="${color}">--}}
        {{--                                        ${v_c['name']}--}}
        {{--                                    </span>--}}
        {{--                                </a>`;--}}
        {{--                                list_cate+=txt_c;--}}
        {{--                            });--}}
        {{--                        }--}}
        {{--                        let txt = `<div class="post-category item-post">--}}
        {{--                            <div class="row">--}}
        {{--                                <div class="col-lg-6">--}}
        {{--                                    <img src="${val['avatar']}" alt="${val['name']}">--}}
        {{--                                </div>--}}
        {{--                                <div class="col-lg-6">--}}
        {{--                                    <div class="post-category-info position-relative">--}}
        {{--                                        <h4 class="name-post">--}}
        {{--                                            <a class="" href="http://127.0.0.1:8000/kham-pha-am-thuc/ha-noi-chot-chi-hon-23-nghin-ti-dong-lam-duong-vanh-dai-4-16">--}}
        {{--                                                ${val['name']}--}}
        {{--                                            </a>--}}
        {{--                                        </h4>--}}
        {{--                                        <div class="post-extend">--}}
        {{--                                            <span class="post-view">${val['view']} Lượt xem</span>--}}
        {{--                                            <span>|</span>--}}
        {{--                                            <span class="post-date">${val['create']}</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="post-description">--}}
        {{--                                            ${val['description']}--}}
        {{--                                        </div>--}}
        {{--                                        <div class="a-xem-them">--}}
        {{--                                            <a class="more yellow" href="${val['url']}">Xem thêm</a>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="belong-categories position-absolute">--}}
        {{--                                            ${list_cate}--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>`;--}}
        {{--                        html+=txt;--}}
        {{--                    });--}}
        {{--                    $('.list-post-categories').append(html);--}}
        {{--                    $('.btn-loading').css('display', 'block');--}}
        {{--                }else{--}}
        {{--                    $('.btn-loading').css('display', 'none');--}}
        {{--                }--}}
        {{--                $('.loading-box').css('display', 'none');--}}
        {{--            }--}}
        {{--        }--}}
        {{--    });--}}
        {{--    $('.page').val(Number(page) +1);--}}
        {{--}--}}
    </script>
@endpush