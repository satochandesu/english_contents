@extends('layout.layout')

@section('title')
    タスク一覧
@endsection

@section('content')
<div id ="container" class="container-fluid">
    <!-- ヘッダー -->
    @include('layout.header')
    <div id="content_detail" class="row">
        <div class="col-md-6 p-2">
            <div class="content-info">
                <h3>{{ $content->title }}</h3>
                <div class="border-left"></div>
                <li>発信者：　{{ $content->author }}</li>
                <li>レベル：　{{ $content->level }}</li>
                <li>カテゴリ：　{{ $content->category }}</li>
                <li>時間：　{{ $content->time }}分</li>
                <li>形式：　{{ $content->style }}</li>
                <li>言語：　{{ $content->language }}</li>
                <li>created at:　{{ $content->created_at }} </li>
            </div>
        </div>
        <div class="col-md-6 p-2">
            <div class="content-intro">
                <p>{{ $content->detail }}</p>
                <a href="{{ $content->link }}">リンク：　{{ $content->link }}</a>
            </div>
        </div>
    </div>
@endsection