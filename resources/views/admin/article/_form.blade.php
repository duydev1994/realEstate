@section('content')
    {!! Form::open(array('method' => 'post', 'for' => 'form','id'=>'form_article','files'=>true)) !!}
    <div class="box box-primary">
        <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Nhập tiêu đề" value="{{isset($article) ? $article->title : ''}}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Giá</label>
                    <input name="money" id="money" class="form-control" placeholder="Giá" value="{{isset($article) ? $article->money : ''}}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Diện Tích</label>
                    <input name="acreage" id="acreage" class="form-control" placeholder="Giá" value="{{isset($article) ? $article->acreage : ''}}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Danh mục</label>
                    {!! Form::select('category_id', [''=>'Node']+$categories->pluck('title','id')->toArray(), isset($article) ? $article->category_id : '', ['class' => 'js-example-templating form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tình Trạng</label>
                    {!! Form::select('status', \App\Models\Post::$statusName, $article->status , ['class' => 'form-control','id'=>'status_id']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Meta Custom Title</label>
                    <input name="meta_custom_title" id="meta_custom_title" class="form-control" placeholder="Meta Custom Title" value="{{isset($article) ? $article->meta_custom_title : ''}}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Meta Keyword</label>
                    <input name="meta_keyword" id="meta_keyword" class="form-control" placeholder="Meta Keyword" value="{{isset($article) ? $article->meta_keyword : ''}}"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Meta Description</label>
                    <div>
                        <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description">{{isset($article) ? $article->meta_description : ''}}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nội Dung</label>
                    <textarea name="content" id="content" class="form-control my-editor">{!! old('content', isset($article) ? $article->content : '') !!}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Địa Điểm</label>
                    {!! Form::select('location',isset($locationCheck) ? $locationCheck->pluck('name','id')->toArray() :['' => '---'], isset($locationCheck[0]) ? $locationCheck[0]['id'] : '', ['class' => 'form-control select2' ,'id'=>'location_id']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
                <div class="form-group">
                    <label>Bản đồ</label>
                    <div id="map"></div>
                </div>
            </div>

            <script>
                function initAutocomplete() {
                    var lat = document.getElementById('latitude').value;
                    var lng = document.getElementById('longitude').value;
                    // console.log(lat, lng);
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 15.8672027, lng: 101.3118777},
                        zoom: 5,
                    });

                    var marker = new google.maps.Marker({
                        map: map,
                        draggable: true,
                        position: {
                            lat: parseFloat(lat),
                            lng: parseFloat(lng)
                        },
                    })
                    // Create the search box and link it to the UI element.
                    var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));

                    google.maps.event.addListener(searchBox, 'places_changed', function () {

                        var places = searchBox.getPlaces();
                        var bounds = new google.maps.LatLngBounds();
                        var i, place;
                        for (i = 0; place = places[i]; i++) {
                            bounds.extend(place.geometry.location);
                            marker.setPosition(place.geometry.location);
                        }
                        map.fitBounds(bounds);
                        map.setZoom(15);
                    });
                    google.maps.event.addListener(marker, 'position_changed', function () {
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());
                    })
                }
            </script>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Kinh độ</label>
                    <input name="longitude" id="longitude" class="form-control " placeholder="longitude" value="{{$article->longitude }}"/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Vĩ độ</label>
                    <input name="latitude" id="latitude" class="form-control" placeholder="latitude" value="{{$article->latitude }}"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 1</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_1)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_1">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 2</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_2)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_2">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 3</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_3)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_3">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 4</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_4)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_4">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 5</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_5)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_5">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Hình 6</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{show_content_picture($article->picture_6)}}" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image </span>
                                    <span class="fileinput-exists">Change </span>
                                    <input type="file" name="picture_6">
                                </span> <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Video</label>
                <input name="video" id="video" class="form-control " placeholder="video" value="{{$article->video }}"/>
            </div>
        </div>
        <div class="box-footer">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-mail-reply"></i> Back</a>
            <button type="submit" class="btn btn-sm btn-primary btn-flat pull-right">{!!   isset($article) ? '<i class="fa fa-arrow-circle-o-up"></i> Update' : '<i class="fa fa-check"></i> Create' !!}</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places&callback=initAutocomplete" async defer></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>


    <script>
        $('#content').summernote({
            lang: 'vi-VN',
            minHeight: 300,
            maxHeight: null,
            callbacks: {
                onImageUpload: function (files) {
                    data = new FormData();
                    data.append("file", files[0]);
                    $.ajax({
                        type: 'POST',
                        url: '{{route('admin.articles.upload')}}',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (reponse) {
                            if (reponse.status) {
                                $('#content').summernote('insertImage', reponse.url);
                            } else {
                                alert('Up ảnh thất bại')
                            }
                        }
                    });
                }
            }
        });
        //seach Locatio
        $("#location_id").select2({
            customClass: "form-control",
            ajax: {
                url: '{{route('admin.articles.locations')}}',
                dataType: "json",
                type: "get",
                data: function (params) {
                    var queryParameters = {
                        key: params.term
                    };
                    return queryParameters;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });

    </script>
@endsection