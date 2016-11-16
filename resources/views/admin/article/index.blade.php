@extends('admin.layouts.master')
@section('title', 'Quản lí bài viết - Danh sách')
@section('breadcrumb')
    <li><a href="{{ route('admin.articles.index') }}">Bài viết</a></li>
    <i class="fa fa-angle-right"></i>
    <li class="active">Danh sách</li>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title uppercase">Danh sách bài viết</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('admin.articles.create') }}" class="btn  btn-primary"> Thêm Mới <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="articles" class="table table-bordered table-responsive table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Tiêu đề</th>
                            <th>Danh Mục</th>
                            <th>Tác giả</th>
                            <th>Tình Trạng</th>
                            <th class="text-center">Sự Kiện</th>
                        </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>


    <!--start-popup-->
    <div id="popup">

    </div>
@endsection
@section('style')

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/jquery.dataTables_themeroller.css') }}">

@endsection
@section('script')
    <script src="{{ asset('assets/plugins/select2/select2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/fnSetFilteringDelay.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>



    <script type="text/javascript">
        var oTable;
        $(function () {
            oTable = $("#articles").dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.articles.datatables') }}',
                    type: 'POST',

                },
                "columns": [
                    {
                        data: 'id',
                        name: 'id',
                        render: function (value) {
                            return '<input name="checkbox[]" type="checkbox" value="' + value + '">';
                        }, orderable: false
                    },
                    {data: 'title', name: 'title'},
                    {data: 'category_id', name: 'category_id', searchable: false},
                    {data: 'author', name: 'author'},
                    {data: 'status', name: 'status', searchable: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[1, 'desc']],
            }).fnSetFilteringDelay(500);

        });

        function confirmDelete(that) {
            var articleId = that.attr('data-articleId');
            swal({
                title: "Bạn có chắc chắn ko?",
                text: "Bạn Có muốn xóa bài viết?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Huỷ",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function () {
                $.post('{{route('admin.articles.delete')}}', {
                    'id': articleId
                }, function (response) {
                    if (response.status == 'success') {
                        oTable.fnDraw(false);
                        swal("Xóa Bài Viết thành công!", "Xóa Bài Viết thành công!", "success")
                    }
                    else {
                        console.log(response);
                    }
                });
            });
        }

        function popupView(that) {
            var articleId = that.attr('data-articleId');
            $.ajax({
                url: '{{route('admin.articles.detail')}}',
                type: 'post',
                data: {'id': articleId}
            }).done(function (data) {
                console.log(data);
                if (data.success) {
                    $('#popup').empty();
                    $('#popup').append(popupDetail(data.data))
                    $('#myModal').modal('show');

                }

            });
        }

        function popupDetail(data) {
            var detail = [];
            detail += '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
            detail += '<div class="modal-dialog modal-lg">'
            detail += '<div class="modal-content">'
            detail += '<div class="modal-header">'
            detail += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'
            detail += '<a><h4>' + data.title + '</h4></a>'
            $.each(data.tags, function (key, value) {
                detail += '<label class="label label-default">' + value + '</label>  '
            });
            detail += '</div>'
            detail += '<div class="modal-body" style="height: 70%;  overflow: auto">' + data.content + '<br></div>'
            detail += '<div class="modal-footer">'
            detail += '<button type="button" class="btn btn-flat btn-primary" data-dismiss="modal">Close</button>'
            detail += '</div></div></div></div>'
            return detail;
        }


    </script>
@endsection