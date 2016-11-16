@extends('admin.layouts.master')
@section('title', 'Quả lí danh mục - Thêm mới')
@section('breadcrumb')
    <li>Quả lí danh mục</li>
    <li><a href="{{ route('admin.categories.index') }}">Danh Mục</a></li>
    <li class="active">Tạo Mới</li>
@endsection
@include('admin.categories._form')