@extends('layouts.app')
@section('title', '')
@section('content')
    @include('layouts.header-white')
    <section class="avatar hero-animated align-items-center specialBlock_1">
        <div class="wrapBox">
            <div class="imgBanner">
                <picture>
                    <source media="(min-width:768px)" srcset="/front-end/images/slide.jpg">
                    <img alt="khách sạn tình yêu" loading="lazy" src="/front-end/images/slide.jpg">
                </picture>
            </div>
        </div>
    </section>
    <section class="post-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="post-inner">
                        <h1 class="name-post">Cầu hôn – Biểu tượng kiến trúc mới ở Phú Quốc, liệu có soán ngôi Cầu Vàng?</h1>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="category">
                                    <span> Khám phá điểm đến</span>
                                </div>
                                <div class="post-extend">
                                    <span class="post-view">2987 Lượt xem</span>
                                    <span>|</span>
                                    <span class="post-date">17/02/2022</span>
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
                                                    <span tooltip="102" flow="down">
                                                        <img src="/front-end/icons/icon-like.png" alt="like">
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <span tooltip="32" flow="down">
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
                                    <br>Cầu Hôn được thiết kế bởi kiến trúc sư Marco Casamonti, một đại sứ về văn hóa nghệ thuật Ý tại Việt Nam.
                                    <br> Ông đã thực hiện công trình này mất 2 năm. Cầu Hôn đích thực là cây cầu kết nối hai bờ đảo ngọc nên ý nghĩa của biểu tượng cho sự gắn kết giữa con người với con người, giữa con người và thiên nhiên. Cây cầu có tổng chiều dài lên đến 810m, được xây bằng thép với tổng khối lượng bằng 1/2 lượng thép để xây tháp Eiffel.
                                    <br>
                                    <br>Đây chính là cây cầu duy nhất tại Việt Nam không kết nối thẳng hay phía hai đầu, mà cong lại chính giữa sẽ là một khoảng hở rộng 50cm. Chính khoảng hở này được lấp đầy ánh nắng mặt trời lúc ban chiều hoàng hôn tạo nên nụ hôn nồng cháy của đôi uyên ương dưới sự chứng kiến của trời đất. Được biết, ông đã lên ý tưởng từ năm 2018 nhưng mất đến 2 năm để hoàn thiện toàn bộ khâu thiết kế, bản vẽ. Vào tháng 12/2021, công trình Cầu Hôn đã bước vào giai đoạn ép trụ. Hiện tại, những nền móng đầu tiên cho công trình biểu tượng du lịch mới tại phương Nam đảo ngọc đã thành hình.
                                    <br>
                                    <br>Cầu Hôn Phú Quốc là công trình nghệ thuận quy mô và độc đáo, Cầu Hôn – Kiss Brigde tại Nam Phú Quốc hứa hẹn sẽ là biểu tượng mà du khách nhất định phải đến một lần khi đặt chân tới đảo Ngọc. Không chỉ mang lại giá trị về mặt kiến trúc, cảnh quan, cầu Hôn còn là tâm điểm thu hút du khách, giúp đem đến lợi ích đáng quan tâm. Nếu Đà Nẵng đã từng thành công với Cầu Vàng danh tiếng, thì Nam Phú Quốc sẽ tiếp nối để tạo nên quy mô còn hoành tráng hơn thế tại Cầu Hôn.
                                    <br>
                                    <br>Không chỉ dừng lại ở việc kiến tạo một công trình điểm nhấn, chủ đầu tư cũng sẽ tổ chức những lễ hội về tình yêu, tình bạn với quy mô lên tới hàng nghìn người tại đây
                                </div>
                                <div class="border-horizontal"></div>
                                <div class="form-comment">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex txt-comment">
                                                    <img src="/front-end/icons/icon-comment.png" alt="comment">
                                                    <p class="txt-bl">Bình luận (32)</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="float-end d-flex list-input">
                                                    <input type="text" class="form-control" placeholder="Họ và tên *">
                                                    <input type="text" class="form-control" placeholder="Email *">
                                                    <input type="text" class="form-control" placeholder="Số điện thoại *">
                                                </div>

                                            </div>
                                        </div>
                                        <div  class="row mt-2">
                                            <div class="col-lg-12">
                                                <textarea id="w3review" name="w3review" rows="4" cols="10" style="width: 100%;; border-radius: 7px;border: 1px solid #D4145A;"></textarea>
                                                <div class="d-flex mt-2">
                                                    <label class="container-input">Lưu tên, email và số điện thoại cho các lần bình luận sau
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="btn-comment">
                                                        <button class="btn">Đăng bình luận</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div>
                        <span>Truyền cảm hứng </span>
                        <span></span>
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
