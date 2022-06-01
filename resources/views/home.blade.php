@extends('layouts.app')
@section('title', 'MinHotel')
@section('content')
    <main id='homeMinHotel'>
        <div class='specialBlock_1'>
            <h1 style='display: none'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Min Hotel</h1>
            <div class='owl-carousel owl-theme slide'>
                @foreach($slides as $slide)
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='{{$slide['ima    ge']}}'>
                            <img alt='khách sạn tình yêu' src='{{$slide['image']}}'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>{{$slide['title']}}</p>
                        <p class='text_2'>{!! $slide['description'] !!}</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <article class='container px-0 py-3 mt-md-3 mb-2'>
            <section class='row mx-0 flex-md-row-reverse justify-content-center secti-img-text'
                     style='flex-direction: column-reverse;'>
                <aside class='col-md-7 mb-2'>
                    <img alt='khách sạn tình yêu' class='col-12 px-0 pr-md-5' src='uploads/img/mixhotel-gt-.webp'>
                </aside>
                <aside class='col-md-5 d-flex align-items-center py-3'>
                    <div class='pt-md-3 px-md-5 background-white-smoke-md pb-md-3'>
                        <p class='mb-0 size-2vw'>
                            <b style='font-size: 25px; color: #000'>ĐỪNG ĐỂ TÌNH YÊU CỦA BẠN</b>
                        </p>
                        <p class='underline-theme-1 size-2vw mb-md-4 mb-4'>
                            <b>
                                <i style='font-size: 22px;'>CHỈ CÓ MỘT MÀU!</i>
                            </b>
                        </p>
                        <p class='mb-1 size-1vw text-justify mb-md-4' style='font-size: 20px;'>
                            Ở Min Hotel, chúng tôi giúp bạn vẽ bức tranh tình
                            yêu của chính mình bằng những sắc màu
                            tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"
                        </p>
{{--                        <a href='#' style='font-size: 20px;'>Xem thêm &gt;&gt;</a>--}}
                    </div>
                </aside>
            </section>
        </article>
        <article class='container py-3 text-center'>
            <div class='specialBlock_8'>
                <div class='titleBlock_1'>
                    <h2 class='titleText'>TRẢI NGHIỆM TẠI MIN HOTEL</h2>
                </div>
                <p class='text-justify text-md-center'>
                    Đồng hành giữ gìn NGỌN LỬA TÌNH YÊU của các cặp đôi. Một chốn riêng tư, một nơi nghỉ ngơi, một điểm đến
                    mới toanh với đa dạng phong cách tại Hà Nội
                </p>
                <div class='row mt-3'>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' src='uploads/img/24-icon.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>Wifi nhanh</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-7.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>an toàn</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-5.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>đồ chơi</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-8.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>dịch vụ</b>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        @foreach($categories as $cate)
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <h2 class='titleText'>{{$cate['name']}} </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    @foreach($cate['rooms'] as $room)
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href=''>
                                <img alt='{{$room['name']}}' loading='lazy'
                                     src='{{$room['avatar']}}'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1' style="display: inline-block">
                                    <div>
                                        <a class='aTagTitle' href='khach-san-tinh-yeu/room-601/index.html'>
                                            <h4 class='titleNews'>{{$room['name']}} </h4>
                                        </a>
                                    </div>

                                    <div class='text'>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>{{$room['price_h']}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        <div class='galleryBlock'>
            <p class='titleBlock'>THƯ VIỆN HÌNH ẢNH</p>
            <div class='owl-carousel owl-theme owlGallery'>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-1.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-1.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-2.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-2.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-3.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-3.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-4.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-4.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-5.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-5.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-6.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-6.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-7.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-7.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-8.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-8.webp'>
                </div>
            </div>
            <div class='textPart'>
                <p class='text1 marBot_5'>KHÔNG GIAN PHÒNG NGHỈ</p>
                <p class='text2 marBot_0'>Riêng tư - Lãng mạn - Khác Biệt</p>
                <p class='text2 marBot_0'>Không gian dành cho một nửa yêu thương</p>
            </div>
        </div>
        <article class='container py-5 highlightPostBlock'>
            <div class='text_cent'>
                <div class='titleBlock_1'>
                    <p class='titleText'>TIN TỨC</p>
                </div>
            </div>
            <div class='owl-carousel owl-theme specialBlock_3'>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-go-vap/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/6285cbc5d6a5eb29c0e03a9d/khach-san-tinh-yeu-go-vap__4_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-go-vap/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-go-vap/index.html'>
                                <p class='titleNews'>#5+ Địa Chỉ Khách Sạn Tình Yêu Gò Vấp Sang - Xịn - Giá Tốt</p>
                            </a>
                            <p class='description'>Trong bài viết hôm nay chúng ta sẽ cùng nhau tham khảo qua những địa chỉ
                                khách sạn tình yêu Gò Vấp được nhiều đôi tình nhân review nhất nhé.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-quan-1/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/6285c7b0d6a5eb29c0e03a8d/khach-san-tinh-yeu-quan-1__1_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-quan-1/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-quan-1/index.html'>
                                <p class='titleNews'>#Top 5+ Khách Sạn Tình Yêu Quận 1 “Sang Chảnh” Đẹp Nhất</p>
                            </a>
                            <p class='description'>Nếu bạn muốn tìm địa chỉ các khách sạn tình yêu Quận 1 nhưng không phải
                                là “thổ địa” ở đây hoặc bạn lần đầu tiên tìm các khách sạn tình nhân bạn nên đọc ngay bài
                                viết sau đây.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-binh-thanh/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/628538ffd6a5eb6478aad531/khach-san-tinh-yeu-binh-thanh__6_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-binh-thanh/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-binh-thanh/index.html'>
                                <p class='titleNews'>#5+ Địa Chỉ Khách Sạn Tình Yêu Bình Thạnh Siêu Hot Cực Chill</p>
                            </a>
                            <p class='description'>Chúng ta sẽ cùng nhau khám phá những địa chỉ khách sạn tình yêu Bình
                                Thạnh có view đẹp và có đầy đủ các dịch vụ dành cho những cặp đôi đến hẹn hò. Sẽ thật đáng
                                tiếc nếu bạn không biết đến những địa chỉ này đấy. Cùng đón đọc ngay bài viết bên dưới
                                nhé! </p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-hue/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/628532c4d6a5eb0b21a45f32/khach-san-tinh-yeu-hue__1_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-hue/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-hue/index.html'>
                                <p class='titleNews'>#Top 5+ Địa Chỉ Khách Sạn Tình Yêu Huế Lãng Mạn Nhất</p>
                            </a>
                            <p class='description'>Có rất nhiều địa chỉ khách sạn tình yêu Huế không gian cực chill, lãng
                                mạn lại đầy đủ tiện nghi nhưng có thể bạn chưa biết đến. Cùng Mix Boutique Hotel khám phá
                                ngay qua bài viết sau nhé! </p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-quan-6/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/62852f3dd6a5eb0b21a45f21/khach-san-tinh-yeu-quan-6__3_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-quan-6/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-quan-6/index.html'>
                                <p class='titleNews'>#Gợi Ý 5+ Địa Chỉ Khách Sạn Tình Yêu Quận 6 Có Không Gian Đẹp</p>
                            </a>
                            <p class='description'>Hiện nay, các địa chỉ khách sạn tình yêu Quận 6 mọc lên ngày càng nhiều,
                                đáp ứng nhu cầu của đông đảo các bạn trẻ, những cặp đôi yêu nhau cần tìm nơi hẹn hò, riêng
                                tư kín đáo. </p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-binh-duong/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/628527acd6a5eb0b21a45f0f/khach-san-tinh-yeu-binh-duong__2_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 05, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-binh-duong/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-binh-duong/index.html'>
                                <p class='titleNews'>#Top 5+ Khách Sạn Tình Yêu Bình Dương View Đẹp, Giá Rẻ</p>
                            </a>
                            <p class='description'>Bài viết hôm nay sẽ giới thiệu đến bạn top 5+ các khách sạn tình yêu Bình
                                Dương lãng mạn, hứa hẹn mang đến những khoảnh khắc ngọt ngào nhất cho các cặp đôi yêu
                                nhau</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-o-phu-yen/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/626a585ed6a5eb1d06698261/khach-san-tinh-yeu-o-phu-yen__3_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 28 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-o-phu-yen/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-o-phu-yen/index.html'>
                                <p class='titleNews'>#Top 5+ Khách Sạn Tình Yêu Ở Phú Yên Đẹp Nhất Cho Cặp Đôi</p>
                            </a>
                            <p class='description'>Cùng tìm hiểu Top 5 khách sạn tình yêu ở Phú Yên được ưa chuộng nhất hiện
                                nay. Hy vọng, sau bài viết này bạn sẽ có thêm sự lựa chọn cho chuyến đi của mình.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-rach-gia/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/626a4531d6a5eb1d06698254/khach-san-tinh-yeu-rach-gia__1_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 28 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-rach-gia/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-rach-gia/index.html'>
                                <p class='titleNews'>Top 5+ Khách Sạn Tình Yêu Rạch Giá, Kiên Giang Lãng Mạn</p>
                            </a>
                            <p class='description'>Nếu có một lần đến với Rạch Giá  - Kiên Giang với người bạn đời của mình
                                thì bạn chắc chắn sẽ không thể bỏ qua các khách sạn tình yêu Rạch Giá - Kiên Giang đầy lãng
                                mạn tại đây</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-da-lat/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/625e4688d6a5eb1d06698228/khach-san-tinh-yeu-da-lat__5_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-da-lat/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-da-lat/index.html'>
                                <p class='titleNews'>#Top 7+ Khách Sạn Tình Yêu Đà Lạt Lãng Mạn Nhất Hiện Nay</p>
                            </a>
                            <p class='description'>Để lựa chọn được 1 nơi nghỉ chân phù hợp mọi tiêu chí đặt ra khi đến với
                                thành phố mộng mơ Đà Lạt, hãy cùng điểm qua Top 7+ khách sạn tình yêu ở Đà Lạt đáng đến nhất
                                sau đây.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-da-nang/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/625e35dbd6a5eb1d06698215/khach-san-tinh-yeu-da-nang__3_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 19 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-da-nang/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-da-nang/index.html'>
                                <p class='titleNews'>#Top 5+ Khách Sạn Tình Yêu Đà Nẵng Hot Nhất Cho Cặp Đôi</p>
                            </a>
                            <p class='description'>Cùng điểm qua Top 5 khách sạn tình yêu Đà Nẵng Hot nhất hiện tại. Đây
                                không chỉ là những khách sạn có lối kiến trúc độc đáo - phù hợp với các buổi hẹn hò lãng
                                mạn.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='khach-san-tinh-yeu-nha-trang/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/6257e653d6a5eb1d066981fc/khach-san-tinh-yeu-nha-trang__3_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 14 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='khach-san-tinh-yeu-nha-trang/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-nha-trang/index.html'>
                                <p class='titleNews'>#Top 5+ Khách Sạn Tình Yêu Nha Trang Lãng Mạn Hiện Nay</p>
                            </a>
                            <p class='description'>Cùng đến với top 5 khách sạn tình yêu Nha Trang hot nhất giới trẻ hiện
                                nay - để những chuyến du lịch của các đôi bạn trẻ trở thành kỷ niệm khó quên ngay từ giây
                                phút đầu tiên.</p>
                        </div>
                    </div>
                </div>
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href='chup-anh-tren-giuong/index.html'>
                            <img alt='khách sạn tình yêu' loading='lazy'
                                 src='uploads/images/62552cc9d6a5eb1d06698197/chup-anh-tren-giuong__12_.webp'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> 12 Tháng 04, 2022</i>
                                </a>
                                <a class='text' href='chup-anh-tren-giuong/index.html'>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>Tin trong ngành</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='chup-anh-tren-giuong/index.html'>
                                <p class='titleNews'>#21+ Cách Tạo Dáng Chụp Ảnh Trên Giường Ảo Diệu Nhất</p>
                            </a>
                            <p class='description'>Những shoot hình chụp ảnh trên giường luôn có một nét quyến rũ, cuốn hút
                                và sexy khiến người xem không khỏi trầm trồ. Tham khảo ngay Cách Tạo Dáng Chụp Ảnh Trên
                                Giường qua bài viết bên dưới nhé!</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <div class='specialBlock_2'>
            <div class='wrapAllMaps'>
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe allowfullscreen='' height='450' loading='lazy'
                                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5673282092234!2d105.80311241493226!3d21.009974086008462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x311804daed8a1515!2sMix%20Boutique%20Hotel%20186%20Ho%C3%A0ng%20Ng%C3%A2n!5e0!3m2!1svi!2s!4v1640439665338!5m2!1svi!2s'
                                style='border:0;' width='600'></iframe>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div class='container-fluid' id='footerNKTA'>
        <div class='footerBlock_1'>
            <div class='bgCoverOver'></div>
            <div class='container containerFix'>
                <div class='row'>
                    <div class='smallBlock_1'>
                        <p class='titleCol'>THÔNG TIN KHÁCH SẠN</p>
                        <div class='textPart'>
                            <p class='text text_1 company'>MIN HOTEL</p>
                            <p class='text text_1 location'>37N7B KĐT Trung Hòa, Trung Hòa, Cầu Giấy, Hà Nội</p>
                            <a class='text text_1 phone' href='tel:0988506857'>0988506857</a>
                            <a class='text text_1 mail'
                               href="cdn-cgi/l/email-protection.html#2f7c7a7f7f607d7b6f62667767607b6a63017961"><span
                                    class="__cf_email__" data-cfemail="60333530302f3234202d2938282f34252c4e362e">info@minhotel.vn</span></a>
                            <a class='text text_1 chrome' href='index.html'>https://minhotel.vn/</a>
                            </a>
                            <script data-cfasync="false"
                                    src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script src='../images.dmca.com/Badges/DMCABadgeHelper.min.js'>:
                                cdata</script>
                        </div>
                    </div>
                    <div class='smallBlock_2'>
                        <p class='titleCol'>THÔNG TIN HỖ TRỢ</p>
                        <a class='text text_2' href='gioi-thieu/index.html'>GIỚI THIỆU</a>
                        <a class='text text_2' href='gallery/index.html'>PHÒNG</a>
                        <a class='text text_2' href='lien-he/index.html'>LIÊN HỆ</a>
                        <div class='socialArea'>
                            <p class='titleSocial'>FOLLOW ME</p>
                            <div class='socialBlock_1'>
                                <a class='wrapSocialPart' href='https://www.facebook.com/mixhotel.vn' rel='nofollow'
                                   target='_blank' title='page'>
                                    <div class='imgSocialPart'>
                                        <img alt='facebook' src='uploads/img/faceItem_1.svg'>
                                    </div>
                                </a>
                                <a class='wrapSocialPart' href='https://www.youtube.com/channel/UCmhjwCn9dUyISNMDHmt00Cw'
                                   rel='nofollow' target='_blank' title='page'>
                                    <div class='imgSocialPart'>
                                        <img alt='youtube' src='uploads/img/youtube_1.svg'>
                                    </div>
                                </a>
                                <a class='wrapSocialPart' href='https://www.instagram.com/mixhotel.vn/' rel='nofollow'
                                   target='_blank' title='page'>
                                    <div class='imgSocialPart'>
                                        <img alt='instagram' src='uploads/img/instagram_item_1.svg'>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock_2 smallBlock_2-2'>
                        <p class='titleCol'>CHÍNH SÁCH</p>
                        <a class='text text_2' href='chinh-sach-thanh-toan/index.html'>CHÍNH SÁCH THANH TOÁN</a>
                        <a class='text text_2' href='chinh-sach-bao-mat-thong-tin/index.html'>CHÍNH SÁCH BẢO MẬT THÔNG
                            TIN</a>
                        <a class='text text_2' href='chinh-sach-dat-tra-phong/index.html'>CHÍNH SÁCH ĐẶT TRẢ PHÒNG</a>
                    </div>
                    <div class='smallBlock_3'>
                        <p class='titleCol'>KẾT NỐI MIN HOTEL</p>
                        <div class='fanpagePart'>
                            <a href='https://www.facebook.com/minhotel.vn' rel='nofollow' target='_blank'>
                                <img src='uploads/img/fanpage.webp'>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='footerLineEnd'>
            <div class='container'>
                <div class='pTagEnd'>
                    Copyright © 2022 minhotel.vn. All Rights Reserved. Design web and SEO by Doan Gia Ltd.
                </div>
            </div>
        </div>
    </div>
@endsection
