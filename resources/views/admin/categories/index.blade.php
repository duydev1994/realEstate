@extends('admin.layouts.master')
@section('title', 'Quả lí danh mục')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title uppercase">Categories</h3>
                    <div class="box-tools pull-right">
                        <a href="{{route('admin.categories.create')}}" class="btn  btn-primary"> Thêm Mới <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <div id="category_menu"></div>

                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection

@section('style')
    <style>
        .box .nav-stacked > li {
            border-bottom: none !important;
            margin: 0;
        }
    </style>
@endsection
@section('script')
    <script type="text/javascript">
        var category = {};
        category.init = function () {
            category.remote();
        };
        category.remote = function () {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.categories.ajax.treeview') }}',
            }).done(function (response) {
                var html = '<ul class="nav nav-stacked">';
                $.each(response, function (index, item) {
                    html += '<li><a class="col-md-11">' + item.title + '</a>' +
                            '<a class="col-md-1" href="{{route('admin.categories.edit',0)}}'.replace(/0$/, item.id) + '"> Edit</a>';
                    if (item.children) {
                        html += '<ul class="nav nav-stacked" style="margin-left:30px">';
                        $.each(item.children, function (index, item) {
                            html += '<li><a href="javascript:void(0)" class="col-md-11" onclick="editCategory(' + item.id + ')">' + item.title + '</a>' +
                                    '<a class="col-md-1" href="{{route('admin.categories.edit',0)}}'.replace(/0$/, item.id) + '"> Edit</a>';
                        });
                        html += '</li></ul>';
                    }
                    html += '</li>';
                });
                html += '</ol>';
                $('#category_menu').html(html);
            });
        };
        $(function () {
            category.init();
        });
        function editCategory(id) {
            window.location.href = '{{ $categoryPath }}' + '/' + id + '/articles';
        }
    </script>
@endsection