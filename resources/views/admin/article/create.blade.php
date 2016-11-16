@extends('admin.layouts.master')
@section('title', 'Quản lí bài viết - Thêm Mới')
@section('breadcrumb')
    <li><a href="{{ route('admin.articles.index') }}">Bài viết</a></li>
    <i class="fa fa-angle-right"></i>
    <li class="active">Thêm mới</li>
@endsection
@include('admin.article._form')