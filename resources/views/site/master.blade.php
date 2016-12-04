<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <link rel='stylesheet' href='{{asset('assets/site/css/bootstrap.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/bootstrap-select.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/owl.carousel.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/slick.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/slick-theme.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/jquery-ui.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/prettyPhoto.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/font-awesome.min.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/bootstrap-datetimepicker.min.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/main.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/css/styles.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{asset('assets/site/style.css')}}' type='text/css' media='all'/>
    <script type='text/javascript' src='{{asset('assets/site/js/jquery/jquery.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/site/js/jquery/jquery-migrate.min.js')}}'></script>

    <style>
        #backToTop {
            width: 40px;
            height: 40px;
            opacity: 0.5;
            position: fixed;
            bottom: 40px;
            left: 96%;
            display: none;
            text-indent: -10000px;
            outline: none !important;
            background-image: url('/assets/img/icon-back-to-top.png');
            background-repeat: no-repeat;
        }
    </style>
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
<body class="home page page-id-1531 page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php  transparent- wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
<!--start section header-->
<!-- TOP -->
@inject('Home', 'App\Http\Controllers\HomeController')
<!-- HEADER -->
{!!   $Home->getNavBar() !!}

<!--start advanced search section-->

<div id="section-body">
    @yield('content')
</div>
<button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
<!--start footer section-->
<footer id="footer-section">
    <div class="footer footer-v2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div id="houzez_about_widget-2" class="footer-widget widget-about">
                        <div class="widget-top"><h3 class="widget-title">About Site</h3></div>
                        <div class="widget-body">
                            <p>Houzez is a premium WordPress theme for real estate where modern aesthetics are combined with tasteful simplicity.</p>
                            <p class="read"><a href="http://houzez01.favethemes.com/about-houzez/">Read more <i class="fa fa-caret-right"></i></a></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="houzez_contact-4" class="footer-widget widget-contact">
                        <div class="widget-top"><h3 class="widget-title">Contact Us</h3></div>
                        <div class="widget-body">
                            <p></p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-location-arrow"></i> 774 NE 84th St Miami, FL 33879</li>

                                <li><i class="fa fa-phone"></i> Call us FREE +1 (800) 990 8877</li>

                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:email@email.com">email@email.com</a></li>
                            </ul>

                            <p class="read"><a href="http://houzez01.favethemes.com/contact/">Contact us <i class="fa fa-caret-right"></i></a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p><a href="http://yeubatdongsan.vn/">yeubatdongsan.vn</a> - All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
                            <ul id="footer-menu" class="">
                                <li id="menu-item-750" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750"><a href="privacy/index.html">Privacy</a></li>
                                <li id="menu-item-751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-751"><a href="terms-and-conditions/index.html">Terms and Conditions</a></li>
                                <li id="menu-item-1181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1181"><a href="contact/index.html">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col foot-social">
                        <p>
                            Follow us
                            <a target="_blank" href="https://facebook.com/Favethemes"><i class="fa fa-facebook-square"></i></a>

                            <a target="_blank" href="https://twitter.com/favethemes"><i class="fa fa-twitter-square"></i></a>

                            <a target="_blank" href="http://linkedin.com/"><i class="fa fa-linkedin-square"></i></a>

                            <a target="_blank" href="http://google.com/"><i class="fa fa-google-plus-square"></i></a>

                            <a target="_blank" href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div><!-- End footer bottom -->
</footer>
<a href="#" ID="backToTop"></a>
<script type='text/javascript' src='{{asset('assets/site/js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/slick.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery-ui.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery.nicescroll.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/moment.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/plugins.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery/ui/core.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery/ui/widget.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery/ui/position.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/site/js/jquery/ui/menu.min.js')}}'></script>
<script>

    $(function () {
        $(window).scroll(function () {
            var wrap = $("#wrap");
            if ($('body').scrollTop() > 147) {
                wrap.addClass("navbar-fixed-top");
            } else {
                wrap.removeClass("navbar-fixed-top");
            }
        });
    });

    jQuery(document).ready(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#backToTop').fadeIn('slow');
            } else {
                $('#backToTop').fadeOut('slow');
            }
        });
        $('#backToTop').click(function () {
            $("html, body").scrollTop(0);
            return false;
        });
    });
</script>

@yield('script')

</body>
</html>
