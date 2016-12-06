@extends('site.master')
@section('title'){!! $article->meta_custom_title?$article->meta_custom_title:$article->title !!}@endsection
@section('keywords'){!! $article->meta_keyword?$article->meta_keyword:'' !!}@endsection
@section('description'){!! $article->meta_description?$article->meta_description:'' !!}@endsection
@section('content')

    <script src="{{asset('assets/site/js/jssor.slider-22.0.3.min.js')}}"></script>

    <div id="section-body">
        <!--start compare panel-->
        <div id="compare-controller" class="compare-panel">
            <div class="compare-panel-header">
                <h4 class="title"> Compare Listings <span class="panel-btn-close pull-right"><i class="fa fa-times"></i></span></h4>
            </div>
            <div id="compare-properties-basket">
            </div>
        </div>
        <!--end compare panel-->
        <!--start detail top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-detail table-list">
                        <div class="header-left">
                            <ol class="breadcrumb">
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><i class="fa fa-home"></i></a></li>
                                <li><a href="{{ route('danhmuc',$article->category->slug) }}">{{$article->category->title}}</a></li>
                                <li class="active">{{$article->title}}</li>
                            </ol>
                            <h1>{{$article->title}}
                                <span class="label-wrap">
                                    <span class="label label-primary label-status-7"><a style="color: white" href="{{ route('danhmuc',$article->category->slug) }}">{{$article->category->title}}</a></span></span>
                            </h1>
                            <address class="property-address"><i class="fa fa-map-marker"></i> {{$article->location}}</address>
                        </div>
                        <div class="header-right">
                            <ul class="actions">
                                <li class="share-btn">
                                    <div class="fb-share-button" data-href="{{route('view',$article->slug.'-'.$article->id)}}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                        <a class="fb-xfbml-parse-ignore" target="_blank" href="{{route('view',$article->slug.'-'.$article->id)}}">Chiasẻ</a></div>
                                </li>
                            </ul>
                            <span class="item-price">{{$article->money}}</span></div>
                    </div>
                    <div class="detail-media">
                        <div class="tab-content">
                            <script type="text/javascript">
                                jssor_1_slider_init = function () {

                                    var jssor_1_options = {
                                        $AutoPlay: true,
                                        $ArrowNavigatorOptions: {
                                            $Class: $JssorArrowNavigator$
                                        },
                                        $ThumbnailNavigatorOptions: {
                                            $Class: $JssorThumbnailNavigator$,
                                            $Cols: 4,
                                            $SpacingX: 4,
                                            $SpacingY: 4,
                                            $Orientation: 2,
                                            $Align: 0
                                        }
                                    };

                                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                    /*responsive code begin*/
                                    /*you can remove responsive code if you don't want the slider scales while window resizing*/
                                    function ScaleSlider() {
                                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                                        if (refSize) {
                                            refSize = Math.min(refSize, 1200);
                                            jssor_1_slider.$ScaleWidth(refSize);
                                        }
                                        else {
                                            window.setTimeout(ScaleSlider, 500);
                                        }
                                    }

                                    ScaleSlider();
                                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                    /*responsive code end*/
                                };
                            </script>
                            <style>
                                /* jssor slider arrow navigator skin 02 css */
                                /*
                                .jssora02l                  (normal)
                                .jssora02r                  (normal)
                                .jssora02l:hover            (normal mouseover)
                                .jssora02r:hover            (normal mouseover)
                                .jssora02l.jssora02ldn      (mousedown)
                                .jssora02r.jssora02rdn      (mousedown)
                                .jssora02l.jssora02lds      (disabled)
                                .jssora02r.jssora02rds      (disabled)
                                */
                                .jssora02l, .jssora02r {
                                    display: block;
                                    position: absolute;
                                    /* size of arrow element */
                                    width: 55px;
                                    height: 55px;
                                    cursor: pointer;
                                    background: url('/assets/img/a02.png') no-repeat;
                                    overflow: hidden;
                                }

                                .jssora02l {
                                    background-position: -3px -33px;
                                }

                                .jssora02r {
                                    background-position: -63px -33px;
                                }

                                .jssora02l:hover {
                                    background-position: -123px -33px;
                                }

                                .jssora02r:hover {
                                    background-position: -183px -33px;
                                }

                                .jssora02l.jssora02ldn {
                                    background-position: -3px -33px;
                                }

                                .jssora02r.jssora02rdn {
                                    background-position: -63px -33px;
                                }

                                .jssora02l.jssora02lds {
                                    background-position: -3px -33px;
                                    opacity: .3;
                                    pointer-events: none;
                                }

                                .jssora02r.jssora02rds {
                                    background-position: -63px -33px;
                                    opacity: .3;
                                    pointer-events: none;
                                }

                                /* jssor slider thumbnail navigator skin 11 css *//*.jssort11 .p            (normal).jssort11 .p:hover      (normal mouseover).jssort11 .pav          (active).jssort11 .pav:hover    (active mouseover).jssort11 .pdn          (mousedown)*/
                                .jssort11 .p {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 200px;
                                    height: 69px;
                                    background: #181818;
                                }

                                .jssort11 .tp {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    border: none;
                                }

                                .jssort11 .i, .jssort11 .pav:hover .i {
                                    position: absolute;
                                    top: 3px;
                                    left: 3px;
                                    width: 60px;
                                    height: 30px;
                                    border: white 1px dashed;
                                }

                                * html .jssort11 .i {
                                    width /**/: 62px;
                                    height /**/: 32px;
                                }

                                .jssort11 .pav .i {
                                    border: white 1px solid;
                                }

                                .jssort11 .t, .jssort11 .pav:hover .t {
                                    position: absolute;
                                    top: 3px;
                                    left: 68px;
                                    width: 129px;
                                    height: 32px;
                                    line-height: 32px;
                                    text-align: center;
                                    color: #fc9835;
                                    font-size: 13px;
                                    font-weight: 700;
                                }

                                .jssort11 .pav .t, .jssort11 .p:hover .t {
                                    color: #fff;
                                }

                                .jssort11 .c, .jssort11 .pav:hover .c {
                                    position: absolute;
                                    top: 38px;
                                    left: 3px;
                                    width: 194px;
                                    height: 32px;
                                    line-height: 32px;
                                    color: #fff;
                                    font-size: 11px;
                                    font-weight: 400;
                                    overflow: hidden;
                                }

                                .jssort11 .pav .c, .jssort11 .p:hover .c {
                                    color: #fc9835;
                                }

                                .jssort11 .t, .jssort11 .c {
                                    transition: color 2s;
                                    -moz-transition: color 2s;
                                    -webkit-transition: color 2s;
                                    -o-transition: color 2s;
                                }

                                .jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {
                                    transition: none;
                                    -moz-transition: none;
                                    -webkit-transition: none;
                                    -o-transition: none;
                                }

                                .jssort11 .p:hover, .jssort11 .pav:hover {
                                    background: #333;
                                }

                                .jssort11 .pav, .jssort11 .p.pdn {
                                    background: #462300;
                                }
                            </style>
                            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 810px; height: 3h00px; overflow: hidden; visibility: hidden; background-color: #000000;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                </div>
                                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                                    @if($article->picture_1)
                                        <div data-p="112.50">
                                            <img data-u="image" src="{{show_content_picture($article->picture_1)}}"/>
                                        </div>
                                    @endif
                                    @if($article->picture_2)
                                        <div data-p="112.50">
                                            <img data-u="image" src="{{show_content_picture($article->picture_2)}}"/>
                                        </div>
                                    @endif
                                    @if($article->picture_3)
                                        <div data-p="112.50">
                                            <img data-u="image" src="{{show_content_picture($article->picture_3)}}"/>
                                        </div>
                                    @endif
                                    @if($article->picture_4)
                                        <div data-p="112.50">
                                            <img data-u="image" src="{{show_content_picture($article->picture_4)}}"/>
                                        </div>
                                    @endif
                                    @if($article->picture_5)
                                        <div data-p="112.50">
                                            <img data-u="image" src="{{show_content_picture($article->picture_5)}}"/>
                                        </div>
                                    @endif
                                </div>
                                <!-- Thumbnail Navigator -->
                                <div data-u="thumbnavigator" class="jssort11"
                                     style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;"
                                     data-autocenter="2">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div data-u="slides" style="cursor: default;">
                                        <div data-u="prototype" class="p">
                                            <div data-u="thumbnailtemplate" class="tp"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                                <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
                            </div>
                            <script type="text/javascript">jssor_1_slider_init();</script>
                            <!-- #endregion Jssor Slider End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end detail top-->
        <!--start detail content-->
        <section class="section-detail-content" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                        <div class="detail-bar">
                            <div id="description" class="property-description detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Thông tin bất động sản</h2>
                                </div>
                                {!! $article->content !!}
                            </div>
                            <div id="address" class="detail-address detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Bản Đồ</h2>
                                    <div class="title-right">
                                        <a target="_blank" href="http://maps.google.com/?q=9400%20E%20Broadview%20Dr,%20Bay%20Harbor%20Islands,%20FL%2033154,%20Stati%20Uniti">Open on Google Maps <i class="fa fa-map-marker"></i></a>
                                    </div>
                                </div>
                                <div id="map" style="width:100%;height:500px"></div>

                                <script>
                                    function myMap() {
                                        var mapCanvas = document.getElementById("map");
                                        var mapOptions = {
                                            center: new google.maps.LatLng(51.5, -0.2),
                                            zoom: 20
                                        }
                                        var map = new google.maps.Map(mapCanvas, mapOptions);
                                    }
                                </script>
                            </div>
                            <div id="video" class="property-video detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Video</h2>
                                </div>
                                <div class="video-block">
                                    <video
                                            id="vid1"
                                            class="video-js vjs-default-skin"
                                            controls
                                            width="730" height="500"
                                            data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{$article->video}}"}] }'
                                    >
                                    </video>
                                </div>
                            </div>
                            <div class="property-similer">
                                <div class="detail-title">
                                    <h2 class="title-left">Bất động sảng liên quan</h2>
                                </div>
                                <div class="property-listing grid-view">
                                    <div class="row">
                                        @foreach($relatedPosts as $relatedPost)
                                            <div class="item-wrap ">
                                                <div class="property-item table-list">
                                                    <div class="table-cell">
                                                        <div class="figure-block">
                                                            <figure class="item-thumb">
                                                                {!! $relatedPost->category?'<span class="label-featured label label-success">'.$relatedPost->category->title.'</span>':'' !!}
                                                                <div class="price hide-on-list"><span class="item-price">{{$relatedPost->money}}</span><span class="item-sub-price"></span></div>
                                                                <a class="hover-effect" href="{{route('view',$relatedPost->slug.'-'.$relatedPost->id)}}">
                                                                    <img width="385" height="258" src="{{show_content_picture($relatedPost->picture_1)}}" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image"
                                                                         alt="{{$relatedPost->title}}"/> </a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="item-body table-cell">
                                                        <div class="body-left table-cell">
                                                            <div class="info-row">
                                                                <h2 class="property-title"><a href="{{route('view',$relatedPost->slug.'-'.$relatedPost->id)}}">{{$relatedPost->title}}</a></h2>
                                                                <address class="property-address">{{$relatedPost->location}}</address>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div id="houzez_properties_viewed-2" class="widget widget_houzez_properties_viewed">
                                <div class="widget-top"><h3 class="widget-title">Bình Luận</h3></div>
                                <div class="widget-body">
                                    <div class="fb-comments" data-width="100%" data-href="{{route('view',$article->slug.'-'.$article->id)}}" data-numposts="5"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar houzez_sticky" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; top: 60px; left: 929.5px;">
                            <aside id="sidebar" class="sidebar-white">

                                <div id="houzez_properties_viewed-2" class="widget widget_houzez_properties_viewed">
                                    <div class="widget-top"><h3 class="widget-title">Bất động sảng nổi bật</h3></div>
                                    <div class="widget-body">
                                        @foreach($tops as $top)
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="item-thumb">
                                                        <a class="hover-effect" href="{{route('view',$top->slug.'-'.$top->id)}}">
                                                            <img width="1170" height="786" alt="{{$top->title}}" src="{{show_content_picture($top->picture_1)}}" class="attachment-widget-prop size-widget-prop wp-post-image" alt="los-angeles-14"> </a>
                                                    </figure>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="media-heading"><a href="{{route('view',$top->slug.'-'.$top->id)}}">{{$top->title}}</a></h3>
                                                    <h4>{{$top->money}}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end detail content-->

    </div>
@endsection
@section('style')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/site/video.js/dist/video-js.min.css')}}"/>

    <style>
        #map {
            height: 100%;
        }
    </style>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA02OlYUIq5E2JtXf04UNyES_DIYLDWZDE&allback=myMap"></script>
    <script src="{{asset('assets/site/video.js/dist/video.min.js')}}"></script>
    <script src="{{asset('assets/site/js/Youtube.min.js')}}"></script>


@endsection