@extends('layouts.app')
@section('title', 'MinHotel')
@section('content')
    <div id='menuNKTA'>
        <div id='menuNKTA_DESKTOP'>
            <div class='wrapMenuline_1_line_2'>
                <div class='menuLine_2'>
                    <div class='container'>
                        <div class='row'>
                            <div class='logoPart'>
                                <a class='imgPart' href='index.html'>
                                    <img alt='' src='uploads/images/5fbe27e1a79a0d5e7942c393/mix-boutique-logo.webp'>
                                </a>
                            </div>
                            <div class='menuPart'>
                                <div class='menuItem'>
                                    <a class='link1' href='gioi-thieu/index.html'>
                                        <p class='text'>GIỚI THIỆU</p>
                                    </a>
                                </div>
                                <div class='menuItem'>
                                    <a class='link1' href='khach-san-tinh-yeu/index.html'>
                                        <p class='text'>MinHoltel</p>
                                    </a>
                                </div>
                                <div class='menuItem'>
                                    <a class='link1' href='gallery/index.html'>
                                        <p class='text'>GALLERY</p>
                                    </a>
                                </div>
                                <div class='menuItem'>
                                    <a class='link1' href='tin-tuc/index.html'>
                                        <p class='text'>TIN TỨC</p>
                                    </a>
                                </div>
                                <div class='menuItem'>
                                    <a class='link1' href='su-kien/index.html'>
                                        <p class='text'>SỰ KIỆN</p>
                                    </a>
                                </div>
                                <div class='menuItem dropDown'>
                                    <a class='link1' href='#'>
                                        <p class='text'>CHÍNH SÁCH</p>
                                    </a>
                                    <ul class='blockLevel2'>
                                        <li>
                                            <a class='link2' href='chinh-sach-thanh-toan/index.html'>CHÍNH SÁCH THANH
                                                TOÁN</a>
                                        </li>
                                        <li>
                                            <a class='link2' href='chinh-sach-bao-mat-thong-tin/index.html'>CHÍNH SÁCH BẢO
                                                MẬT THÔNG TIN</a>
                                        </li>
                                        <li>
                                            <a class='link2' href='chinh-sach-dat-tra-phong/index.html'>CHÍNH SÁCH ĐẶT TRẢ
                                                PHÒNG</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='menuItem'>
                                    <a class='link1' href='lien-he/index.html'>
                                        <p class='text'>LIÊN HỆ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='contactBtnBlock'>
                <div class='smallBlock messengerBlock'>
                    <a class='imgPart callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                       styleContact='chatFacebook'>
                        <img alt='messenger' class='messFacePartImg' src='uploads/img/24-icon-2.webp'>
                    </a>
                    <p class='textPart'>Chat face</p>
                </div>
                <div class='smallBlock zaloBlock'>
                    <a class='imgPart callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                       styleContact='chatZalo'>
                        <img alt='zalo' class='zaloPartImg' src='uploads/img/24-icon-3.webp'>
                    </a>
                    <p class='textPart'>Chat Zalo</p>
                </div>
                <div class='smallBlock phoneBlock'>
                    <a class='imgPart callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                       styleContact='callPhone'>
                        <img alt='phone' class='phonePartImg' src='uploads/img/phone_item_2.svg'>
                    </a>
                    <p class='textPart'>Phone</p>
                </div>
                <div class='smallBlock pageUp'>
                    <i aria-hidden='true' class='pageUpImg fa fa-angle-double-up' title='Về đầu trang'></i>
                </div>
            </div>
        </div>
        <div id='menuNKTA_MOBILE'>
            <div class='blockUnderMenuTopPage'></div>
            <div class='menuTopPage'>
                <div class='container'>
                    <div class='row'>
                        <div class='logoPart'>
                            <a class='imgPart' href='index.html'>
                                <img alt='logo' src='uploads/images/5fbe27e1a79a0d5e7942c393/mix-boutique-logo.webp'>
                            </a>
                        </div>
                        <div class='barsPart'>
                            <a class='aTag aTagBars'>
                                <img alt='danh_muc' class='barsPartImg' src='uploads/img/bars_item.svg'>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='menuEndPage'>
                <div class='container'>
                    <div class='row'>
                        <div class='homePart smallPart'>
                            <a class='aTag' href='index.html'>
                                <img alt='homeItem' class='homePartImg' src='uploads/img/u1214.svg'>
                            </a>
                            <p class='textUnderItem'>Trang chủ</p>
                        </div>
                        <div class='messFacePart smallPart'>
                            <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatFacebook'>
                                <img alt='messengerItem' class='messFacePartImg' src='uploads/img/messenger_2.svg'>
                            </a>
                            <p class='textUnderItem'>Messenger</p>
                        </div>
                        <div class='phonePart centerPart'>
                            <a class='callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='callPhone'>
                                <img alt='phoneItem' class='phonePartImg' src='uploads/img/phone_item.svg'>
                            </a>
                        </div>
                        <div class='zaloPart smallPart'>
                            <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>
                                <img alt='Zalo' class='zaloPartImg' src='uploads/img/zalo_2.png'>
                            </a>
                            <p class='textUnderItem'>Zalo</p>
                        </div>
                        <div class='inboxPart smallPart'>
                            <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatMess'>
                                <img alt='map' class='inboxPartImg' src='uploads/img/u1351.svg'>
                            </a>
                            <p class='textUnderItem'>Tin nhắn</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='blockCateMobile'>
                <div class='container'>
                    <div class='wrapCateParts'>
                        <div class='catePart'>
                            <a class='link1' href='index.html'>TRANG CHỦ</a>
                        </div>
                        <div class='catePart'>
                            <a class='link1' href='gioi-thieu/index.html'>GIỚI THIỆU</a>
                        </div>
                        <div class='catePart dropMore active'>
                            <a class='link1' href='khach-san-tinh-yeu/index.html'>KHÁCH SẠN TÌNH YÊU</a>
                            <i aria-hidden='true' class='fa fa-angle-right faFix'></i>
                            <i aria-hidden='true' class='fa fa-angle-down faFix'></i>
                            <ul class='blockLevel2'>
                                <li>
                                    <a class='link2' href='mix-boutique-hotel-186-hoang-ngan/index.html'>MIX BOUTIQUE HOTEL
                                        186 HOÀNG NGÂN </a>
                                </li>
                                <li>
                                    <a class='link2' href='mix-boutique-hotel-256b-dang-tien-dong/index.html'>MIX BOUTIQUE
                                        HOTEL 256B ĐẶNG TIẾN ĐÔNG </a>
                                </li>
                                <li>
                                    <a class='link2' href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>MIX BOUTIQUE
                                        HOTEL 104B NGUYỄN KHUYẾN </a>
                                </li>
                                <li>
                                    <a class='link2' href='mix-boutique-hotel-20-phuc-la-ha-dong/index.html'>MIX BOUTIQUE
                                        HOTEL 20 PHÚC LA HÀ ĐÔNG </a>
                                </li>
                            </ul>
                        </div>
                        <div class='catePart'>
                            <a class='link1' href='gallery/index.html'>GALLERY</a>
                        </div>
                        <div class='catePart'>
                            <a class='link1' href='tin-tuc/index.html'>TIN TỨC</a>
                        </div>
                        <div class='catePart'>
                            <a class='link1' href='su-kien/index.html'>SỰ KIỆN</a>
                        </div>
                        <div class='catePart dropMore'>
                            <a class='link1' href='index.html#/'>CHÍNH SÁCH</a>
                            <i aria-hidden='true' class='fa fa-angle-right faFix'></i>
                            <i aria-hidden='true' class='fa fa-angle-down faFix'></i>
                            <ul class='blockLevel2'>
                                <li>
                                    <a class='link2' href='chinh-sach-thanh-toan/index.html'>CHÍNH SÁCH THANH TOÁN</a>
                                </li>
                                <li>
                                    <a class='link2' href='chinh-sach-bao-mat-thong-tin/index.html'>CHÍNH SÁCH BẢO MẬT THÔNG
                                        TIN</a>
                                </li>
                                <li>
                                    <a class='link2' href='chinh-sach-dat-tra-phong/index.html'>CHÍNH SÁCH ĐẶT TRẢ PHÒNG</a>
                                </li>
                            </ul>
                        </div>
                        <div class='catePart'>
                            <a class='link1' href='lien-he/index.html'>LIÊN HỆ</a>
                        </div>
                    </div>
                    <div class='hideBlock'>
                        <i aria-hidden='true' class='fa fa-times xItem'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden='true' class='modal fade' id='popupContact_1' role='dialog' tabindex='-1'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='titlePart'>
                    <a class='close closeItem' data-dismiss='modal'>
                        x
                    </a>
                </div>
                <div class='SelectLocate'>
                    <div class='smallPart'>
                        <a callPhone='tel:0383104010' chatFacebook='https://www.messenger.com/t/602986296805550/'
                           chatMess='sms:0383104010' chatZalo='https://zalo.me/0383104010' class='linkContact' href='#'
                           rel='nofollow' target='_blank'>Mix Boutique Hotel 186 Hoàng Ngân</a>
                    </div>
                    <div class='smallPart'>
                        <a callPhone='tel:0393307030' chatFacebook='https://www.messenger.com/t/111428390604292/'
                           chatMess='sms:0393307030' chatZalo='https://zalo.me/0393307030' class='linkContact' href='#'
                           rel='nofollow' target='_blank'>Mix Boutique Hotel 256B Đặng Tiến Đông</a>
                    </div>
                    <div class='smallPart'>
                        <a callPhone='tel:0334060906' chatFacebook='https://www.messenger.com/t/111386644041404/'
                           chatMess='sms:0334060906' chatZalo='https://zalo.me/0334060906' class='linkContact' href='#'
                           rel='nofollow' target='_blank'>Mix Boutique Hotel 104B Nguyễn Khuyến</a>
                    </div>
                    <div class='smallPart'>
                        <a callPhone='tel:0353660966' chatFacebook='https://www.facebook.com/messages/t/114361207416511'
                           chatMess='sms:0353660966' chatZalo='https://zalo.me/0353660966' class='linkContact' href='#'
                           rel='nofollow' target='_blank'>Mix Boutique Hotel 20 Phúc La Hà Đông</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id='homeMixHotel'>
        <div class='specialBlock_1'>
            <h1 style='display: none'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Mix Boutique Hotel</h1>
            <div class='owl-carousel owl-theme slide'>
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='/uploads/img/bannerDesk_1.webp'>
                            <img alt='khách sạn tình yêu' src='uploads/img/bannerMobile_1.webp'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Mix Boutique Hotel</p>
                        <p class='text_2'>Ở Mix Boutique Hotel, chúng tôi giúp bạn vẽ bức tranh tình yêu của chính mình bằng
                            những sắc màu tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='/uploads/img/bannerDesk_2.webp'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/bannerMobile_2.webp'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Mix Boutique Hotel</p>
                        <p class='text_2'>Ở Mix Boutique Hotel, chúng tôi giúp bạn vẽ bức tranh tình yêu của chính mình bằng
                            những sắc màu tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầuu"</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='/uploads/img/bannerDesk_3.webp'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/bannerMobile_3.webp'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Mix Boutique Hotel</p>
                        <p class='text_2'>Ở Mix Boutique Hotel, chúng tôi giúp bạn vẽ bức tranh tình yêu của chính mình bằng
                            những sắc màu tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
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
                            <b style='font-size: 25px;'>ĐỪNG ĐỂ TÌNH YÊU CỦA BẠN</b>
                        </p>
                        <p class='underline-theme-1 size-2vw mb-md-4 mb-4'>
                            <b>
                                <i style='font-size: 22px;'>CHỈ CÓ MỘT MÀU!</i>
                            </b>
                        </p>
                        <p class='mb-1 size-1vw text-justify mb-md-4' style='font-size: 20px;'>
                            Ở Mix Boutique Hotel, chúng tôi giúp bạn vẽ bức tranh tình
                            yêu của chính mình bằng những sắc màu
                            tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"
                        </p>
                        <a href='#' style='font-size: 20px;'>Xem thêm &gt;&gt;</a>
                    </div>
                </aside>
            </section>
        </article>
        <article class='container py-3 text-center'>
            <div class='specialBlock_8'>
                <div class='titleBlock_1'>
                    <h2 class='titleText'>TRẢI NGHIỆM MIX HOTEL</h2>
                </div>
                <p class='text-justify text-md-center'>
                    Đồng hành giữ gìn NGỌN LỬA TÌNH YÊU của các cặp đôi. Một chốn riêng tư, một nơi nghỉ ngơi, một điểm đến
                    mới toanh với đa dạng phong cách tại Hà Nội
                </p>
                <div class='row'>
                    <div class='col-4 col-md-2'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' src='uploads/img/24-icon.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>Wifi nhanh</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-2'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-4.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>Bồn tắm</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-2'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' src='uploads/img/24-icon-6.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>cosplay</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-2'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-7.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>an toàn</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-2'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-5.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>đồ chơi</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-2'>
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
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-186-hoang-ngan/index.html'>
                        <h2 class='titleText'>Mix Boutique Hotel 186 Hoàng Ngân </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/so-close/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bccbf8a159118a146eb27/so-close.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/so-close/index.html'>
                                    <p class='titleNews'>So Close</p>
                                </a>
                                <p class='description'>Căn phòng So Close sẽ là nơi sưởi ấm mối tình của bạn. Ở căn phòng
                                    tuyệt vời này, không gian rộng rãi và riêng tư sẽ là nơi cho đôi trẻ thoã sức mà vui vẻ
                                    bên nhau. Những ánh đèn vàng bên cạnh bachground xung quang là gỗ tạo cảm giác ấm cúng
                                    và đơn gia  cùng với giường King Size trắng tinh khôi là nơi giây phút thăng hoa của đôi
                                    trẻ được dâng trào. Nến cùng hoa lãng mạn là chất xúc tác nhẹ nhàng cho cuộc yêu bùng
                                    cháy.Tại So Close, chúng tôi sẽ trân trọng từng giây từng phút ngọt ngào của bạn cùng
                                    người ấy.</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/so-close/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/wild-n-free/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bcb6c8a159118a146eb1a/wild-n-free.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/wild-n-free/index.html'>
                                    <p class='titleNews'>Wild n Free</p>
                                </a>
                                <p class='description'>Wild n Free với sắc trắng nhẹ nhàng cho tình thêm thơ. Căn phòng được
                                    trang bị đầy đủ những thiết bị hiện đại để phục vụ tận tình cho đôi trẻ. Giường trắng
                                    tinh khôi sẽ có cảm giác lơ lửng như cho cuộc yêu của bạn cùng người ấy đang bay trên
                                    thiên đường. Không gian trắng không chỉ có cảm giác thơ mộng mà còn tạo cảm giác nhẹ
                                    nhàng như ở chính căn phòng ở nhà của bạn. Bạn có thể làm mọi thứ trong chính căn phòng
                                    ấy mà không phải ngần ngại điều gì. Rèm trắng cùng dây treo dành cho bạn cùng người ấy
                                    thoả sức nô đùa trong cơn men say tình. Đến với Wild n Free, chúng tôi sẽ trân trọng mọi
                                    khoảng khắc thăng hoa và hạnh phúc của hai trai tim đang rực cháy yêu nhau</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/wild-n-free/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/pure/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bc9b68a159118a146eb0f/pure.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/pure/index.html'>
                                    <p class='titleNews'>Pure</p>
                                </a>
                                <p class='description'>Căn phòng nhẹ nhàng nhưng cũng đầy chất hư hỏng mang tên Pure sẽ mang
                                    đến cho bạn nhiều cảm giác thú vị. Khi đến với Pure, bạn hãy tâm quên chiếc giường kiểu
                                    cũ quen thuộc đi mà thay vào đó là chiếc giường treo trần nhà vô cùng độc đáo. Chiếc
                                    giường thú vị ấy sẽ tạo cho bạn cảm giác lơ lững, đu đưa theo từng nhịp yêu của bạn cùng
                                    người ấy. Ngoài ra, đen led trang trí càng làm căn phòng trở nên ấm cúng và lãng mạn hơn
                                    bao giờ hết. Hãy đến với Pure để khoảng khắc hư hỏng nhất của bạn cùng người trở nên
                                    hoàn hảo hơn</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/pure/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/casanova/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bc8918a159118a146eb06/casanova.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>400.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/casanova/index.html'>
                                    <p class='titleNews'>Casanova</p>
                                </a>
                                <p class='description'>Casanova với một chút bí ẩn, một chút quyến rũ, sự tinh tế nhưng lại
                                    rất bản năng. Casanova chính là nơi bạn khám phá ra mình có thể đam mê tới mức nào.</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/casanova/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/fire/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bc7bd8a159118a146eafe/fire.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/fire/index.html'>
                                    <p class='titleNews'>Fire</p>
                                </a>
                                <p class='description'>Rực rỡ và búng cháy là cảm giác có được khi đến với căn phòng Fire.
                                    Không gian căn phong tràn ngập sắc đỏ sẽ làm cho cảm xúc trở nên bùng cháy rực rỡ hơn
                                    khi yêu. Thiết kế mới lạ của chiếc giường sẽ cho bạn biết cảm giác hư hỏng đến vui vẻ là
                                    như thế nào. Dụng cụ yêu và ghế tình yêu là điểm nhấn cho cuộc vui của bạn trở nên càng
                                    rực cháy hơn. Đến với Fire, phút giây rực rỡ nhất của hai trai tim chung một dập sẽ được
                                    lưu giữ một cách trân quý nhất</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/fire/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/hoi-an/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bc7148a159118a146eaf6/hoi-an.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>400.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/hoi-an/index.html'>
                                    <p class='titleNews'>Hội An</p>
                                </a>
                                <p class='description'>Hội An là căn phòng mang âm hưởng nhẹ nhàng và đầy nét trữ tình. Đến
                                    với Hội An, bạn sẽ được trải nghiệm phong cách hơi thở của phố Cổ. Cuộc vui sẽ trở nên
                                    đặc biệt hơn khi ở trong không gian cổ xưa đầy nét mộng mơ. Giường King Size chăn ấm -
                                    nệm êm là nơi sưởi ấm hai trái tim vàng. Bồn tắm gỗ bên khung cửa sổ vừa vặn cho hai
                                    người sẽ là nơi vừa thư giãn vừa chơi đùa bên nhau. Không gian xanh bên ngoài phòng là
                                    nơi yên bình tươi mát. Bên trong là tông trắng chủ đạo, điểm thêm vào là những chiếc đèn
                                    vàng làm nổi bật nét lãng mạn và nên thơ đầy chất tình của căn phòng. Tại Hội An, chúng
                                    tôi sẽ tận tâm phục vụ để bạn cùng người ấy có được khoảng khắc đáng nhớ nhất</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/hoi-an/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/lullaby/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bc6348a159118a146eaed/lullaby.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/lullaby/index.html'>
                                    <p class='titleNews'>Lullaby</p>
                                </a>
                                <p class='description'>Ánh nến rực rỡ bên những chiếc bóng bay và những cánh hoa hồng đã tạo
                                    nên không gian lãng mạn của phòng Lullbaby. Giường King Size êm ấm là nơi khơi màu cho
                                    cuộc vui bùng cháy. Không gian siêu tình bên cùng với chiếc rèm mỏng tạo cảm giác mờ ảo
                                    và quyến rũ cho cuộc vui thêm sắc thêm màu. Ghế tình yêu sẵn sàng với mọi sắc thái trong
                                    cuộc vui của bạn. Đến với Lullbaby mọi khoảng khắc đều trở nên hoàn hảo và đặc sắc</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/lullaby/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/mia-cherry/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/6009fd8ea79a0d50e0830573/mia-cherry.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/mia-cherry/index.html'>
                                    <p class='titleNews'>MIA CHERRY</p>
                                </a>
                                <p class='description'>Ấm áp không phải khi ngồi bên đống lửa mà là bên cạnh người bạn yêu
                                    thương. Tại căn phòng Mia cherry , chúng tôi trân trọng giây phút ấm áp của hai tâm hồn
                                    đồng điều.</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/mia-cherry/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='mix-boutique-hotel-186-hoang-ngan/index.html'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-256b-dang-tien-dong/index.html'>
                        <h2 class='titleText'>Mix Boutique Hotel 256B Đặng Tiến Đông </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/lalaland/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd7168a159118a146eb71/lalaland.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/lalaland/index.html'>
                                    <p class='titleNews'>Lalaland</p>
                                </a>
                                <p class='description'>Nơi chứa đựng những chuyện tình cảm ngọt ngào là lãng mạn chỉ có thể
                                    là Lalaland. Không hào nhoáng và ồn ào, Lalaland mang lại cảm giác ấm cúng và ngọt ngào
                                    của những câu chuyện tình yêu bình dị nhưng cũng đầy kích thích. Không gian sang chảnh
                                    theo một cách rất riêng làm nên nét thơ mộng đặc sắc. Giường trái tim độc đáo ấm êm thoả
                                    sức lặn lộn trong cuộc chiếc tình yêu. Rạp chiếu có ngay trong phòng vừa tiện lời giải
                                    trí lại vừa tiện lợi mà hành động. Những bông hoa xinh được trang trí xung quang cùng
                                    với chiếc đu xinh bên cửa sổ làm nên nét mộng mơ của những cuộc yêu nhẹ nhàng. Đến với
                                    Lalaland, mọi cảm giác thăng hoa mà bạn có được sẽ tựa như trên chốn thiên đường mộng
                                    mơ</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/lalaland/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/blowj-up/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd5d88a159118a146eb67/blowj-up.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/blowj-up/index.html'>
                                    <p class='titleNews'>Blowj Up</p>
                                </a>
                                <p class='description'>Blowj up là nơi chưa phong vị ngọt ngào cho cuộc tình thêm đổi gió.
                                    Với thiết kế đơn giãn, tình tế cùng màu trắng là chủ đạo đã tạo nên sự đơn giãn nhưng
                                    rất gợi tình. Giường treo lửng lơ mới lạ làm nên cảm giác thăng hoa và thách thức mọi sự
                                    xập xình nhấp nhô khi yêu. Nhà tắm là những tấm kính trong suốt với nhưng chiếc rèm mỏng
                                    gợi cảm giác vừa bí ẩn vừa chân thật thu hút mọi cảm xúc. Để có cảm xúc mãnh liệt nhất,
                                    đến với Blowj up bạn cùng người ấy sẽ được trải nghiệm những phút giây lắng động hoàn
                                    hảo như thể đang bay bổng trên mây</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/blowj-up/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/on-top/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd4b68a159118a146eb5b/on-top.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>400.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/on-top/index.html'>
                                    <p class='titleNews'>On Top</p>
                                </a>
                                <p class='description'>Tình như chốn thiêng đường chỉ có tại căn phòng mang tên On Top. Mang
                                    phong cách của một Maldives thu nhỏ lãng mạn và phong tình. Chiếc giường với thiết kế
                                    độc đáo là nơi chiến trường tình ái sẽ xảy ra. Bồn tăm hiện đại giúp thăng hoa mọi cảm
                                    xúc bị kiềm nén. Một chiếc view đỉnh của căn phòng tạo cảm giác khoái lạc hơn khi yêu.
                                    Không gian ấm cúng cho những trái tim cần được sưởi ấm tròn vẹn. Nến, hoa và rượu là
                                    chất xúc tác hoàn hảo cho khung cảnh thêm đậm chấp tình. Đến với On Top, chúng tôi sẽ
                                    cho bạn nhưng cảm giác mới lạ chỉ có ở căn phòng đặc biệt này</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/on-top/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/lollipop/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd2fa8a159118a146eb51/lollipop.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/lollipop/index.html'>
                                    <p class='titleNews'>Lollipop</p>
                                </a>
                                <p class='description'>Ngọt ngào và lãng mạn như nhưng bộ phim mỹ sẽ có ngay tại căn phòng
                                    Lollipop. Căn phòng đáng yêu với điểm nhấn là chiếc giường hồng màu tím mộng mơ như
                                    những nàng công chúa. Được vui đùa trên chiếc giường ngọt ngào ấy quả thật không còn gì
                                    hoàn hảo hơn. Không gian như một chiếc lâu đài thu nhỏ sẽ tạo cho bạn như những hoàng tử
                                    và công chúa được thoả mình yêu nhau. Gương áp trần soi sáng bóng dáng của hai người với
                                    ngọn lựa đê mê. Mọi phút giây ngọt ngào và thăng hoa của bạn sẽ được lưu trữ tại căn
                                    phòng mang tên Lollipop đáng yêu</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/lollipop/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/kissing/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd1c98a159118a146eb45/kissing.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>400.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/kissing/index.html'>
                                    <p class='titleNews'>Kissing</p>
                                </a>
                                <p class='description'>Sắc đỏ rức cháy là điểm thu hút mạnh mẽ của căn phòng mang tên
                                    Kissing. Đến với Kissing, bạn sẽ được trải nghiệm những điều mới lạ và khoái cảm khi
                                    yêu. Giường tròn độc đáo với phòng cách quí tộc là nơi bạn cùng người ấy thoả sức lăn
                                    tròn ở một tầm cao mới. Bồn tắm sủi bọt bông mịn cùng với view ngắm toàn cảnh thành phố
                                    thì chỉ có hai từ mê đắm. Ghế tình yêu cho bạn cùng người ấy thử độ dẻo dai trong mọi tư
                                    thế. Không gian ấm cúng của Kissing sẽ bắt trọn từng nhịp đập của hai trái tim đang bùng
                                    cháy bên nhau</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/kissing/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/after-sunset/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bd0208a159118a146eb3b/after-sunset.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/after-sunset/index.html'>
                                    <p class='titleNews'>After Sunset</p>
                                </a>
                                <p class='description'>Sự trang trọng và quí tộc chỉ có thể ở căn phòng After Sunset. Tại
                                    đây, bạn sẽ là những nhà thường lưu học cách ăn chơi theo kiểu xa hoa. Giường King Size
                                    là mơi lý tưởng bắt đầu cho cuộc yêu đầy máu lửa. Ghế tình yêu thử thách độ dẻo dai của
                                    các cặp đôi và gương áp trần soi sáng hai cá thể đang hoà thành một.  Với thiết kế cổ
                                    điển sẽ làm cho cuộc vui của bạn thêm phần tuyệt sắc và hoa lệ. Background màu đỏ cháy
                                    sẽ thêm phần kích thích và tạo cảm giác nóng và đầy máu lửa cho cuộc vui thêm phận thăng
                                    hoa. Ở After Sunset, mọi cuộc vui của bạn sẽ là niềm vui của chúng tôi</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/after-sunset/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/lover/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bce438a159118a146eb32/lover.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>400.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/lover/index.html'>
                                    <p class='titleNews'>Lover</p>
                                </a>
                                <p class='description'>Sự kiều diễm và xa hoa là hai từ miêu tả trọn vẹn vẻ đẹp của căn
                                    phòng Lover. Lover có không gian mê hoặc tinh người với sắc đỏ xen lẫn vào đó là một
                                    chút trắng mờ ảo. Giường King size là nơi đắm chìm của mọi cảm xúc rực cháy và thắng
                                    hoa. Phòng tắm được trang bị vách ngắn trong suốt cung với đó là bồn tắm xa hoa sẽ cho
                                    đôi bạn thêm gần nhau hơn. Ghế tình yêu và ghế sofa là nơi mọi tư thế khó được lên ngôi.
                                    Cùng với đó căn phòng coa view nhìn thẳng ra hồ tạo cảm giác lãng mạn và gợi cảm hơn khi
                                    yêu. Tại Lover, những phút giây xa ngã của bạn đều là sự kiều diễm, quyến rũ đến động
                                    lòng người</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/lover/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/bad-boy/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600ac5388a159118a146eac9/bad-boy.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/bad-boy/index.html'>
                                    <p class='titleNews'>Bad Boy</p>
                                </a>
                                <p class='description'>Nếu bạn muốn tìm một căn phòng với đầy sự hư hỏng nhưng lại rất sang
                                    trọng thì hãy đến với Bad Boy. Căn phòng với nhiều hương vị tình ái và sự quyến rũ vô
                                    hình làm cho bạn chỉ muốn yêu ngay khi vô phòng. Với thiết kế đặc biệt và tông đỏ chủ
                                    đạo, căn phòng toát lên một vẻ bí ẩn nhưng đầy tính khiêu gợi đấy nhé.  Chiếc giường nằm
                                    gọn trong chiếc lồng sắc tạo cảm giác táo bạo hơn khi yêu. Mọi dụng cụng yêu là điểm
                                    nhấn cho cuộc vui thêm rực cháy, gương áp trần là nhân chứng vô hình khi hai trái tìm
                                    hoà chung một nhịp đập. Sắc đỏ không chỉ mang lại sự bùng cháy là còn là không gian lãng
                                    mạn tạo nên cuộc yêu hoàn hảo. Với Bad Boy, mọi khoảng khắc hư hỏng hay thơ dại của bạn
                                    cùng được ghi dấu mạnh mẽ không phai</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/bad-boy/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='mix-boutique-hotel-256b-dang-tien-dong/index.html'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <h2 class='titleText'>Mix Boutique Hotel 104B Nguyễn Khuyến </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-601/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600be7e08a159118a146ebcb/room-601.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>450.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-601/index.html'>
                                    <p class='titleNews'>601 - Poppy </p>
                                </a>
                                <p class='description'>601 - Poppy - Mix 104B Nguyễn Khuyến là nơi mà ai từng đến sẽ sa vào
                                    cuộc yêu cuồng nhiệt, quên lối về</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-601/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-502/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600be63f8a159118a146ebbb/room-502.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>380.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-502/index.html'>
                                    <p class='titleNews'>502 - Gypsy</p>
                                </a>
                                <p class='description'>Căn phòng Gypsy khơi dậy những ảo mộng về một tình yêu phóng khoáng,
                                    tự do, bản năng và hoang dại. Chỉ cần tình yêu là đủ và mỗi giây phút yêu đều là một
                                    giây phút thăng hoa hạnh phúc.
                                </p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-502/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-501/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600be0378a159118a146eb92/room-501.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-501/index.html'>
                                    <p class='titleNews'>501 - Wonderland </p>
                                </a>
                                <p class='description'>Dưới ánh sao lung linh, còn gì tuyệt vời hơn được thưởng thức những
                                    bộ phim mà chàng và nàng cùng yêu thích tại căn phòng Wonderland
                                </p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-501/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-402/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bdf138a159118a146eb87/room-402.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-402/index.html'>
                                    <p class='titleNews'>402 - Lalendi </p>
                                </a>
                                <p class='description'>Hãy quên đi mọi quy tắc, hãy quên đi thực tại, chỉ còn anh và em, tại
                                    nơi đây, dành cho nhau từng phút giây yêu đương diệu kì.
                                </p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-402/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-401/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600bdbec8a159118a146eb7d/room-401__1_.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-401/index.html'>
                                    <p class='titleNews'>401 - Kama</p>
                                </a>
                                <p class='description'>Kama là tên vị thần tình yêu trong thần thoại Ấn Độ, luôn mang trong
                                    mình một bộ cung tên, kẻ nào trúng tên của Kama, kẻ đó sa vào đam mê say đắm. Kama tại
                                    Mix là nơi mà ai từng đến sẽ sa vào cuộc yêu cuồng nhiệt, quên lối về.</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-401/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-302/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600ac9e68a159118a146eae3/room-302.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-302/index.html'>
                                    <p class='titleNews'>302 - Virgin </p>
                                </a>
                                <p class='description'>Điểm nhấn của 302 - Virgin - Mix 104B Nguyễn Khuyến chính là căn
                                    phòng suite rộng rãi, màu trắng thoáng đãng để các cặp đôi có thể vừa thư giãn vừa ngắm
                                    toàn cảnh thành phố từ trên cao</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-302/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/room-301/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600ac85d8a159118a146eada/room-301.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>300.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/room-301/index.html'>
                                    <p class='titleNews'>301 - Aurora</p>
                                </a>
                                <p class='description'>Hãy đưa em đến Aurora, để em được làm nàng công chúa xinh đẹp đang
                                    đợi chàng hoàng tử của đời mình. Hãy đánh thức em bằng nụ hôn của tình yêu đích thực.
                                    Hãy đánh thức em như thể mặt trời của anh chỉ mọc nơi đôi mắt em!</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/room-301/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='khach-san-tinh-yeu/renai/index.html'>
                                <img alt='khách sạn tình yêu' loading='lazy'
                                     src='uploads/images/600ac66c8a159118a146ead2/renai.webp'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1'>
                                    <div class='text'>
                                        <i aria-hidden='true' class='fa fa-usd'></i>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>380.000VND/2h</a>
                                    </div>
                                </div>
                                <a class='aTagTitle' href='khach-san-tinh-yeu/renai/index.html'>
                                    <p class='titleNews'>202 - Renai </p>
                                </a>
                                <p class='description'>Renai trong tiếng Nhật có nghĩa là một tình yêu chân chính, lãng mạn.
                                    Chúng ta hay lãng phí thời gian để đi tìm một người yêu hoàn hảo, thay vì học cách làm
                                    nên một tình yêu hoàn hảo. Hãy đến với Renai để có thể tọa nên câu chuyện tình yêu hoàn
                                    hảo của chính bạn.</p>
                                <div class='btnOrder'>
                                    <a class='btnType_2' href='khach-san-tinh-yeu/renai/index.html' rel='nofollow'>đặt
                                        phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
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
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe allowfullscreen='' height='450' loading='lazy'
                                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3969533111076!2d105.81664721493239!3d21.016797186004876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a249877531b13f1!2zTWl4IGJvdXRpcXVlIGhvdGVsIDI1NmIgxJHhurduZyB0aeG6v24gxJHDtG5n!5e0!3m2!1svi!2s!4v1640439714536!5m2!1svi!2s'
                                style='border:0;' width='600'></iframe>
                    </div>
                </div>
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe allowfullscreen='' height='450' loading='lazy'
                                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.105242506444!2d105.83626931493265!3d21.028474585998563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x899c3191170df6c6!2sMix%20boutique%20hotel%20104B%20Nguy%E1%BB%85n%20Khuy%E1%BA%BFn!5e0!3m2!1svi!2s!4v1640439750381!5m2!1svi!2s'
                                style='border:0;' width='600'></iframe>
                    </div>
                </div>
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe allowfullscreen='' height='450' loading='lazy'
                                src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7483739009685!2d105.79262061493154!3d20.96261778603429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaee222abb43cba97!2zTWl4IEJvdXRpcXVlIEhvdGVsIDIwIFBow7pjIExhIEjDoCDEkMO0bmc!5e0!3m2!1svi!2s!4v1640439780711!5m2!1svi!2s'
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
                            <p class='text text_1 company'>CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ LINH KHÁNH</p>
                            <p class='text text_1 location'>186 Phố Hoàng Ngân, Trung Hoà, Thanh Xuân, Hà Nội</p>
                            <a class='text text_1 phone' href='tel:02432323307'>02432323307</a>
                            <a class='text text_1 mail'
                               href="cdn-cgi/l/email-protection.html#2f7c7a7f7f607d7b6f62667767607b6a63017961"><span
                                    class="__cf_email__" data-cfemail="60333530302f3234202d2938282f34252c4e362e">[email&#160;protected]</span></a>
                            <a class='text text_1 chrome' href='index.html'>https://mixhotel.vn/</a>
                            <a class='dmca-badge'
                               href='http://www.dmca.com/Protection/Status.aspx?ID=4bfc3c19-8433-472d-9f3a-98a480e56499'
                               title='DMCA.com Protection Status'>
                                <img alt='DMCA.com Protection Status'
                                     src='../images.dmca.com/Badges/dmca_protected_sml_120m2de2.png?ID=4bfc3c19-8433-472d-9f3a-98a480e56499'
                                     style='width: 50%;'>
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
                        <p class='titleCol'>KẾT NỐI MIX BOUTIQUE</p>
                        <div class='fanpagePart'>
                            <a href='https://www.facebook.com/mixhotel.vn' rel='nofollow' target='_blank'>
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
                    Copyright © 2020 mixhotel.vn. All Rights Reserved. Design web and SEO by
                    <a class='aTagLink' href='https://fagoagency.vn/' rel='nofollow' target='_blank'>FAGO AGENCY</a>
                </div>
            </div>
        </div>
    </div>
@endsection
