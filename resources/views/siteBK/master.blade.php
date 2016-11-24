<!doctype html>
<html lang="en-US">

<head>

    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Start SEO -->
    <meta name="generator" content="ducduy.top">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>


    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/flexslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/jquery.selectBox.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/jquery-ui.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/green.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/site/css/pace-minimal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/site/css/pgwslider.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="favicon.ico">

    <!--[if lt IE 9]>
    <script src="{{asset('assets/site/js/html5shiv.js')}}"></script>
    <![endif]-->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @yield('style')
</head>

<body>


<!-- TOP -->
@inject('Home', 'App\Http\Controllers\HomeController')
<!-- HEADER -->
{!!   $Home->getNavBar() !!}
<!-- HEADER -->
<div id="content">
    @yield('content')
</div>
<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-inner clearfix">
                <div class="footercont-l">
                    <p class="bold" style="font-weight: bold;">Copyright 2016 by hihi. All rights reserved.</p>
                    <p>PHÒNG 2D8 TOÀ NHÀ JVPE, CVPM QUANG TRUNG, PHƯỜNG TÂN CHÁNH HIỆP, QUẬN 12</p>
                </div>
                <div class="footercont-r">
                    <p>
                        <span>Điện thoại: +84 (4) 3974 9999</span>
                        <span class="sep">|</span>
                        <span>Số fax: +84 (4) 3974 8888</span><br>
                    </p>
                    <p>Email: info@emai.com </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->
<div class="footer"><a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a></div>

<script src="{{asset('assets/site/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.selectBox.min.js')}}"></script>
<script src="{{asset('assets/site/js/icheck.js')}}"></script>
<script src="{{asset('assets/site/js/counter.animation.js')}}"></script>
<script src="{{asset('assets/site/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/site/js/custom.js')}}"></script>
<script src="{{asset('assets/site/js/pgwslider.min.js')}}"></script>

<script>
    jQuery(document).ready(function ($) {
        if ($(".btn-top").length > 0) {
            $(window).scroll(function () {
                var e = $(window).scrollTop();
                if (e > 300) {
                    $(".btn-top").show()
                } else {
                    $(".btn-top").hide()
                }
            });
            $(".btn-top").click(function () {
                $('body,html').animate({
                    scrollTop: 0
                })
            })
        }
    });
</script>
@yield('script')
</body>
</html>