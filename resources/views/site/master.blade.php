<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
</head>
<body class="home page page-id-1531 page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php  transparent- wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
<!--start section header-->
<!-- TOP -->
@inject('Home', 'App\Http\Controllers\HomeController')
<!-- HEADER -->
{!!   $Home->getNavBar() !!}
<!--end section header-->
<div class="header-mobile houzez-header-mobile  visible-sm visible-xs" data-sticky="0">
    <div class="container">
        <!--start mobile nav-->
        <div class="mobile-nav">
            <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
            <div class="nav-dropdown main-nav-dropdown"></div>
        </div>
        <!--end mobile nav-->
        <div class="header-logo logo-mobile">
            <a href="index.html">
                <img src="/logo-houzez-white.png" alt="Mobile logo">
            </a></div>
    </div>
</div>

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


<script type="text/javascript">(function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }
    })();</script>
</body>
</html>
