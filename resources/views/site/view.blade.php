@extends('site.master')
@section('title'){!! $article->meta_custom_title?$article->meta_custom_title:$article->title !!}@endsection
@section('keywords'){!! $article->meta_keyword?$article->meta_keyword:'' !!}@endsection
@section('description'){!! $article->meta_description?$article->meta_description:'' !!}@endsection
@section('content')
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
        <section class="detail-top detail-top-grid">
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
                                <div id="gallery" class="tab-pane fade in active" style="background-image: url({{$article->picture_1}})">
                                    <a href="#" class="popup-trigger">
                                    </a>
                                </div>
                            </div>
                            <div class="media-tabs">
                                <ul class="media-tabs-list">
                                    <li class="popup-trigger" data-placement="bottom" data-toggle="tooltip" data-original-title="View Photos">
                                        <a href="#gallery" data-toggle="tab">
                                            <i class="fa fa-camera"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    <!--end detail top-->
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
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    <script src="{{asset('assets/site/video.js/dist/video.min.js')}}"></script>
    <script src="{{asset('assets/site/js/Youtube.min.js')}}"></script>


@endsection