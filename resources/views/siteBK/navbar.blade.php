<header class="clearfix navbar  navbar-fixed-top" style="-webkit-box-shadow: 2px 7px 11px -6px rgba(13,12,13,0.7);
-moz-box-shadow: 2px 7px 11px -6px rgba(13,12,13,0.7);
box-shadow: 2px 7px 11px -6px rgba(13,12,13,0.7);">
    <!-- TOP -->
    <div class="container-fluid top-bar" style="margin-top: -30px;">
        <p class="text">
            <a><i class="fa fa-map-marker"></i>Phòng 2D8 Toà nhà JVPE, CVPM Quang Trung, Phường Tân Chánh Hiệp, Quận 12, Tp.HCM</a>
            <a href="tel:0933059191"><i class="fa fa-phone"></i>093 305 9191</a>
        </p>
        <p class="social">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-vimeo"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-skype"></i></a>
        </p>
    </div>
    <div class="logo">
        <a href="/"><img src="{{asset('assets/site/images/logo.png')}}" alt="NEWS">NEWS</a>
    </div>

    <nav class="navbar collapse" id="mobile-menu">

        <ul class="nav navbar-nav">
            @foreach ($categories as $category)
                @if($category->parent_id <= 0)
                    <li>
                        <a class="dropdown-button" href="{{ route('danhmuc',$category->slug) }}">{{ $category->title }}</a>
                    </li>
                @endif
            @endforeach
            <li>
                <a class="dropdown-button" href="{{ route('contact',$category->slug) }}">Giới thiệu</a>
            </li>
        </ul>
    </nav>


    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class=" col-md-push-3 col-md-6 filter">
        {!! Form::open(array('method' => 'get','url' => route('search'))) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-btn">
                    {!! Form::select('search_category',get_categories()->pluck('title','id')->toArray(),'', ['class' => 'form-control']) !!}
                </div>
                <input name="search_text" required class="search form-control"/>
                <span class="input-group-btn">
                    <button type="submit" class="btn"><i class="fa fa-search"></i>Tìm</button>
                        </span>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

</header>