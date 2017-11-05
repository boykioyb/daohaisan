<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description"
          content="Với nhiều loại hải sản tươi sống, chất lượng từ trong và ngoài nước. Đảo hải sản cam kết giao hàng hải sản tận nơi trong thời gian 4H, miễn phí nội thành TPHCM"/>

    <link rel="canonical" href="http://daohaisan.vn/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Hải Sản Tươi Sống , Giao Hàng Tận Nơi"/>
    <meta property="og:image" content="{{ asset('front/img/share_fb_home.png') }}"/>
    <meta property="og:description"
          content="Với nhiều loại hải sản tươi sống, chất lượng từ trong và ngoài nước. Đảo hải sản cam kết giao hàng hải sản tận nơi trong thời gian 4H, miễn phí nội thành TPHCM"/>
    <meta property="og:url" content="http://daohaisan.vn/"/>
    <meta property="og:site_name" content="Đảo Hải Sản "/>


    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}"/>

    <meta name="theme-color" content="#129fd8">
    <meta name="msapplication-TileColor" content="#129fd8">
    <link rel="icon" sizes="192x192" href="{{ asset('front/img/favicon.ico') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="#129fd8">

    <link href='{{ asset('front/css/font-awesome.min.css') + time() }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/bootstrap.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/styles.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/owl.carousel.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/owl.theme.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/owl.transitions.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/settings.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <link href='{{ asset('front/css/responsive.css') }}' rel='stylesheet' type='text/css' media='all'/>
    <script src='{{ asset('front/js/jquery-1.11.3.min.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/bootstrap.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/owl.carousel.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/main.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/modernizr.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/option_selection.js') }}' type='text/javascript'></script>
    <script src='{{ asset('front/js/api.jquery.js') }}' type='text/javascript'></script>
    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/opensans.css') }}">
    <script src='{{ asset('front/js/jquery.slicknav.js') }}' type='text/javascript'></script>
    <link href='{{ asset('front/css/slicknav.css') }}' rel='stylesheet' type='text/css' media='all'/>

    <script data-target=".product-resize" data-parent=".content-product-list" data-img-box=".image-resize"
            src="{{ asset('front/js/fixheightproduct.js')  }}"></script>
    <script>
        //<![CDATA[
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-51541392-1', 'auto');
        try {
            $(window).load(function () {
                if (window.location.pathname == '/checkout') {
                    var price = parseInt(Number($('.total-price label').text().replace(/[^0-9\.-]+/g, "")));
                    if (price < 200000) {
                        alert('Đảo Hải Sản chỉ chấp nhận cho đơn hàng từ 200,000đ trở lên. Giỏ hàng của bạn hiện chưa đạt mức tối thiểu để giao hàng');
                        window.location.href = '/cart';
                    }
                }
            });

        } catch (e) {
        }
        ;
        ga('send', 'pageview');

        //]]>
    </script>
    <script type='text/javascript'>
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        Haravan.culture = 'vi-VN';
        Haravan.shop = 'daohaisan.myharavan.com';
        Haravan.theme = {"name": "Cart new 29/07/2017__daohaisan_hotline", "id": 1000278608, "role": "main"};
        Haravan.domain = 'daohaisan.vn';
        //]]>
    </script>
    <script>
        //<![CDATA[
        (function () {
            function asyncLoad() {
                var urls = ["http://hstatic.net/244/1000030244/20/2017/7-25/noname_f0665c26-b18a-4f16-5d67-fc3f713cb5c6.js"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }

            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
        //]]>
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '167657550403674'); // Insert your pixel ID here.
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=167657550403674&ev=PageView&noscript=1"/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</head>

<body rel="index">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7&appId=1116198081798635";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Google Tag Manager -->
<noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-M8X6XH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'http://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M8X6XH');</script>
<!-- End Google Tag Manager -->


<div id="opacity"></div>
<header>
    <div class="header-top hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="hotline-top no-padding-left col-md-3 hidden-xs hidden-sm">

                    <div class="logo_fixed">
                        <a href="/"><img alt="" src="{{ asset('front/img/logo.png') }}"/></a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="hotline_bottom hotline_bottom_fixed">
                        <div class="icon_hotline">
                            <img src="{{ asset('front/img/icon_hotline_top.png') }}"/>
                            <p>
                                Đặt Hàng:
                            </p>
                        </div>
                        <div class="hotline_number">
                            <a href="tel:19000098">1900 0098</a>
                            <p>
                                (8h-21h từ T2-T7; 17h Chủ Nhật)
                            </p>
                        </div>
                    </div>
                </div>
                <div id="TopMenu" class="col-md-3 col-sm-10 col-xs-10">
                    <div class="block_cart">
                        <a href="/cart"><img src="{{ asset('front/img/cart.png') }}" alt="gio hang"/><span
                                    class="cart-count">0</span></a>
                    </div>
                    <ul>


                        <li><a class="user register" data-dismiss="modal" data-toggle="modal"
                               data-target="#modal_register" href="javascript:void(0)">Đăng kí</a></li>
                        <li><a class="user login" data-toggle="modal" data-target="#modal_login"
                               href="javascript:void(0)">Đăng nhập</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div id="menu_mobi" class="visible-xs visible-sm col-md-1 col-sm-2 col-xs-2" style="float:left">
                    <link href='{{ asset('front/css/menu-mobile.css') }}' rel='stylesheet' type='text/css' media='all'/>
                    <div class="slicknav_menu icon_slicknav_menumb">
                        <a href="javascript:void(0)" id="showmenu-mobile" class="slicknav_btn slicknav_collapsed"
                           style="outline: none;">
                            <span class="slicknav_menutxt"></span>
                            <span class="slicknav_icon slicknav_no-text fa fa-th-list menu-toggle"></span>
                        </a>
                    </div>
                    <section id="wrap-header-mobile">
                        <nav id="menu-mobile" class="left visible-xs">
                            <a class="click-out-menu"><span class="background-icon-close"><i
                                            class="icon-close"></i></span></a>
                            <div class="block-sidebar header-menu col-md-12 col-sm-12 col-xs-12">
                                <span class="title-hotline">Tư vấn đặt hàng</span>
                                <div class="hotline-icon">
                                    <img src="{{ asset('front/img/hotline-icon.png') }}"/>
                                </div>
                                <ul class="hotline-product hotline-menu">
                                    <li><a href="tel:19000098">1900 0098</a>
                                        <p style="margin-bottom: 0">
                                            (8h-21h từ T2-T7; 17h Chủ Nhật)
                                        </p>
                                    </li>

                                </ul>
                            </div>
                            <ul class="col-xs-12">
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/tuoi-song-moi-ngay">
                                        <img class="image_fresh"
                                             src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu1.png?v=231"
                                             alt="tuoi song moi ngay" title="Tươi sống mỗi ngày"/>
                                        <span class="title_menu">Tươi sống mỗi ngày</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="/collections/hau-sua">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu2.png?v=231"
                                             alt="hau sua" title="Hàu Sữa"/>
                                        <span class="title_menu">Hàu Sữa</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="/collections/ngao-so-oc">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu3.png?v=231"
                                             alt="ngao so oc" title="Ngao, Sò, Ốc"/>
                                        <span class="title_menu">Ngao, Sò, Ốc</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cua-ghe">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu4.png?v=231"
                                             alt="cua ghe" title="Cua - Ghẹ "/>
                                        <span class="title_menu">Cua - Ghẹ </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cac-loai-tom">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu5.png?v=231"
                                             alt="tom cac loai" title="Tôm Các Loại "/>
                                        <span class="title_menu">Tôm Các Loại </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/muc">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu6.png?v=231"
                                             alt="muc" title="Mực"/>
                                        <span class="title_menu">Mực</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/ca">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu7.png?v=231"
                                             alt="ca" title="Cá"/>
                                        <span class="title_menu">Cá</span>
                                    </a>
                                    <span data-toggle="collapse" data-target="#menuchild-2" class="more"><i
                                                class="fa fa-plus"></i></span>
                                    <ul class="collapse" id="menuchild-2">

                                        <li><a title="Cá Hồi" href="/collections/ca-hoi">Cá Hồi</a></li>

                                        <li><a title="Cá Ngừ Đại Dương" href="/collections/ca-ngu-dai-duong">Cá Ngừ Đại
                                                Dương</a></li>

                                        <li><a title="Cá Cờ Kiếm" href="/collections/ca-co-kiem">Cá Cờ Kiếm</a></li>

                                        <li><a title="Cá Biển" href="/collections/ca-bien">Cá Biển</a></li>

                                        <li><a title="Tất Cả " href="/collections/ca">Tất Cả </a></li>

                                    </ul>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/bao-ngu-tuoi">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu8.png?v=231"
                                             alt="bao ngu" title="Bào Ngư "/>
                                        <span class="title_menu">Bào Ngư </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cha-muc-cha-ca">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu9.png?v=231"
                                             alt="cha gia vi" title="Chả & Gia Vị "/>
                                        <span class="title_menu">Chả & Gia Vị </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/hai-san-nhap-khau">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu10.png?v=231"
                                             alt="hai san nhap khau" title="Hải Sản Nhập Khẩu "/>
                                        <span class="title_menu">Hải Sản Nhập Khẩu </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/products/yen-tuoi">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu11.png?v=231"
                                             alt="yen tuoi" title="Yến Tươi"/>
                                        <span class="title_menu">Yến Tươi</span>
                                    </a>

                                </li>
                                <li><a title="TIN KHUYẾN MÃI " href="/blogs/tin-khuyen-mai">TIN KHUYẾN MÃI </a></li>
                                <li><a title="MÓN NGON" href="/blogs/hau-sua">MÓN NGON</a></li>
                                <li><a title="KHÁCH HÀNG PHẢN HỒI" href="/blogs/khach-hang-phan-hoi">KHÁCH HÀNG PHẢN
                                        HỒI</a></li>
                                <li><a title="CỬA HÀNG" href="/pages/cua-hang">CỬA HÀNG</a></li>
                                <li><a title="BÁN SỈ" href="/collections/cung-cap-hai-san">BÁN SỈ</a></li>
                                <li class="lobster_bay_mobile">
                                    <a class="lobster_bay_icon" href="http://lobsterbay.vn/"><img
                                                src="http://theme.hstatic.net/1000030244/1000278608/14/lobster_bay_mobile.png?v=231"/>Click
                                        Đặt Món Ăn!</a>
                                </li>
                            </ul>
                            <div class="col-xs-12 user-sidebar-header">
                                <div class="icon-user-sidebar"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <div class="login-user-sidebar">
                                    <a href="/account/login" class="login-btn">Đăng nhập </a><a href="/account/register"
                                                                                                class="login-btn"> /
                                        Đăng ký</a>
                                </div>
                            </div>
                        </nav>
                    </section>
                </div>
                <div class="logo no-padding-left no-padding-xs col-lg-4 col-md-3 col-sm-8 col-xs-7">
                    <a href="/"><img alt="" src="http://theme.hstatic.net/1000030244/1000278608/14/logo.png?v=231"/></a>
                </div>
                <div class="visible-xs visible-sm block_cart col-lg-2 col-md-3 col-sm-2 col-xs-3">
                    <a href="javascript:void(0)" class="cart_link"><img
                                src="http://theme.hstatic.net/1000030244/1000278608/14/cart.png?v=231"
                                alt="gio hang"/><span class="cart-count">0</span></a>
                </div>
                <div class="visible-xs visible-sm hotline_bottom col-xs-12 col-md-12 col-lg-7 col-sm-12">
                    <div class="icon_hotline">
                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_hotline_top.png?v=231"/>
                        <p>
                            Đặt Hàng:
                        </p>
                    </div>
                    <div class="hotline_number">
                        <a href="tel:19000098">1900 0098</a>
                        <p>
                            (8h-21h từ T2-T7; 17h Chủ Nhật)
                        </p>
                    </div>
                </div>
                <div class="visible-md visible-lg visible-sm block_search col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <form id="searchbox" action="/search" method="GET">
                        <div class="control-group input-group">
                            <input type="hidden" name="type" value="product"/>
                            <label for="index_input_search" class="search-input-label"><i class="fa fa-search"
                                                                                          aria-hidden="true"></i></label>
                            <input type="text" name="q" value="" class="index_input_search form-control"
                                   placeholder="Nhập từ khóa tìm kiếm">
                            <span class="input-group-btn">
									<button class="btn_search_submit btn btn-default " type="submit">Tìm ngay</button>
								</span>
                        </div>
                    </form>
                </div>
                <div class="hidden-xs hidden-sm hotline_bottom col-xs-12 col-md-4 col-lg-3 col-sm-12">
                    <div class="icon_hotline">
                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_hotline_top.png?v=231"/>
                        <p>
                            Đặt Hàng:
                        </p>
                    </div>
                    <div class="hotline_number">
                        <a href="tel:19000098">1900 0098</a>
                        <p>
                            (8h-21h từ T2-T7; 17h Chủ Nhật)
                        </p>
                    </div>
                </div>
                <div class="visible-md visible-lg block_cart col-lg-1 col-md-1 col-sm-2 col-xs-3">
                    <a href="/cart"><img src="http://theme.hstatic.net/1000030244/1000278608/14/cart.png?v=231"
                                         alt="gio hang"/><span class="cart-count">0</span></a>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="block_search col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <form id="searchbox" action="/search" method="GET">
                        <div class="control-group input-group wrap-input">
                            <input type="hidden" name="type" value="product"/>
                            <label for="index_input_search" class="search-input-label"><i class="fa fa-search"
                                                                                          aria-hidden="true"></i></label>
                            <input type="text" name="q" value="" class="index_input_search form-control"
                                   placeholder="Nhập từ khóa tìm kiếm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu hidden-sm hidden-xs" id="main_nav">
        <div class="container">
            <div class="row">
                <div class="width-20 no-padding-left col-md-3 col-sm-4 col-xs-12">
                    <div id="DHS_megamenu">
                        <div class="title_block">
                            <span>danh mục</span>
                        </div>
                        <div class="block_conten navbar_menuvertical ">
                            <ul class="nav navbar-nav nav_verticalmenu" role="navigation">
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/tuoi-song-moi-ngay">
                                        <img class="image_fresh"
                                             src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu1.png?v=231"
                                             alt="tuoi song moi ngay" title="Tươi sống mỗi ngày"/>
                                        <span class="title_menu">Tươi sống mỗi ngày</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="/collections/hau-sua">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu2.png?v=231"
                                             alt="hau sua" title="Hàu Sữa"/>
                                        <span class="title_menu">Hàu Sữa</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="/collections/ngao-so-oc">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu3.png?v=231"
                                             alt="ngao so oc" title="Ngao, Sò, Ốc"/>
                                        <span class="title_menu">Ngao, Sò, Ốc</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cua-ghe">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu4.png?v=231"
                                             alt="cua ghe" title="Cua - Ghẹ "/>
                                        <span class="title_menu">Cua - Ghẹ </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cac-loai-tom">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu5.png?v=231"
                                             alt="tom cac loai" title="Tôm Các Loại "/>
                                        <span class="title_menu">Tôm Các Loại </span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/muc">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu6.png?v=231"
                                             alt="muc" title="Mực"/>
                                        <span class="title_menu">Mực</span>
                                    </a>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/ca">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu7.png?v=231"
                                             alt="ca" title="Cá"/>
                                        <span class="title_menu">Cá</span>
                                    </a>
                                    <div class="subleftmenu">
                                        <div class="content_category">
                                            <ul>

                                                <li><a href="/collections/ca-hoi" title="cá hồi">Cá Hồi</a></li>

                                                <li><a href="/collections/ca-ngu-dai-duong" title="cá ngừ đại dương">Cá
                                                        Ngừ Đại Dương</a></li>

                                                <li><a href="/collections/ca-co-kiem" title="cá cờ kiếm">Cá Cờ Kiếm</a>
                                                </li>

                                                <li><a href="/collections/ca-bien" title="cá biển">Cá Biển</a></li>

                                                <li><a href="/collections/ca" title="tất cả ">Tất Cả </a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/bao-ngu-tuoi">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu8.png?v=231"
                                             alt="bao ngu" title="Bào Ngư "/>
                                        <span class="title_menu">Bào Ngư </span>
                                    </a>

                                </li>

                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/cha-muc-cha-ca">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu9.png?v=231"
                                             alt="cha gia vi" title="Chả & Gia Vị "/>
                                        <span class="title_menu">Chả & Gia Vị </span>
                                    </a>

                                </li>

                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/collections/hai-san-nhap-khau">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu10.png?v=231"
                                             alt="hai san nhap khau" title="Hải Sản Nhập Khẩu "/>
                                        <span class="title_menu">Hải Sản Nhập Khẩu </span>
                                    </a>

                                </li>

                                <li class="item-vertical">
                                    <a href="http://daohaisan.vn/products/yen-tuoi">
                                        <img src="http://theme.hstatic.net/1000030244/1000278608/14/icon_megamenu11.png?v=231"
                                             alt="yen tuoi" title="Yến Tươi"/>
                                        <span class="title_menu">Yến Tươi</span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="no-padding col-md-9 col-sm-8 hidden-xs">

                    <ul class="nav navbar-nav menu_hori">

                        <li>
                            <a href="/blogs/tin-khuyen-mai">
                                TIN KHUYẾN MÃI
                            </a>
                        </li>

                        <li>
                            <a href="/blogs/hau-sua">
                                MÓN NGON
                            </a>
                        </li>

                        <li>
                            <a href="/blogs/khach-hang-phan-hoi">
                                KHÁCH HÀNG PHẢN HỒI
                            </a>
                        </li>

                        <li>
                            <a href="/pages/cua-hang">
                                CỬA HÀNG
                            </a>
                        </li>

                        <li>
                            <a href="/collections/cung-cap-hai-san">
                                BÁN SỈ
                            </a>
                        </li>

                        <li class="lobster_bay">
                            <a class="lobster_bay_icon" href="http://lobsterbay.vn/"><img
                                        src="http://theme.hstatic.net/1000030244/1000278608/14/lobster_bay.png?v=231"/></a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
<!--/Header-->
<div class="wraper container">
   @yield('content')
</div>
<section class="copyright">
    <div class="container">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center">
            <a href="/"><img class="logo-foot" alt=""
                             src="http://theme.hstatic.net/1000030244/1000278608/14/logo.png?v=231"/></a>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <p>
                Công ty TNHH Đảo Hải Sản
            </p>
            <p>Địa chỉ cửa hàng : A9 Nguyễn Sỹ Sách, P15, Quận Tân Bình ( đối diện Chung cư Ruby Garden)</p>
            <p>
                Địa chỉ văn phòng : 2A Nguyễn Sỹ Sách, P15, Quận Tân Bình ( 1.12 Tầng trệt Chung cư Ruby Garden)
            </p>
            <p>ĐT : 1900.0098; Email : contact@daohaisan.vn; Mã số Doanh Nghiệp : 0313566925; Do sở Kế Hoạch và Đầu Tư
                TPHCM cấp ngày 07/12/2015</p>

        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 text-center">
            <a href="//online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=26888"><img class="logo-bct"
                                                                                          src="http://theme.hstatic.net/1000030244/1000278608/14/dathongbao.png?v=231"/></a>
        </div>
    </div>
</section>
<!--Modal login-->
<div id="modal_login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <div class="modal-body">
                <div class="content-left">
                    <h2>Đăng nhập</h2>
                    Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.
                    <img src="http://theme.hstatic.net/1000030244/1000278608/14/graphic-map.png?v=231">
                </div>
                <div class="content-right">
                    <div class="tab">
                        <a class="tab-item active" data-dismiss="modal" data-toggle="modal" data-target="#modal_login"
                           href="#"> Đăng nhập</a>
                        <a class="tab-item " href="#" data-dismiss="modal" data-toggle="modal"
                           data-target="#modal_register">Tạo tài khoản</a>
                    </div>
                    <div id="login_x">
                        <form accept-charset='UTF-8' action='/account/login' id='customer_login' method='post'>
                            <input name='form_type' type='hidden' value='customer_login'>
                            <input name='utf8' type='hidden' value='✓'>

                            <div class="form-group">
                                <label for="login-form-email">Email:</label>
                                <input required type="email" id="login-form-email" name="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="login-form-password">Mật khẩu:</label>
                                <input required type="password" id="login-form-password" name="password"
                                       class="form-control"/>
                            </div>
                            <div class="form-group forget-password-group">
                                Quên mật khẩu? Nhấn vào <a href="#" onclick="showRecoverPasswordForm_x();return false;">đây</a>
                            </div>
                            <div class="form-group btn_submit_group nomargin">
                                <button class="btn btn-primary" id="login-form-submit" name="login-form-submit"
                                        type='submit' value="login">Đăng nhập
                                </button>
                            </div>
                            <!--</form>-->
                        </form>
                        <div class="modal_social_wrap">
                            <script src="http://multiapp.haravan.com/social-login/script/lobsterbay.js"></script>
                        </div>
                    </div>
                    <!-- forgot password -->
                    <div id="recover_password_x" style="display:none; max-width: 550px;" class="">
                        <form accept-charset="UTF-8" action="/account/recover" class="form_recover" method="post">
                            <input name="form_type" type="hidden" value="recover_customer_password">
                            <input name="utf8" type="hidden" value="true">
                            <div class="form-group ">
                                <label for="recover-email">Email:</label>
                                <input required type="email" id="recover-email" name="email" value=""
                                       class="form-control"/>
                            </div>

                            <div class="form-group btn_submit_group nomargin">
                                <button class="btn btn-primary" type="submit">Gửi</button>
                                <button class="btn btn-primary nomargin"
                                        onclick="hideRecoverPasswordForm_x(); return false;" name="cancel">Hủy
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- end forgot password -->
                    <script type="text/javascript">
                        function showRecoverPasswordForm_x() {
                            document.getElementById('recover_password_x').style.display = 'block';
                            document.getElementById('login_x').style.display = 'none';
                        }

                        function hideRecoverPasswordForm_x() {
                            document.getElementById('recover_password_x').style.display = 'none';
                            document.getElementById('login_x').style.display = 'block';
                        }

                        if (window.location.hash == '#recover') {
                            showRecoverPasswordForm_x()
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal_register" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <div class="modal-body">
                <div class="content-left">
                    <h2>Tạo tài khoản</h2>
                    Tạo tài khoản để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.
                    <img src="{{ asset('front/img/graphic-map.png') }}">
                </div>
                <div class="content-right">
                    <div class="tab">
                        <a class="tab-item" data-dismiss="modal" data-toggle="modal" data-target="#modal_login"
                           href="javascript:void(0)"> Đăng nhập</a>
                        <a class="tab-item active" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal"
                           data-target="#modal_register">Tạo tài khoản</a>
                    </div>
                    <div id="login_x">
                        <form accept-charset='UTF-8' action='/account' id='create_customer' method='post'>
                            <input name='form_type' type='hidden' value='create_customer'>
                            <input name='utf8' type='hidden' value='✓'>

                            <div class="form-group">
                                <label for="register-form-firstname">Tên:</label>
                                <input required type="text" id="register-form-firstname" placeholder="Tên"
                                       name="customer[first_name]" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="register-form-lastname">Họ:</label>
                                <input required type="text" id="register-form-lastname" placeholder="Họ"
                                       name="customer[last_name]" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="register-form-email">Email:</label>
                                <input required type="email" id="register-form-email" placeholder="Email"
                                       name="customer[email]" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="register-form-password">Mật khẩu:</label>
                                <input required type="password" id="register-form-password" placeholder="Mật khẩu"
                                       name="customer[password]" class="form-control"/>
                            </div>
                            <div class="form-group btn_submit_group nomargin">
                                <button class="btn btn-primary" id="register-form-submit" name="register-form-submit"
                                        type='submit' value="register">Đăng ký
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        <!-- End Modal login -->
{{--<script>
    function getCartAjax() {
        var cart = null;
        var alert = "Đảo Hải Sản chỉ chấp nhận cho đơn hàng 200,000đ trở lên. Giỏ hàng bạn hiện chưa đạt mức tối thiểu để giao hàng";
        $('#cartform').hide();
        $('#myCart #exampleModalLabel').text("Giỏ hàng");
        jQuery.getJSON('/cart.js', function (cart, textStatus) {
            if (cart) {
                $('#cartform').show();
                $('.line-item:not(.original)').remove();
                $.each(cart.items, function (i, item) {
                    var total_line = 0;
                    var total_line = item.quantity * item.price;
                    tr = $('.original').clone().removeClass('original').appendTo('table#cart-table tbody');
                    if (item.image != null)
                        tr.find('.item-image').html("<img src=" + Haravan.resizeImage(item.image, 'small') + ">");
                    else
                        tr.find('.item-image').html("<img src='http://hstatic.net/0/0/global/noDefaultImage6_large.gif'>");
                    vt = item.variant_options;
                    if (vt.indexOf('Default Title') != -1)
                        vt = '';
                    tr.find('.item-title a').html(item.product_title + '<br><span>' + vt + '</span>').attr('href', item.url);
                    tr.find('.item-quantity').html("<input data-price=" + item.price + " data-id=" + item.variant_id + " class='quantity1' name='updates' min='1' type='number' value=" + item.quantity + " />");
                    if (typeof(formatMoney) != 'undefined') {
                        tr.find('.item-one-price').html(Haravan.formatMoney(item.price, formatMoney));
                        tr.find('.item-price').html(Haravan.formatMoney(total_line, formatMoney));
                    } else {
                        tr.find('.item-one-price').html(Haravan.formatMoney(item.price, ''));
                        tr.find('.item-price').html(Haravan.formatMoney(total_line, ''));
                    }
                    tr.find('.item-delete').html("<a href='javascript:void(0)' onclick='deletecart(" + item.variant_id + ")' ><img class='delete-cart' src='http://hstatic.net/244/1000030244/10/2016/5-31/icon-delelte.png'/> Bỏ sản phẩm</a>");
                });
                console.log(cart.total_price);
                if (typeof(formatMoney) != 'undefined') {
                    if (cart.total_price < 15000000) {
                        $('.btn-modal-cart').html("<button class='button-default disabled' disabled id='modal-checkout-button'>Tiến hành thanh toán <i class='fa fa-long-arrow-right' aria-hidden='true'></i></button>");
                        $('.item-total').html(Haravan.formatMoney(cart.total_price, formatMoney));
                        $('.row_alert_warning').html("<div class='alert-warning'>" + alert + "</div>");
                    } else {
                        $('.btn-modal-cart').html("<button class='button-default' id='modal-checkout-button'>Tiến hành thanh toán <i class='fa fa-long-arrow-right' aria-hidden='true'></i></button>");
                        $('.item-total').html(Haravan.formatMoney(cart.total_price, formatMoney));
                        $('.row_alert_warning').html('');
                    }
                } else {
                    if (cart.total_price < 15000000) {
                        $('.btn-modal-cart').html("<button class='button-default disabled' disabled id='modal-checkout-button'>Tiến hành thanh toán <i class='fa fa-long-arrow-right' aria-hidden='true'></i></button>");
                        $('.item-total').html(Haravan.formatMoney(cart.total_price, ''));
                        $('.row_alert_warning').html("<div class='alert-warning'>" + alert + "</div>");
                    } else {
                        $('.btn-modal-cart').html("<button class='button-default' id='modal-checkout-button'>Tiến hành thanh toán <i class='fa fa-long-arrow-right' aria-hidden='true'></i></button>");
                        $('.item-total').html(Haravan.formatMoney(cart.total_price, ''));
                        $('.row_alert_warning').html('');
                    }
                }
                $('.modal-title b').html(cart.item_count);
                $('*[id=cart-count]').html(cart.item_count);
                if (cart.item_count == 0) {
                    //$('#myCart button').attr('disabled', '');
                    //						$('#myCart #cartform').addClass('hidden');
                    $('#myCart #cart-table').addClass('hidden');
                    $('#myCart .modal-footer').addClass('hidden');
                    $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
                }
                else {
                    $('#myCart #exampleModalLabel').html('<img src="//hstatic.net/244/1000030244/10/2016/5-31/icon-cart.png" class="icon-cart"/> Giỏ hàng của bạn (' + cart.item_count + 'sản phẩm) <i class="fa fa-play" aria-hidden="true"></i>');
                    $('#myCart .modal-footer').removeClass('hidden');
                    $('#myCart #cart-table').removeClass('hidden');
                    $('#myCart button').removeAttr('disabled');
                }
            }
            else {
                $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
                $('#cartform').hide();
            }
            $('input.quantity1').change(function () {
                var q = $(this).val();
                console.log(q);
                var item_price = $(this).attr('data-price');
                var item_id = $(this).attr('data-id');
                console.log(item_price);
                var total = q * item_price;
                console.log(total);
                $(this).parents('.line-item').find('.item-price').html(Haravan.formatMoney(total, "{{amount}} VND"));
                var params = {
                    type: 'POST',
                    url: '/cart/change.js',
                    data: 'quantity=' + q + '&id=' + item_id,
                    dataType: 'json',
                    success: function (cart) {
                        $.getJSON('/cart.js', function (cart, textStatus) {
                            $('.cart-count').html('' + cart.item_count + '');
                            $('.item-total').html(Haravan.formatMoney('' + cart.total_price + '', "{{amount}} VND"));
                        });
                    },
                    error: function (XMLHttpRequest, textStatus) {
                        Haravan.onError(XMLHttpRequest, textStatus);
                    }
                };
                jQuery.ajax(params);
            });
        });
    }

    function deletecart(variant_id) {
        var params = {
            type: 'POST',
            url: '/cart/change.js',
            data: 'quantity=0&id=' + variant_id,
            dataType: 'json',
            success: function (cart) {
                $('body').removeClass('modal-open');
                $('body #myCart').remove();
                $('body .modal-backdrop').remove();
                $.ajax({
                    url: '/cart?view=popup-cart',
                    success: function (data) {
                        $('body').addClass('modal-open');
                        $('body').append(data);
                    }
                })
            },
            error: function (XMLHttpRequest, textStatus) {
                Haravan.onError(XMLHttpRequest, textStatus);
            }
        };
        jQuery.ajax(params);
    }

    $(document).ready(function () {
        var addToCart_loop = 0;
        $('.addcartindex').click(function (e) {
            e.preventDefault();
            var variant_id = $(this).attr('data-id');
            var id = $(this).attr('data-proid');
            var price = $(this).data('price');
            var params = {
                type: 'POST',
                url: '/cart/add.js',
                async: false,
                data: 'quantity=1&id=' + variant_id,
                dataType: 'json',
                success: function (line_item) {
                    $.ajax({
                        url: '/cart?view=popup-cart',
                        success: function (data) {
                            $('body').addClass('modal-open');
                            $('body').append(data);
                        }
                    })
                    $.getJSON('/cart.js', function (cart, textStatus) {
                        $('.cart-count').html('' + cart.item_count + '');
                        $('.item-total').html(Haravan.formatMoney('' + cart.total_price + '', "{{amount}} VND"));
                    });
                    console.log(addToCart_loop);
                    if (addToCart_loop != id) {
                        addToCart_loop = id;
                        console.log(addToCart_loop);
                        fbq('track', 'AddToCart', {
                            content_type: 'product',
                            content_ids: [id],
                            value: price,
                            currency: 'VND'
                        });
                    }
                },
                error: function (XMLHttpRequest, textStatus) {
                    Haravan.onError(XMLHttpRequest, textStatus);
                }
            };
            jQuery.ajax(params);
        });
        $('body').on('click', '#myCart .close', function () {
            $('body').removeClass('modal-open');
            $('body #myCart').remove();
            $('body .modal-backdrop').remove();
        })
        $('body').on('click', '#myCart .modal-backdrop', function () {
            $('body').removeClass('modal-open');
            $('body #myCart').remove();
            $('body .modal-backdrop').remove();
        })
        $('#modal-checkout-button').click(function (e) {
            e.preventDefault();
            window.location = '/checkout';
        });
        jQuery('#main-menu').slicknav({
            label: '',
            prependTo: '#menu_mobi'
        });
        jQuery("#showmenu-mobile").click(function (e) {
            e.preventDefault();
            jQuery("#menu-mobile").toggleClass("show");
            jQuery(".click-out-menu").toggleClass("show-menu");
            //jQuery("#wrap-header-mobile").append('<span class="background-rgba"></span>');
            jQuery('body').addClass('overflow-hidden');
            jQuery('.background-icon-close').show();
            jQuery('#opacity').addClass("opacity-body");
        });
        jQuery('.click-out-menu').click(function () {
            jQuery('#menu-mobile').removeClass("show");
            jQuery(this).removeClass("show-menu");
            jQuery('body').removeClass('overflow-hidden');
            jQuery('.background-icon-close').hide();
            jQuery('#opacity').removeClass("opacity-body");
        });
        jQuery('.background-icon-close').click(function () {
            jQuery('#menu-mobile').removeClass("show");
            jQuery('.click-out-menu').removeClass("show-menu");
            jQuery(".background-rgba").remove();
            jQuery('body').removeClass('overflow-hidden');
            jQuery(this).hide();
            jQuery('#opacity').removeClass("opacity-body");
        });
        $(".more").on("click", function () {
            $("i", this).toggleClass("fa-plus fa-minus");
            $(this).nextAll("ul").slideToggle("fast");
        });
        $('.navbar_menuvertical .nav_verticalmenu>li:first-child a').hover(
            function () {
                var src = '//theme.hstatic.net/1000030244/1000278608/14/icon-fresh-hover.png?v=231';
                console.log(src);
                $(this).find('.image_fresh').attr('src', '//theme.hstatic.net/1000030244/1000278608/14/icon-fresh-hover.png?v=231');
            },
            function () {
                $(this).find('.image_fresh').attr('src', '//theme.hstatic.net/1000030244/1000278608/14/icon_megamenu1.png?v=231');
            }
        );
        if (jQuery(window).width() > 991) {
            jQuery(window).scroll(function () {
                if ($(this).scrollTop() > $('.header-top').height()) {
                    $('.header-top').addClass('header-top-fixed');
                } else {
                    $('.header-top').removeClass('header-top-fixed');
                }
            });
        }
        $('.cart_link').click(function () {
            $.ajax({
                url: '/cart?view=popup-cart',
                success: function (data) {
                    $('body').addClass('modal-open');
                    $('body').append(data);
                }
            })
            $('#myCart').modal('show');
            $('.modal-backdrop').css({'height': $(document).height()});
        });
    });

</script>--}}

<link rel='stylesheet' media="screen" href='{{ asset('front/css/box-style.css') }}'/>


</body>
</html>