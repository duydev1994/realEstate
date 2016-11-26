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
                                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="../../index.html"><i class="fa fa-home"></i></a></li>
                                    <li><a href="../../property-type/single-family-home/index.html">Single Family Home</a></li>
                                    <li class="active">Luxury home for sale</li>
                                </ol>
                                <h1>Luxury home for sale
                                    <span class="label-wrap">
                                    <span class="label label-primary label-status-7">For Sale</span>
                                            </span>

                                </h1>
                                <address class="property-address">9400 E Broadview Dr, Bay Harbor Islands, FL 33154, Stati Uniti</address>
                            </div>
                            <div class="header-right">
                                <ul class="actions">
                                    <li class="share-btn">

                                        <div class="share_tooltip tooltip_left fade">
                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/intent/tweet?text=Luxury+home+for+sale&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;via=Houzez"
                                               onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                            <a href="../../../pinterest.com/pin/create/button/index22dd.html?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;media=http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-4-1024x688.jpg"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;title=Luxury+home+for+sale&amp;source=http%3A%2F%2Fhouzez02.favethemes.com%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                            <a href="http://plus.google.com/share?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                            <a href="mailto:example.com?subject=Luxury+home+for+sale&amp;body=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"><i class="fa fa-envelope"></i></a>
                                        </div>
                                        <span title="" data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span></li>
                                    <li class="fvrt-btn">
                                        <span><span class="add_fav" data-toggle="tooltip" data-original-title="Favorite" data-propid="146"><i class="fa fa-heart-o"></i></span></span>
                                    </li>
                                    <li class="print-btn">
                                        <span><i id="houzez-print" class="fa fa-print" data-toggle="tooltip" data-original-title="Print" data-propid="146"></i></span>
                                    </li>
                                </ul>
                                <span class="item-price">$459,000</span><span class="item-sub-price">$2,560/sq ft</span></div>
                        </div>
                        <div class="detail-media">
                            <div class="tab-content">
                                <div id="gallery" class="tab-pane fade in active" style="background-image: url(http://www.planwallpaper.com/static/images/Seamless-Polygon-Backgrounds-Vol2-full_Kfb2t3Q.jpg)">
                                    <a href="#" class="popup-trigger">
                                    </a>
                                </div>


                                <div id="street-map" class="tab-pane fade " style="min-height: 600px;"></div>

                            </div>
                            <div class="media-tabs">
                                <ul class="media-tabs-list">
                                    <li class="popup-trigger" data-placement="bottom" data-toggle="tooltip" data-original-title="View Photos">
                                        <a href="#gallery" data-toggle="tab">
                                            <i class="fa fa-camera"></i>
                                        </a>
                                    </li>


                                </ul>
                                <ul class="actions">
                                    <li class="share-btn">

                                        <div class="share_tooltip tooltip_left fade">
                                            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/intent/tweet?text=Luxury+home+for+sale&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;via=Houzez"
                                               onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                            <a href="../../../pinterest.com/pin/create/button/index22dd.html?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;media=http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-4-1024x688.jpg"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F&amp;title=Luxury+home+for+sale&amp;source=http%3A%2F%2Fhouzez02.favethemes.com%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                            <a href="http://plus.google.com/share?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"
                                               onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                            <a href="mailto:example.com?subject=Luxury+home+for+sale&amp;body=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Fluxury-home-for-sale%2F"><i class="fa fa-envelope"></i></a>
                                        </div>
                                        <span title="" data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span></li>
                                    <li>
                                        <span><span class="add_fav" data-toggle="tooltip" data-original-title="Favorite" data-propid="146"><i class="fa fa-heart-o"></i></span></span>
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
                                    <h2 class="title-left">Description</h2>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                    accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam
                                    nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>

                            </div>
                            <div id="address" class="detail-address detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Address</h2>
                                    <div class="title-right">
                                        <a target="_blank" href="http://maps.google.com/?q=9400%20E%20Broadview%20Dr,%20Bay%20Harbor%20Islands,%20FL%2033154,%20Stati%20Uniti">Open on Google Maps <i class="fa fa-map-marker"></i></a>
                                    </div>
                                </div>
                                <ul class="list-three-col">
                                    <li class="detail-address"><strong>Address:</strong> 9400 E Broadview Dr</li>
                                    <li class="detail-city"><strong>City:</strong> Miami</li>
                                    <li class="detail-state"><strong>State/county:</strong> Florida</li>
                                    <li class="detail-zip"><strong>Zip/Postal Code:</strong> 33140</li>
                                    <li class="detail-country"><strong>Country:</strong> United States</li>
                                </ul>
                            </div>
                            <div id="detail" class="detail-list detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Detail</h2>

                                    <div class="title-right">
                                        <p>Updated on July 27, 2016 at 9:48 pm </p>
                                    </div>

                                </div>
                                <div class="alert alert-info">
                                    <ul class="list-three-col">
                                        <li><strong>Property ID:</strong> HZ01</li>
                                        <li><strong>Price:</strong> $459,000</li>
                                        <li><strong>Property Size:</strong> 2340 Sq Ft</li>
                                        <li><strong>Bedrooms:</strong> 3</li>
                                        <li><strong>Bathrooms:</strong> 2</li>
                                        <li><strong>Garage:</strong> 1</li>
                                        <li><strong>Garage Size:</strong> 200 SqFt</li>
                                        <li><strong>Year Built:</strong> 2016-01-09</li>
                                    </ul>
                                </div>

                                <div class="detail-title-inner">
                                    <h4 class="title-inner">Additional details</h4>
                                </div>
                                <ul class="list-three-col">
                                    <li><strong>Deposit:</strong> 20%</li>
                                    <li><strong>Pool Size:</strong> 300 Sqft</li>
                                    <li><strong>Last remodel year:</strong> 1987</li>
                                    <li><strong>Amenities:</strong> Clubhouse</li>
                                    <li><strong>Additional Rooms::</strong> Guest Bath</li>
                                    <li><strong>Equipment:</strong> Grill - Gas</li>
                                </ul>
                            </div>
                            <div id="features" class="detail-features detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Features</h2>
                                </div>
                                <ul class="list-three-col list-features">
                                    <li><a href="../../feature/air-conditioning/index.html"><i class="fa fa-check"></i>Air Conditioning</a></li>
                                    <li><a href="../../feature/barbeque/index.html"><i class="fa fa-check"></i>Barbeque</a></li>
                                    <li><a href="../../feature/dryer/index.html"><i class="fa fa-check"></i>Dryer</a></li>
                                    <li><a href="../../feature/gym/index.html"><i class="fa fa-check"></i>Gym</a></li>
                                    <li><a href="../../feature/laundry/index.html"><i class="fa fa-check"></i>Laundry</a></li>
                                    <li><a href="../../feature/lawn/index.html"><i class="fa fa-check"></i>Lawn</a></li>
                                    <li><a href="../../feature/microwave/index.html"><i class="fa fa-check"></i>Microwave</a></li>
                                    <li><a href="../../feature/outdoor-shower/index.html"><i class="fa fa-check"></i>Outdoor Shower</a></li>
                                    <li><a href="../../feature/refrigerator/index.html"><i class="fa fa-check"></i>Refrigerator</a></li>
                                    <li><a href="../../feature/sauna/index.html"><i class="fa fa-check"></i>Sauna</a></li>
                                    <li><a href="../../feature/swimming-pool/index.html"><i class="fa fa-check"></i>Swimming Pool</a></li>
                                    <li><a href="../../feature/tv-cable/index.html"><i class="fa fa-check"></i>TV Cable</a></li>
                                    <li><a href="../../feature/washer/index.html"><i class="fa fa-check"></i>Washer</a></li>
                                    <li><a href="../../feature/wifi/index.html"><i class="fa fa-check"></i>WiFi</a></li>
                                    <li><a href="../../feature/window-coverings/index.html"><i class="fa fa-check"></i>Window Coverings</a></li>
                                </ul>
                            </div>

                            <div id="floor_plan" class="property-plans detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Floor plans</h2>
                                </div>
                                <div class="accord-block">

                                    <div class="accord-tab">
                                        <h3>First Floor</h3>
                                        <ul>
                                            <li>Size: <strong>1267 </strong></li>

                                            <li>Rooms: <strong>670 Sqft</strong></li>

                                            <li>Baths: <strong>530 Sqft</strong></li>

                                            <li>Price: <strong>$1</strong></li>
                                        </ul>
                                        <div class="expand-icon"></div>
                                    </div>
                                    <div class="accord-content" style="display: none">
                                        <img src="../../../sandbox.favethemes.com/houzez/wp-content/uploads/2016/01/plan-1.jpg" alt="img" width="400" height="436">

                                        <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                            exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="accord-tab">
                                        <h3>Second Floor</h3>
                                        <ul>
                                            <li>Size: <strong>1345 </strong></li>

                                            <li>Rooms: <strong>543 Sqft</strong></li>

                                            <li>Baths: <strong>238 Sqft</strong></li>

                                            <li>Price: <strong>$1</strong></li>
                                        </ul>
                                        <div class="expand-icon"></div>
                                    </div>
                                    <div class="accord-content" style="display: none">
                                        <img src="../../../sandbox.favethemes.com/houzez/wp-content/uploads/2016/01/plan-2.jpg" alt="img" width="400" height="436">

                                        <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                            exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                </div>

                            </div>
                            <div id="video" class="property-video detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Video</h2>
                                </div>
                                <div class="video-block">
                                    <a data-fancy="property_video" href="https://www.youtube.com/watch?v=-NInBEdSvp8">
                                        <span class="play-icon"><img src="../../wp-content/themes/houzez/images/video-play-icon.png" alt="" width="70" height="50"></span>
                                        <img width="810" height="430" src="../../wp-content/uploads/2016/01/villa-1-810x430.jpg" class="attachment-houzez-property-detail-gallery size-houzez-property-detail-gallery" alt="villa-1"> </a>
                                </div>
                            </div>
                            <div id="walkscore" class="detail-features detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">WalkScore</h2>
                                </div>
                                <div class="walkscore-block">
                                    <div class="walkscore_details"><img src="../../../cdn.walk.sc/images/api-logo.png" alt="walkscore"><span>69 / Somewhat Walkable <a
                                                    href="https://www.walkscore.com/score/25.885116-.dash.80.13492099999996/lat=25.885116/lng=-80.13492099999996/?utm_source=houzez.app%20&amp;utm_medium=ws_api&amp;utm_campaign=ws_api" target="_blank">more details here</a> </span>
                                    </div>
                                </div>

                            </div>
                            <div id="yelp_nearby" class="yelp-category detail-block target-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left"> What's Nearby? </h2>
                                    <div class="title-right">
                                        powered by <img src="../../wp-content/themes/houzez/images/yelp-logo.png" alt="yelp" class="v-align-bottom">
                                    </div>
                                </div>
                                <div class="yelp-cat-block">
                                    <h4 class="cat-title"><span class="yelp-cat-icon"><i class="fa fa-graduation-cap"></i></span> Education </h4>
                                    <ul class="yelp-cat-list">
                                        <li>
                                            <div class="cat-list-left"> Smarty Pants Tutoring <span class="time-review"> (12.96 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Smarty Pants Tutoring"> <span class="time-review"> 5 reviews </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Powerful Minds <span class="time-review"> (15.38 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Powerful Minds"> <span class="time-review"> 3 reviews </span></div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Florida International University <span class="time-review"> (11.33 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media4.fl.yelpcdn.com/assets/2/www/img/c2f3dd9799a5/ico/stars/v1/stars_4.png" alt="Florida International University"> <span
                                                        class="time-review"> 12 reviews </span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yelp-cat-block">
                                    <h4 class="cat-title"><span class="yelp-cat-icon"><i class="fa fa-shopping-basket"></i></span> Food </h4>
                                    <ul class="yelp-cat-list">
                                        <li>
                                            <div class="cat-list-left"> Barbacoa <span class="time-review"> (0.94 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media2.fl.yelpcdn.com/assets/2/www/img/99493c12711e/ico/stars/v1/stars_4_half.png" alt="Barbacoa"> <span class="time-review"> 13 reviews </span></div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Top Notch <span class="time-review"> (0.95 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Top Notch"> <span class="time-review"> 39 reviews </span></div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Josh's Delicatessen &amp; Appetizing <span class="time-review"> (0.94 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media4.fl.yelpcdn.com/assets/2/www/img/c2f3dd9799a5/ico/stars/v1/stars_4.png" alt="Josh's Delicatessen &amp; Appetizing"> <span class="time-review"> 204 reviews </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yelp-cat-block">
                                    <h4 class="cat-title"><span class="yelp-cat-icon"><i class="fa fa-medkit"></i></span> Health &amp; Medical </h4>
                                    <ul class="yelp-cat-list">
                                        <li>
                                            <div class="cat-list-left"> Chakra Balance with Reiki <span class="time-review"> (9.33 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Chakra Balance with Reiki"> <span class="time-review"> 15 reviews </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Massage Green Spa of West Kendall <span class="time-review"> (12.67 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media4.fl.yelpcdn.com/assets/2/www/img/c2f3dd9799a5/ico/stars/v1/stars_4.png" alt="Massage Green Spa of West Kendall"> <span
                                                        class="time-review"> 25 reviews </span></div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> The Gathering Place <span class="time-review"> (10.25 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media2.fl.yelpcdn.com/assets/2/www/img/99493c12711e/ico/stars/v1/stars_4_half.png" alt="The Gathering Place"> <span class="time-review"> 21 reviews </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="yelp-cat-block">
                                    <h4 class="cat-title"><span class="yelp-cat-icon"><i class="fa fa-building-o"></i></span> Real Estate </h4>
                                    <ul class="yelp-cat-list">
                                        <li>
                                            <div class="cat-list-left"> Damian Gonzalez - Florida Capital Realty <span class="time-review"> (6.51 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Damian Gonzalez - Florida Capital Realty"> <span class="time-review"> 1 reviews </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Trident Real Estate <span class="time-review"> (6.04 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/f1def11e4e79/ico/stars/v1/stars_5.png" alt="Trident Real Estate"> <span class="time-review"> 2 reviews </span></div>
                                        </li>
                                        <li>
                                            <div class="cat-list-left"> Allied Building Inspection Services <span class="time-review"> (9.95 mi) </span></div>
                                            <div class="cat-list-right"><img src="../../../s3-media1.fl.yelpcdn.com/assets/2/www/img/5ef3eb3cb162/ico/stars/v1/stars_3_half.png" alt="Allied Building Inspection Services"> <span class="time-review"> 5 reviews </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="stats" class="detail-features detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Page Views</h2>
                                </div>
                                <div class="stats-block">
                                    <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                    <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                    <canvas id="myChart" width="730" height="365" style="display: block; width: 730px; height: 365px;"></canvas>
                                    <div id="chartjs-tooltip"></div>
                                </div>

                            </div>
                            <div id="agent_bottom" class="detail-contact detail-block target-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Contact info</h2>
                                    <div class="title-right"><strong><a href="../../agent/samuel-palmer/index.html">View my listing</a></strong></div>
                                </div>
                                <div class="media agent-media">
                                    <div class="media-left">
                                        <a href="../../agent/samuel-palmer/index.html">
                                            <img src="../../wp-content/uploads/2016/02/agent-3-150x150.jpg" alt="Samuel Palmer" width="75" height="75">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <dl>
                                            <dt>CONTACT AGENT</dt>
                                            <dd><i class="fa fa-user"></i> Samuel Palmer</dd>
                                            <dd>
                                                <span><i class="fa fa-phone"></i> 987 456 7589</span>

                                                <span><i class="fa fa-mobile"></i> 987 654 1230</span>

                                                <span><a href="skype:#?call"><i class="fa fa-skype"></i>  #</a></span>

                                            </dd>
                                            <dd>
                                                <span><a class="btn-facebook" target="_blank" href="#"><i class="fa fa-facebook-square"></i> <span>Facebook</span></a></span>

                                                <span><a class="btn-twitter" target="_blank" href="#"><i class="fa fa-twitter-square"></i> <span>Twitter</span></a></span>

                                                <span><a class="btn-linkedin" target="_blank" href="#"><i class="fa fa-linkedin-square"></i> <span>Linkedin</span></a></span>

                                                <span><a class="btn-google-plus" target="_blank" href="#"><i class="fa fa-google-plus-square"></i> <span>Google Plus</span></a></span>

                                                <span><a class="btn-youtube" target="_blank" href="#"><i class="fa fa-youtube-square"></i> <span>Youtube</span></a></span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="detail-title-inner">
                                    <h4 class="title-inner">Inquire about this property</h4>
                                </div>
                                <form method="post" action="#">
                                    <input type="hidden" name="target_email" value="samuel@houzez.com">
                                    <input type="hidden" name="agent_contact_form_ajax" value="10d2c8d6fd">
                                    <input type="hidden" name="property_permalink" value="index.html">
                                    <input type="hidden" name="property_title" value="Luxury home for sale">
                                    <input type="hidden" name="action" value="houzez_agent_send_message">

                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" name="name" placeholder="Your Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" name="phone" placeholder="Phone" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" name="email" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5" placeholder="Message">Hello, I'm interested in [Luxury home for sale]</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="agent_contact_form btn btn-orange">Request info</button>
                                    <div class="form_messages"></div>
                                </form>

                            </div>


                            <div class="property-similer">
                                <div class="detail-title">
                                    <h2 class="title-left">Similar Properties</h2>
                                </div>

                                <div class="property-listing grid-view">
                                    <div class="row">


                                        <div id="ID-144" class="item-wrap ">
                                            <div class="property-item table-list">
                                                <div class="table-cell">
                                                    <div class="figure-block">
                                                        <figure class="item-thumb">


                                                            <div class="label-wrap label-right hide-on-list">
                                                                <span class="label-status label-status-7 label label-default">For Sale</span>

                                                            </div>

                                                            <div class="price hide-on-list"><span class="item-price">$890,000</span><span class="item-sub-price">$3,690/sq ft</span></div>
                                                            <a class="hover-effect" href="../amazing-home-for-family/index.html">
                                                                <img width="385" height="258" src="../../wp-content/uploads/2016/02/house-3-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image"
                                                                     alt="house-3"
                                                                     srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-350x235.jpg 350w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3.jpg 1170w"
                                                                     sizes="(max-width: 385px) 100vw, 385px"> </a>
                                                            <ul class="actions">

                                                                <li>
        <span data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
            <span class="add_fav" data-toggle="tooltip" data-original-title="Favorite" data-propid="144"><i class="fa fa-heart-o"></i></span>        </span>
                                                                </li>


                                                                <div class="share_tooltip fade">
                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                                                    <a href="https://twitter.com/intent/tweet?text=Amazing+home+for+family&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F&amp;via=Houzez"
                                                                       onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i
                                                                                class="fa fa-twitter"></i></a>

                                                                    <a href="../../../pinterest.com/pin/create/button/index55bf.html?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F&amp;media=http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-3-1024x688.jpg"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F&amp;title=Amazing+home+for+family&amp;source=http%3A%2F%2Fhouzez02.favethemes.com%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="mailto:example.com?subject=Amazing+home+for+family&amp;body=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Famazing-home-for-family%2F"><i class="fa fa-envelope"></i></a>
                                                                </div>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                <li>
        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(7) Photos">
            <i class="fa fa-camera"></i>
        </span>
                                                                </li>
                                                                <li>
        <span id="compare-link-144" class="compare-property" data-propid="144" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
            <i class="fa fa-plus"></i>
        </span>
                                                                </li>
                                                            </ul>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item-body table-cell">

                                                    <div class="body-left table-cell">
                                                        <div class="info-row">
                                                            <div class="label-wrap hide-on-grid">
                                                                <span class="label-status label-status-7 label label-default">For Sale</span>

                                                            </div>
                                                            <h2 class="property-title"><a href="../amazing-home-for-family/index.html">Amazing home for family</a></h2>
                                                            <address class="property-address">1001 91st St, Bay Harbor Islands, FL 33154, Stati Uniti</address>
                                                        </div>
                                                        <div class="info-row amenities hide-on-grid">
                                                            <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 2100</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                        <div class="info-row date hide-on-grid">
                                                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="../../agent/michelle-ramirez/index.html">Michelle Ramirez</a></p>
                                                            <p><i class="fa fa-calendar"></i>10 months ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="body-right table-cell hidden-gird-cell">

                                                        <div class="info-row price"><span class="item-price">$890,000</span><span class="item-sub-price">$3,690/sq ft</span></div>

                                                        <div class="info-row phone text-right">
                                                            <a href="../amazing-home-for-family/index.html" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="table-list full-width hide-on-list">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 2100</span></p>
                                                                <p>Single Family Home</p>

                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="../amazing-home-for-family/index.html" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="../../agent/michelle-ramirez/index.html">Michelle Ramirez</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p class="prop-date"><i class="fa fa-calendar"></i>10 months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ID-137" class="item-wrap ">
                                            <div class="property-item table-list">
                                                <div class="table-cell">
                                                    <div class="figure-block">
                                                        <figure class="item-thumb">


                                                            <div class="label-wrap label-right hide-on-list">
                                                                <span class="label-status label-status-7 label label-default">For Sale</span>

                                                            </div>

                                                            <div class="price hide-on-list"><span class="item-price">$758,000</span><span class="item-sub-price">$3,690/sq ft</span></div>
                                                            <a class="hover-effect" href="../family-home-for-sale/index.html">
                                                                <img width="385" height="258" src="../../wp-content/uploads/2016/02/house-2-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image"
                                                                     alt="house-2"
                                                                     srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-350x235.jpg 350w, http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2.jpg 1170w"
                                                                     sizes="(max-width: 385px) 100vw, 385px"> </a>
                                                            <ul class="actions">

                                                                <li>
        <span data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
            <span class="add_fav" data-toggle="tooltip" data-original-title="Favorite" data-propid="137"><i class="fa fa-heart-o"></i></span>        </span>
                                                                </li>


                                                                <div class="share_tooltip fade">
                                                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                                                    <a href="https://twitter.com/intent/tweet?text=Family+home+for+sale&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F&amp;via=Houzez"
                                                                       onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i
                                                                                class="fa fa-twitter"></i></a>

                                                                    <a href="../../../pinterest.com/pin/create/button/indexa4a2.html?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F&amp;media=http://houzez02.favethemes.com/wp-content/uploads/2016/02/house-2-1024x688.jpg"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F&amp;title=Family+home+for+sale&amp;source=http%3A%2F%2Fhouzez02.favethemes.com%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                                                    <a href="http://plus.google.com/share?url=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F"
                                                                       onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="mailto:example.com?subject=Family+home+for+sale&amp;body=http%3A%2F%2Fhouzez02.favethemes.com%2Fproperty%2Ffamily-home-for-sale%2F"><i class="fa fa-envelope"></i></a>
                                                                </div>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                <li>
        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(7) Photos">
            <i class="fa fa-camera"></i>
        </span>
                                                                </li>
                                                                <li>
        <span id="compare-link-137" class="compare-property" data-propid="137" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
            <i class="fa fa-plus"></i>
        </span>
                                                                </li>
                                                            </ul>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item-body table-cell">

                                                    <div class="body-left table-cell">
                                                        <div class="info-row">
                                                            <div class="label-wrap hide-on-grid">
                                                                <span class="label-status label-status-7 label label-default">For Sale</span>

                                                            </div>
                                                            <h2 class="property-title"><a href="../family-home-for-sale/index.html">Family home for sale</a></h2>
                                                            <address class="property-address">408 91st St, Surfside, FL 33154, Stati Uniti</address>
                                                        </div>
                                                        <div class="info-row amenities hide-on-grid">
                                                            <p><span>Beds: 3</span><span>Baths: 2</span><span>Sq Ft: 1569</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                        <div class="info-row date hide-on-grid">
                                                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="../../agent/samuel-palmer/index.html">Samuel Palmer</a></p>
                                                            <p><i class="fa fa-calendar"></i>10 months ago</p>
                                                        </div>
                                                    </div>
                                                    <div class="body-right table-cell hidden-gird-cell">

                                                        <div class="info-row price"><span class="item-price">$758,000</span><span class="item-sub-price">$3,690/sq ft</span></div>

                                                        <div class="info-row phone text-right">
                                                            <a href="../family-home-for-sale/index.html" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="table-list full-width hide-on-list">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p><span>Beds: 3</span><span>Baths: 2</span><span>Sq Ft: 1569</span></p>
                                                                <p>Single Family Home</p>

                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="../family-home-for-sale/index.html" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="../../agent/samuel-palmer/index.html">Samuel Palmer</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p class="prop-date"><i class="fa fa-calendar"></i>10 months ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar houzez_sticky" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; top: 60px; left: 929.5px;">
                            <aside id="sidebar" class="sidebar-white">

                                <div id="houzez_properties_viewed-2" class="widget widget_houzez_properties_viewed">
                                    <div class="widget-top"><h3 class="widget-title">Recently Viewed</h3></div>


                                    <div class="widget-body">


                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="item-thumb">
                                                    <a class="hover-effect" href="../luxury-apartment-ocean-view-3/index.html">
                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-14.jpg" class="attachment-widget-prop size-widget-prop wp-post-image" alt="los-angeles-14"
                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-14-350x235.jpg 350w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="../luxury-apartment-ocean-view-3/index.html">Luxury apartment ocean view</a></h3>
                                                <h4>$899,000</h4>
                                                <div class="amenities">
                                                    <p>4 beds • 2 baths • 1200 Sq Ft</p>
                                                    <p>Apartment</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="item-thumb">
                                                    <a class="hover-effect" href="../gorgeous-villa-bay-view/index.html">
                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-10.jpg" class="attachment-widget-prop size-widget-prop wp-post-image" alt="los-angeles-10"
                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-10-350x235.jpg 350w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="../gorgeous-villa-bay-view/index.html">Gorgeous villa bay view</a></h3>
                                                <h4>$990,000</h4>
                                                <div class="amenities">
                                                    <p>4 beds • 2 baths • 1200 Sq Ft</p>
                                                    <p>Villa</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="item-thumb">
                                                    <a class="hover-effect" href="../gorgeous-apartment-bay-front/index.html">
                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/chicago-12.jpg" class="attachment-widget-prop size-widget-prop wp-post-image" alt="chicago-12"
                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-12-350x235.jpg 350w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="../gorgeous-apartment-bay-front/index.html">Gorgeous apartment bay front</a></h3>
                                                <h4>$12,000/mo</h4>
                                                <div class="amenities">
                                                    <p>3 beds • 2 baths • 2350 Sq Ft</p>
                                                    <p>Apartment</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="item-thumb">
                                                    <a class="hover-effect" href="../luxury-family-home-4/index.html">
                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/chicago-06.jpg" class="attachment-widget-prop size-widget-prop wp-post-image" alt="chicago-06"
                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-06-350x235.jpg 350w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="../luxury-family-home-4/index.html">Luxury family home</a></h3>
                                                <h4>$670,000</h4>
                                                <div class="amenities">
                                                    <p>4 beds • 2 baths • 2300 Sq Ft</p>
                                                    <p>Single Family Home</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="item-thumb">
                                                    <a class="hover-effect" href="../luxury-family-home-3/index.html">
                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-07.jpg" class="attachment-widget-prop size-widget-prop wp-post-image" alt="los-angeles-07"
                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-07-350x235.jpg 350w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="../luxury-family-home-3/index.html">Awesome family home</a></h3>
                                                <h4>$570,000</h4>
                                                <div class="amenities">
                                                    <p>4 beds • 3 baths • 3000 Sq Ft</p>
                                                    <p>Loft</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div id="houzez_mortgage_calculator-3" class="widget widget-calculate">
                                    <div class="widget-top"><h3 class="widget-title">Mortgage Calculator</h3></div>
                                    <div class="widget-body">
                                        <form method="" action="#">
                                            <div class="form-group icon-holder">
                                                <input class="form-control" id="mc_total_amount" placeholder="Total Amount" type="text">
                                                <span class="field-icon">$</span>
                                            </div>
                                            <div class="form-group icon-holder">
                                                <input class="form-control" id="mc_down_payment" placeholder="Down Payment" type="text">
                                                <span class="field-icon">$</span>
                                            </div>
                                            <div class="form-group icon-holder">
                                                <input class="form-control" id="mc_interest_rate" placeholder="Interest Rate" type="text">
                                                <span class="field-icon">%</span>
                                            </div>
                                            <div class="form-group icon-holder">
                                                <input class="form-control" id="mc_term_years" placeholder="Loan Term (Years)" type="text">
                                                <span class="field-icon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <div class="form-group icon-holder">
                                                <select class="selectpicker bs-select-hidden" id="mc_payment_period" data-live-search="false" data-live-search-style="begins">
                                                    <option value="12">Monthly</option>
                                                    <option value="26">Bi-Weekly</option>
                                                    <option value="52">Weekly</option>
                                                </select>
                                                <div class="btn-group bootstrap-select">
                                                    <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="mc_payment_period" title="Monthly"><span class="filter-option pull-left">Monthly</span>&nbsp;<span
                                                                class="fa fa-sort"></span></button>
                                                    <div class="dropdown-menu open">
                                                        <ul class="dropdown-menu inner" role="menu">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Monthly</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Bi-Weekly</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                            <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Weekly</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="houzez_mortgage_calculate" class="btn btn-orange btn-block">Calculate</button>
                                            <div class="morg-detail">
                                                <div class="morg-result">
                                                    <div id="mortgage_mwbi"></div>
                                                    <img src="../../wp-content/themes/houzez/images/icon_inspector.png" alt="icon inspector" class="show-morg">
                                                </div>
                                                <div class="morg-summery">
                                                    <div class="result-title">
                                                        Amount Financed:
                                                    </div>
                                                    <div id="amount_financed" class="result-value"></div>

                                                    <div class="result-title">
                                                        Mortgage Payments:
                                                    </div>
                                                    <div id="mortgage_pay" class="result-value"></div>

                                                    <div class="result-title">
                                                        Annual cost of Loan:
                                                    </div>
                                                    <div id="annual_cost" class="result-value"></div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="houzez_featured_properties-17" class="widget widget_houzez_featured_properties">
                                    <div class="widget-top"><h3 class="widget-title">Featured</h3></div>


                                    <div class="widget-body">

                                        <div class="property-widget-slider slide-animated owl-carousel owl-theme owl-loaded" style="opacity: 1;">


                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1450px;">
                                                    <div class="owl-item active" style="width: 290px; margin-right: 0px;">
                                                        <div>
                                                            <div class="figure-block">
                                                                <figure class="item-thumb">
                                                                    <span class="label-featured label label-success">Featured</span>
                                                                    <div class="label-wrap label-right">
                                                                        <span class="label-status label-status-8 label label-default">For Rent</span>

                                                                    </div>

                                                                    <a href="../modern-apartment-on-the-bay-2/index.html" class="hover-effect">
                                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-06.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image"
                                                                             alt="los-angeles-06"
                                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-06-350x235.jpg 350w"
                                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                                    <figcaption class="thumb-caption">
                                                                        <div class="cap-price pull-left">$1,900/mo</div>
                                                                        <ul class="list-unstyled actions pull-right">
                                                                            <li>
													<span title="" data-placement="top" data-toggle="tooltip" data-original-title="7 Photos">
														<i class="fa fa-camera"></i>
													</span>
                                                                            </li>
                                                                        </ul>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 290px; margin-right: 0px;">
                                                        <div>
                                                            <div class="figure-block">
                                                                <figure class="item-thumb">
                                                                    <span class="label-featured label label-success">Featured</span>
                                                                    <div class="label-wrap label-right">
                                                                        <span class="label-status label-status-7 label label-default">For Sale</span>

                                                                    </div>

                                                                    <a href="../luxury-villa-with-pool/index.html" class="hover-effect">
                                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-05.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image"
                                                                             alt="los-angeles-05"
                                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-05-350x235.jpg 350w"
                                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                                    <figcaption class="thumb-caption">
                                                                        <div class="cap-price pull-left">$990,000</div>
                                                                        <ul class="list-unstyled actions pull-right">
                                                                            <li>
													<span title="" data-placement="top" data-toggle="tooltip" data-original-title="7 Photos">
														<i class="fa fa-camera"></i>
													</span>
                                                                            </li>
                                                                        </ul>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 290px; margin-right: 0px;">
                                                        <div>
                                                            <div class="figure-block">
                                                                <figure class="item-thumb">
                                                                    <span class="label-featured label label-success">Featured</span>
                                                                    <div class="label-wrap label-right">
                                                                        <span class="label-status label-status-7 label label-default">For Sale</span>

                                                                    </div>

                                                                    <a href="../ample-apartment-at-last-floor-2/index.html" class="hover-effect">
                                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-04.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image"
                                                                             alt="los-angeles-04"
                                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-04-350x235.jpg 350w"
                                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                                    <figcaption class="thumb-caption">
                                                                        <div class="cap-price pull-left">$245,000</div>
                                                                        <ul class="list-unstyled actions pull-right">
                                                                            <li>
													<span title="" data-placement="top" data-toggle="tooltip" data-original-title="7 Photos">
														<i class="fa fa-camera"></i>
													</span>
                                                                            </li>
                                                                        </ul>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 290px; margin-right: 0px;">
                                                        <div>
                                                            <div class="figure-block">
                                                                <figure class="item-thumb">
                                                                    <span class="label-featured label label-success">Featured</span>
                                                                    <div class="label-wrap label-right">
                                                                        <span class="label-status label-status-8 label label-default">For Rent</span>

                                                                    </div>

                                                                    <a href="../penthouse-apartment-2/index.html" class="hover-effect">
                                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/los-angeles-01.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image"
                                                                             alt="los-angeles-01"
                                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/los-angeles-01-350x235.jpg 350w"
                                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                                    <figcaption class="thumb-caption">
                                                                        <div class="cap-price pull-left">$9,000/mo</div>
                                                                        <ul class="list-unstyled actions pull-right">
                                                                            <li>
													<span title="" data-placement="top" data-toggle="tooltip" data-original-title="7 Photos">
														<i class="fa fa-camera"></i>
													</span>
                                                                            </li>
                                                                        </ul>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 290px; margin-right: 0px;">
                                                        <div>
                                                            <div class="figure-block">
                                                                <figure class="item-thumb">
                                                                    <span class="label-featured label label-success">Featured</span>
                                                                    <div class="label-wrap label-right">
                                                                        <span class="label-status label-status-7 label label-default">For Sale</span>

                                                                    </div>

                                                                    <a href="../luxury-apartment-bay-view/index.html" class="hover-effect">
                                                                        <img width="1170" height="786" src="../../wp-content/uploads/2016/03/chicago-05.jpg" class="attachment-property-thumb-image size-property-thumb-image wp-post-image"
                                                                             alt="chicago-05"
                                                                             srcset="http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05.jpg 1170w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-300x202.jpg 300w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-768x516.jpg 768w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-1024x688.jpg 1024w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-150x101.jpg 150w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-385x258.jpg 385w, http://houzez02.favethemes.com/wp-content/uploads/2016/03/chicago-05-350x235.jpg 350w"
                                                                             sizes="(max-width: 1170px) 100vw, 1170px"> </a>
                                                                    <figcaption class="thumb-caption">
                                                                        <div class="cap-price pull-left">$987,000</div>
                                                                        <ul class="list-unstyled actions pull-right">
                                                                            <li>
													<span title="" data-placement="top" data-toggle="tooltip" data-original-title="13 Photos">
														<i class="fa fa-camera"></i>
													</span>
                                                                            </li>
                                                                        </ul>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-controls">
                                                <div class="owl-nav">
                                                    <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                                                    <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                                                </div>
                                                <div class="owl-dots" style="">
                                                    <div class="owl-dot active"><span></span></div>
                                                    <div class="owl-dot"><span></span></div>
                                                    <div class="owl-dot"><span></span></div>
                                                    <div class="owl-dot"><span></span></div>
                                                    <div class="owl-dot"><span></span></div>
                                                </div>
                                            </div>
                                        </div>

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