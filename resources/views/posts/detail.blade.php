@extends('layouts.app')
@section('title', $post['name'])
@section('image', $post['avatar'])
@section('canonical', route('slug',['category_slug' => $category['slug'], 'slug' => $post['slug']]))
@section('content')
    @include('layouts.header-white')
    <section class="avatar hero-animated align-items-center specialBlock_1">
        <div class="wrapBox">
            <div class="imgBanner">
                <img alt="{{$post['name']}}" loading="lazy" src="{{$post['avatar']}}">
            </div>
        </div>
    </section>
    <section class="post-detail box-post-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="post-inner">
                        <h1 class="name-post">{{$post['name']}}</h1>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="category">
                                    <span> {{$category['name']}}</span>
                                </div>
                                <div class="post-extend">
                                    <span class="post-view">{{$post['view']}} Lượt xem</span>
                                    <span>|</span>
                                    <span class="post-date">{{date('d/m/Y', strtotime($post['created_at']))}}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="float-end">
                                    <div class="networkComment d-flex">
                                        <div class="network">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <img src="/front-end/icons/icon-copy.png" alt="copy">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="/front-end/icons/facebook_blur.png" alt="facebook_blur">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="/front-end/icons/zalo.png" alt="zalo">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="comment">
                                            <ul>
                                                <li>
                                                    <span tooltip="102 Thích" flow="down">
                                                        <img src="/front-end/icons/icon-like.png" alt="like">
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="#listComment">
                                                        <span tooltip="{{$comments->count()}} Bình luận" flow="down">
                                                            <img src="/front-end/icons/icon-comment.png" alt="comment">
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-post">
                                    {!!$post['content'] !!}
                                </div>
                                <div class="border-horizontal"></div>
                                <div class="form-comment" id="listComment">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex txt-comment">
                                                    <img src="/front-end/icons/icon-comment.png" alt="comment">
                                                    <p class="txt-bl">Bình luận ({{$comments->count()}})</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="float-end d-flex list-input">
                                                    <input type="text" class="form-control name_user" placeholder="Họ & tên*">
                                                    <input type="email" class="form-control email_user" placeholder="Email*">
                                                    <input type="text" class="form-control phone_user" placeholder="Số điện thoại*">
                                                </div>

                                            </div>
                                        </div>
                                        <div  class="row mt-2">
                                            <div class="col-lg-12">
                                                <textarea id="w3review" name="w3review" rows="3" cols="10" style="width: 100%;; border-radius: 7px; border: 1px solid #D4145A; padding: 10px"></textarea>
                                                <div class="d-flex mt-2">
                                                    <label class="container-input">Lưu tên, email và số điện thoại cho các lần bình luận sau
                                                        <input type="checkbox" name="checkUserComment">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="btn-comment">
                                                        <button class="btn raise" onclick="comment()">Bình luận</button>
                                                    </div>
                                                </div>
                                                <div class="list-comments">
                                                    @if($comments->count())
                                                    <div class="box-content-comment d-flex">
                                                        <div class="avatar-user-comment">
                                                            <img src="/front-end/icons/icon_avatar.png" alt="">
                                                        </div>
                                                        <div class="comment-detail">
                                                            <h5 class="name-user-comment">Thỏa Nguyễn</h5>
                                                            <p>ĐT Thái Lan có trận giao hữu thứ hai trong tháng 5 và đối thủ là ĐT Bahrain. HLV Polking có một vài sự thay đổi trong đội hình xuất phát để tiếp những vị khách tới từ Tây Á. Ngay ở phút thứ tư, đội chủ nhà đã có bàn mở tỉ số. </p>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                @if($comments->count())
                                                <div class="text-center mt-1">
                                                    <button class="btn btn-more-comment raise">Xem thêm</button>
                                                </div>
                                                @endif
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="border-horizontal" style="height: 1px;background: #662D91;margin: 15px 0 0px;"></div>
                                <div class="list-post-relate owl-carousel owl-theme">
                                    @foreach($relates as $relate)
                                    <div class="item">
                                        @include('components.post_relate_item', ['relate' => $relate, 'category_slug' => $category['slug']])
                                    </div>
                                    @endforeach
                                </div>
                            </div>
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
    function comment(){
        let name = $('.name_user').val();
        let email = $('.email_user').val();
        let phone = $('.phone_user').val();
    }
</script>
@endpush