@extends('admin.layouts.master')
@section('title', 'Quả lí danh mục - Chỉnh sữa')
@section('breadcrumb')
    <li>Quả lí danh mục</li>
    <li><a href="{{ route('admin.categories.index') }}">Danh mục</a></li>
    <li class="active">Sữa</li>
@endsection
@include('admin.categories._form')