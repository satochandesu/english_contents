@extends('layout.layout')

@section('title')
    英語リスニング教材検索アプリ
@endsection


@section('content')
    <div class="top-page">
                <!-- ヘッダー -->
        @include('layout.header')
        <div class="welcome-container">
            <div class="h1 text-center">
                <h1 class="text-light">最適なリスニングコンテンツに出会える</h1>
                <h2 class="text-light">English unlock your dream</h2>
            </div>
            <div class="text-center">
                @auth
                    <a href="{{ route('home') }}" class="btn btn-success">プロジェクト一覧</a>
                @else
                    <a href="{{ route('register') }}" class="btn btn-success">まずは無料で登録する</a>
                @endauth
            </div>
        </div>
    </div>
@endsection