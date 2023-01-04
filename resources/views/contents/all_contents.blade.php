@extends('layout.layout')

@section('title')
    コンテンツ一覧
@endsection

@section('content')
<div id ="container" class="container-fluid p-3">
    <!-- ヘッダー -->
    @include('layout.header')
    <form action="#" method="GET" class="search-form p-5">
    @csrf
        <div class="search-columns d-flex">
                <div class="search-column search-level mt-2">
                    <h5>LEVEL</h5>
                    <p>あなたのレベルを選んでください</p>
                    <select type="level" class="form-control  @error('level') is-invalid @enderror" name="All_training_level" autocomplete="new-level" id="All_level" name="All_level">
                        <option></option>
                        <option value="beginner" @if( old('level') ==  "beginner") selected @endif>初心者</option>
                        <option value="intermediate" @if( old('level') ==  "intermediate") selected @endif>中級者</option>
                        <option value="master" @if( old('level') ==  "master") selected @endif>上級者</option>
                    </select>
                </div>
                <div class="search-column search-time mt-2">
                    <h5>HOW LONG</h5>
                    <p>希望の再生時間を選んでください</p>
                    <select type="time" class="form-control  @error('time') is-invalid @enderror" name="All_training-time" autocomplete="new-time" id="All-time" name="All-time">
                        <option></option>
                        <option value="5" @if( old('time') ==  "5") selected @endif>~5分</option>
                        <option value="10" @if( old('time') ==  "10") selected @endif>~10分</option>
                        <option value="15" @if( old('time') ==  "15") selected @endif>~15分</option>
                        <option value="20" @if( old('time') ==  "20") selected @endif>~20分</option>
                        <option value="25" @if( old('time') ==  "25") selected @endif>20分~</option>
                    </select>
                </div>
                <div class="search-column search-language mt-2">
                    <h5>language</h5>
                    <p>あなたのレベルを選んでください</p>
                    <select type="language" class="form-control  @error('language') is-invalid @enderror" name="All_training_language" autocomplete="new-language" id="All_language" name="All_language">
                        <option></option>
                        <option value="beginner" @if( old('language') ==  "japanese") selected @endif>日本語</option>
                        <option value="intermediate" @if( old('language') ==  "english") selected @endif>英語</option>
                        <option value="master" @if( old('language') ==  "both") selected @endif>日/英</option>
                    </select>
                </div>
                <div class="search-column search-category mt-2">
                        <h5>Category</h5>
                        <p>希望のカテゴリを選んでください</p>
                        <select type="category" class="form-control  @error('category') is-invalid @enderror" name="All_training-category" autocomplete="new-category" id="All-category" name="All-category">
                            <option></option>
                            <option value="sports" @if( old('category') ==  "sports") selected @endif>スポーツ</option>
                            <option value="news" @if( old('category') ==  "news") selected @endif>ニュース</option>
                            <option value="economic" @if( old('category') ==  "economic") selected @endif>経済</option>
                            <option value="comedy" @if( old('category') ==  "comedy") selected @endif>コメディ</option>
                            <option value="test" @if( old('category') ==  "test") selected @endif>テスト対策</option>
                        </select>
                </div>
                <div class="search-column search-style mt-2">
                        <h5>What style?</h5>
                        <p>コンテンツのスタイルは？</p>
                        <select type="style" class="form-control  @error('style') is-invalid @enderror" name="All_training-style" autocomplete="new-style" id="All-style" name="All-style">
                            <option></option>
                            <option value="conversation" @if( old('style') ==  "conversation") selected @endif>会話形式</option>
                            <option value="alone" @if( old('style') ==  "alone") selected @endif>一人</option>
                        </select>
                </div>
        </div>
        <div class="button home-search-button">
            <input type="submit" class="btn btn-primary submit" value="検索">
        </div>
    </form>
    <div class="row">
        <h2 class="text-center p-5">All contents<br>コンテンツ一覧</h2>
        @foreach ($contents as $content)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $content -> title }}</h4>
                    <div class="border-bottom"></div>
                    <p class="card-text"> 
                    <li>カテゴリ: {{ $content -> category }}</li>
                    <li>再生時間: {{ $content -> time }} 分</li>
                    <li>スタイル: {{ $content -> style }}　形式</li>
                    <li>言語: {{ $content -> language }}</li> 
                    </p>
                    <a href="{{ route('content_detail',$content->id) }}" class="btn btn-primary">READ MORE</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection