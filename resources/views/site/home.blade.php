@extends('site.master')
@section('title','Mua bán bất động sản')
@section('keywords','Mua bán bất động sản')
@section('description','Mua bán bất động sản')
@section('content')
    <div class="page-wrap">
        <!-- BLOG POSTS -->
        @if($category->id)
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a>
                            <span class="sep">/</span>
                            <span class="current">{{$category->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container blog-posts ">
            <div class="filter container-fluid">
                {!! Form::open(array('method' => 'get','url' => route('search'))) !!}
                <div class="col-md-12">
                    <div class="input-group">
                        <div class="input-group-btn">
                            {!! Form::select('search_category',get_categories()->pluck('title','id')->toArray(), $search?$search['search_category']:'', ['class' => 'form-control']) !!}
                        </div>
                        <input value="{{$search?$search['search_text']:''}}" name="search_text" required class="search form-control"/>
                        <span class="input-group-btn">
                    <button type="submit" class="btn"><i class="fa fa-search"></i>Tìm</button>
                        </span>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
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
