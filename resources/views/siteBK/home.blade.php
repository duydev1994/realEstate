@extends('site.master')
@section('title','Mua bán bất động sản')
@section('keywords','Mua bán bất động sản')
@section('description','Mua bán bất động sản')
@section('content')
    <div class="page-wrap">
        <div class="container blog-posts ">

            <!-- BLOG POSTS -->
            @if($category->id)
                123123
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
                </div>
            @endif

            @if(count($articles)>0)
                <div class="row">
                    @foreach($articles as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="{{route('view',$item->slug.'-'.$item->id)}}">{{$item->title}}</a></h3>
                                    <span class="favorite"><i class="fa fa-eye"></i>{{$item->view_count}}</span>
                                </div>
                                <figure>
                                    <img src="{{show_content_picture($item->picture_1)}}" alt="" class="img-responsive">
                                    {!! $item->category?'<span class="label sale">'.$item->category->title.'</span>':'' !!}
                                    <div class="overlay">
                                        <a href="{{route('view',$item->slug.'-'.$item->id)}}" class="btn btn-detail">Xem</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div><span class="place"><i class="fa fa-map-marker"></i>{{$item->location}}</span></div>
                                    <div class="left">
                                        <span class="area">{{$item->acreage}}</span>
                                    </div>
                                    <div class="right">
                                        <span class="price"><i class="fa fa-money"></i>{{$item->money}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $articles->links('vendor.pagination.custom') }}
            @else
                <div class="text-center">
                    <h3>Không tìm thấy dữ liệu</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
