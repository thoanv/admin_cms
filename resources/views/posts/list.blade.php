@extends('layouts.app')
@section('title', $category['name'])
@section('canonical', route('slug',['category_slug' => $category['slug']]))
@section('content')
    @include('layouts.header-white')
    <section id="main" class="page-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-select">
                        <span class="name-cate">{{$category['name']}}</span>
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
                                            <a class="" href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}">
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
                                            <a class="more yellow" href="{{route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']])}}" >Xem thêm</a>
                                        </div>
                                        <div class="belong-categories position-absolute">
                                            @foreach(($post->categories()->where('status', true)->get()) as $key => $cate)
                                            <a class="a-category" href="{{ $cate['id'] == $category['id'] ? 'javascript:' : route('slug', ['category_slug' => $cate['slug']])}}">
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
                        <div class="text-center mt-4">
                            <button class="btn btn-xem-them raise">Xem thêm</button>
                        </div>
                        <div class="text-center loading-box"><div class="loader text-center"><p class="text-center load-3" style="display: inline-block"><i class="line-load"></i><i class="line-load"></i><i class="line-load"></i></p></div></div>

                    </div>
                </div>
                @include('components.inspire',['categories' => $categories, 'banner' => $banner])
            </div>
        </div>
    </section>

@endsection

<style>

</style>