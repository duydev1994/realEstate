<header id="header-section" data-sticky="0" class="houzez-header-main header-section not-splash-header nav-left  hidden-sm hidden-xs">
    <div class="container">
        <div class="header-left">
            <div class="logo logo-desktop">
                <a href="/">
                    <img style="height: 30px" src="/logo.png" alt="logo">
                </a>
            </div>
            <nav class="navi main-nav">
                <ul id="main-nav" class="">
                    @foreach ($categories as $category)
                        @if($category->parent_id <= 0)
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-955"><a class="dropdown-button" href="{{ route('danhmuc',$category->slug) }}">{{ $category->title }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="advanced-search advance-search-header houzez-adv-price-range " data-sticky='1'>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(array('method' => 'get','url' => route('search'))) !!}
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group no-margin">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                <input type="text" id="keyword" class="form-control" value="" name="search_text" placeholder="Vui lòng nhập từ khóa cần tìm?">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group no-margin location-select">
                                    {!! Form::select('search_category',get_categories()->pluck('title','id')->toArray(),'', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <button type="submit" class="btn btn-orange btn-block houzez-theme-button">Tìm</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
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
            <a href="/">
                <img src="/logo.png" alt="logo">
            </a></div>
    </div>
</div>

<div class="advanced-search-mobile houzez-adv-price-range" data-sticky='0'>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(array('method' => 'get','url' => route('search'))) !!}
                <div class="single-search-wrap">
                    <div class="single-search-inner single-search">
                        <input type="text" class="form-control" value="" name="search_text" placeholder="Vui lòng nhập từ khóa cần tìm?">
                    </div>
                    <div class="single-search-inner single-seach-btn">
                        <button class="table-cell text-right" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="advance-fields">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group">
                                {!! Form::select('search_category',get_categories()->pluck('title','id')->toArray(),'', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-orange btn-block houzez-theme-button"><i class="fa fa-search pull-left"></i> Search</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

