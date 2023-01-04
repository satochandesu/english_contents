@extends('layout.layout')

@section('title')
    コンテンツ追加
@endsection

@section('content')
<div id ="container" class="container-fluid p-3">
    <!-- ヘッダー -->
    @include('layout.header')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2></h2>
            <form method="POST" action="{{ route('store_content') }}">
            @csrf
                <div class="form-group">
                    <label for="title">
                        <h5>Title</h5>
                        <p>タイトルを入力してください</p>
                    </label>
                    <input id="title" name="title" class="form-control" value="{{ old('title') }}" type="text">
                    @if ($errors->has('title'))
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Link</h5>
                        <p>リンクを入力してください</p>
                    </label>
                    <input id="link" name="link" class="form-control" value="{{ old('link') }}" type="text">
                    @if ($errors->has('link'))
                        <div class="text-danger">
                            {{ $errors->first('link') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Author</h5>
                        <p>作者を入力してください</p>
                    </label>
                    <input id="author" name="author" class="form-control" value="{{ old('author') }}" type="text">
                    @if ($errors->has('author'))
                        <div class="text-danger">
                            {{ $errors->first('author') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Level</h5>
                        <p>レベルを入力してください</p>
                    </label>
                    <select type="level" class="form-control  @error('level') is-invalid @enderror" name="level" autocomplete="new-level" id="level" name="level">
                        <option></option>
                        <option value="初心者" @if( old('level') ==  "初心者") selected @endif>初心者</option>
                        <option value="中級者" @if( old('level') ==  "中級者") selected @endif>中級者</option>
                        <option value="上級者" @if( old('level') ==  "上級者") selected @endif>上級者</option>
                    </select>
                    @if ($errors->has('level'))
                        <div class="text-danger">
                            {{ $errors->first('level') }}
                        </div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="title">
                        <h5>Category</h5>
                        <p>カテゴリを入力してください</p>
                    </label>
                    <select type="category" class="form-control  @error('category') is-invalid @enderror" name="category" autocomplete="new-category" id="category" name="category">
                        <option></option>
                        <option value="ニュース" @if( old('category') ==  "ニュース") selected @endif>ニュース</option>
                        <option value="スポーツ" @if( old('category') ==  "スポーツ") selected @endif>スポーツ</option>
                        <option value="政治経済" @if( old('category') ==  "政治経済") selected @endif>政治経済</option>
                        <option value="プレゼンテーション" @if( old('category') ==  "プレゼンテーション") selected @endif>プレゼンテーション</option>
                        <option value="自己啓発" @if( old('category') ==  "自己啓発") selected @endif>自己啓発</option>
                        <option value="生活" @if( old('category') ==  "生活") selected @endif>生活</option>
                        <option value="テスト" @if( old('category') ==  "テスト") selected @endif>テスト対策</option>
                        <option value="その他" @if( old('category') ==  "その他") selected @endif>その他</option>

                    </select>
                    @if ($errors->has('category'))
                        <div class="text-danger">
                            {{ $errors->first('category') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Time</h5>
                        <p>再生時間を入力してください</p>
                    </label>
                    <select type="time" class="form-control  @error('time') is-invalid @enderror" name="time" autocomplete="new-time" id="time" name="time">
                        <option></option>
                        <option value="5" @if( old('time') ==  "5") selected @endif>5分</option>
                        <option value="10" @if( old('time') ==  "10") selected @endif>10分</option>
                        <option value="15" @if( old('time') ==  "15") selected @endif>15分</option>
                        <option value="20" @if( old('time') ==  "20") selected @endif>20分</option>
                        <option value="25" @if( old('time') ==  "25") selected @endif>25分</option>
                    </select>
                    @if ($errors->has('time'))
                        <div class="text-danger">
                            {{ $errors->first('time') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Style</h5>
                        <p>形式を入力してください</p>
                    </label>
                    <select type="style" class="form-control  @error('style') is-invalid @enderror" name="style" autocomplete="new-style" id="style" name="style">
                        <option></option>
                        <option value="会話,インタビュー形式" @if( old('style') ==  "会話,インタビュー形式") selected @endif>会話,インタビュー形式</option>
                        <option value="一人" @if( old('style') ==  "一人") selected @endif>一人</option>
                    </select>
                    @if ($errors->has('style'))
                        <div class="text-danger">
                            {{ $errors->first('style') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">
                        <h5>Language</h5>
                        <p>使用されている言語を入力してください</p>
                    </label>
                    <select type="language" class="form-control  @error('language') is-invalid @enderror" name="language" autocomplete="new-language" id="language" name="language">
                        <option></option>
                        <option value="日本語" @if( old('language') ==  "日本語") selected @endif>日本語</option>
                        <option value="英語" @if( old('language') ==  "英語") selected @endif>英語</option>
                        <option value="日英" @if( old('language') ==  "日英") selected @endif>日/英</option>
                    </select>
                    @if ($errors->has('language'))
                        <div class="text-danger">
                            {{ $errors->first('language') }}
                        </div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="title">
                        <h5>Detail</h5>
                        <p>コンテンツの紹介文を入力してください</p>
                    </label>
                    <textarea id="detail" type="detail" class="form-control @error('detail') is-invalid @enderror" name="detail"  required autocomplete="detail" rows="5" autofocus></textarea>
                    @if ($errors->has('detail'))
                        <div class="text-danger">
                            {{ $errors->first('detail') }}
                        </div>
                    @endif
                </div>

                <div class="mt-3">
                    <a class="btn btn-secondary mr-2" href="{{ route('home') }}">
                        キャンセル
                    </a>
                    <button type="submit" class="btn btn-primary">
                        投稿
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection