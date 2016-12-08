@extends('site.master')
@section('title','Liên Hệ')
@section('keywords','Mua bán bất động sản')
@section('description','Mua bán bất động sản')
@section('content')
    <div class="header-media">
        <div class="banner-parallax " style="height: 300px;">
            <div class="banner-bg-wrap" style="transform: translate3d(0px, 1.5px, 0px);">
                <div class="banner-inner" style="background-image: url({{asset('assets/img/chicago.jpg')}}); "></div>
            </div>
        </div>
        <div class="banner-caption">
            <h1>Liên hệ</h1>
        </div>
    </div>
    <div class="container">
        <!--start compare panel-->
        <div id="compare-controller" class="compare-panel">
            <div class="compare-panel-header">
                <h4 class="title"> Compare Listings <span class="panel-btn-close pull-right"><i class="fa fa-times"></i></span></h4>
            </div>

            <div id="compare-properties-basket">
            </div>
        </div>
        <!--end compare panel-->
        <div class="page-title breadcrumb-top">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active">Liên Hệ</li>
                    </ol>
                    <div class="page-title-left">
                        <h1 class="title-head">Thông tin liên hệ </h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-detail-content houzez-page-template">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-main">
                        <div class="white-block ">
                            <article id="post-1100" class="post-1100 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="row row-fluid">
                                        <div class="col-md-8">
                                            <div id="map" style="position: relative;z-index:9;width:100%;height:500px"></div>

                                            <script>
                                                function initMap() {
                                                    var uluru = {lat: 10.7404888, lng: 106.6939804};
                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 15,
                                                        center: uluru
                                                    });
                                                    var marker = new google.maps.Marker({
                                                        position: uluru,
                                                        map: map
                                                    });
                                                }
                                            </script>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1458842730143">
                                                        <div class="wpb_wrapper">
                                                            <p class="padding-top"><strong>For All Press Inquiries,</strong><br>
                                                                <strong>please contact:</strong></p>
                                                            <p><strong>Amy Miller</strong><br>
                                                                Public Relations Manager<br>
                                                                774 NE 84th St Miami, FL 33879<br>
                                                                amy.miller@houzez.com</p>
                                                            <p><strong>Kyle Parker</strong><br>
                                                                Public Relations Associated<br>
                                                                774 NE 84th St Miami, FL 33879<br>
                                                                kyle.parker@houzez.com</p>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1458843026242">
                                                        <div class="wpb_wrapper">
                                                            <p class="padding-top"><strong>Corporate Headquarters</strong><br>
                                                                1584&nbsp;Biscayne&nbsp;Boulevard<br>
                                                                Miami FL, 33176</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </div>
                    </div>
                </div>


            </div>

        </section>


    </div> <!--Start in header-->
@endsection
@section('style')
    <style>
        #map {
            height: 100%;
        }
    </style>
@endsection
@section('script')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA02OlYUIq5E2JtXf04UNyES_DIYLDWZDE&callback=initMap"></script>
@endsection