@extends('admin.layouts.master')
@section('title', 'Quả lí bài viết')
@section('breadcrumb')
    <li><a href="{{ route('admin.articles.index') }}">Bài viết</a></li>
    <i class="fa fa-angle-right"></i>
    <li class="active">Sữa</li>
@endsection
@include('admin.article._form')