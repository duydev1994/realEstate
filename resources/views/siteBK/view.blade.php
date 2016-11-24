@extends('site.master')
@section('title'){!! $article->meta_custom_title?$article->meta_custom_title:$article->title !!}@endsection
@section('keywords'){!! $article->meta_keyword?$article->meta_keyword:'' !!}@endsection
@section('description'){!! $article->meta_description?$article->meta_description:'' !!}@endsection
@section('content')
    <div class="full-width page-header page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a>
                        <span class="sep">/</span>
                        <a href="{{ route('danhmuc',$article->category->slug) }}">{{$article->category->title}}</a>
                        <span class="sep">/</span>
                        <span class="current">{{$article->title}}</span>
                    </div>
                    {{--<h2 class="page-title"></h2>--}}
                    {{--<p class="single-post-meta">--}}
                    {{--<span><i class="fa fa-calendar"></i> {{$article->created_at}}</span>--}}
                    {{--<span class="sep">|</span>--}}
                    {{--<span><i class="fa fa-user"></i> Jay Jones </span>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="full-width page-wrap" style="background: #ffffff">

        <div class="container">
            <div class="col-md-9">
                <!-- tabs bottom -->
                <div class="dv-tabs">
                    <div class="dv-ct-tabs-vip">
                        <a class="a-title" title="{{$article->title}}">
                            {{$article->title}}
                        </a>
                    </div>
                </div>
                <div class=" tabs-below" style="border:2px solid #eee">
                    <div class="tab-content">
                        <div class="tab-pane active" id="images">

                            <ul class="pgwSlider">
                                <li><img src="{{show_content_picture($article->picture_1)}}"></li>
                                <li><img src="{{show_content_picture($article->picture_2)}}"></li>
                                <li><img src="{{show_content_picture($article->picture_3)}}"></li>
                                <li><img src="{{show_content_picture($article->picture_4)}}"></li>
                            </ul>

                        </div>
                        @if($article->video)
                            <div class="tab-pane" id="video">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/DiAPHAWgUqA" frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif
                        <div style="width: 100%;height: 480px" class="tab-pane" id="maps">
                            <div id="map-canvas" style="width: 100%; height: 480px;"></div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#images" data-toggle="tab">Hình Ảnh</a></li>
                        @if($article->video)
                            <li><a href="#video" data-toggle="tab">Video</a></li>
                        @endif
                        <li><a href="#maps" data-toggle="tab">Bản Đồ</a></li>
                    </ul>
                </div>
                <!-- /tabs -->

                <div class="row content item">
                    <div class="container" style="width: 100%">
                        {!! $article->content !!}
                    </div>
                </div>
                <div class="fb-comments" data-href="{{route('view',$article->slug.'-'.$article->id)}}" data-width="100%" data-numposts="5"></div>
            </div>
            <div class="col-md-3">
                <div class="row ">
                    <div class="right-navigation-box">
                        <div class="title">
                            <h2>Bất động Liên quan</h2>
                        </div>
                        <div>
                            <ul>
                                @foreach($tops as $item)
                                    <li><a href="{{route('view',$item->slug.'-'.$item->id)}}">{{$item->title}}(<span class="number">{{$item->acreage}}</span>)</a></li>
                                @endforeach
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="margin-top: 100px">
                <div class="row">
                    <div class="right-navigation-box">
                        <div class="title">
                            <h2>Bất động sảng nổi bật</h2>
                        </div>
                        <div>
                            <div class="">
                                <div class="item">
                                    <div class="item-header clearfix">
                                        <h3><a href="{{route('view',$relatedPost->slug.'-'.$relatedPost->id)}}">{{$relatedPost->title}}</a></h3>
                                        <span class="favorite"><i class="fa fa-eye"></i>{{$relatedPost->view_count}}</span>
                                    </div>
                                    <figure>
                                        <img src="{{show_content_picture($relatedPost->picture_1)}}" alt="" class="img-responsive">

                                        <div class="overlay">
                                            <a href="{{route('view',$relatedPost->slug.'-'.$relatedPost->id)}}" class="btn btn-detail">Xem</a>
                                        </div>
                                    </figure>
                                    <div class="item-detail">
                                        <div><span class="place"><i class="fa fa-map-marker"></i>{{$relatedPost->location}}</span></div>
                                        <div class="left">
                                            <span class="area">{{$relatedPost->acreage}}</span>
                                        </div>
                                        <div class="right">
                                            <span class="price"><i class="fa fa-money"></i>{{$relatedPost->money}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
@section('style')
    <style>
        .content {
            margin-top: 30px;
            padding: 10px;
            width: 100%;
        }

        .item {
            background: #eee !important;
        }
    </style>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="{{asset('assets/site/js/gmap.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.pgwSlider').pgwSlider();
        });
    </script>
@endsection