@extends('site.master')
@section('title','Mua bán bất động sản')
@section('keywords','Mua bán bất động sản')
@section('description','Mua bán bất động sản')
@section('content')
    <div class="container">
        <div class="row row-fluid">
            <div class="col-sm-12">
                @if($category->id)
                    <div class="col-sm-12">
                        <div class="header-detail table-list">
                            <div class="header-left">
                                <ol class="breadcrumb">
                                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><i class="fa fa-home"></i></a></li>
                                    <li><a href="{{ route('danhmuc',$category->slug) }}">{{$category->title}}</a></li>
                                </ol>
                                <h1>{{$category->title}}</h1>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div id="properties_module_section" class="houzez-module property-item-module">
                            <div id="properties_module_container">
                                <div id="module_properties" class="property-listing grid-view grid-view-3-col">
                                    @if(count($articles)>0)
                                        @foreach($articles as $item)
                                            <div class="item-wrap ">
                                                <div class="property-item table-list">
                                                    <div class="table-cell">
                                                        <div class="figure-block">
                                                            <figure class="item-thumb">
                                                                {!! $item->category?'<span class="label-featured label label-success">'.$item->category->title.'</span>':'' !!}
                                                                <div class="price hide-on-list"><span class="item-price">{{$item->money}}</span><span class="item-sub-price"></span></div>
                                                                <a class="hover-effect" href="{{route('view',$item->slug.'-'.$item->id)}}">
                                                                    <img width="385" height="258" src="{{show_content_picture($item->picture_1)}}" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image"
                                                                         alt="{{$item->title}}"/> </a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="item-body table-cell">
                                                        <div class="body-left table-cell">
                                                            <div class="info-row">
                                                                <h2 class="property-title"><a href="{{route('view',$item->slug.'-'.$item->id)}}">{{$item->title}}</a></h2>
                                                                <address class="property-address">{{$item->location}}</address>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{ $articles->links() }}
                                    @else
                                        <div class="text-center">
                                            <h3>Không tìm thấy dữ liệu</h3>
                                        </div>
                                    @endif
                                </div>
                                <!-- end container-content -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
