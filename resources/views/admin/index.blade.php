@extends('layouts.admin')
@section('title', 'マイニュース管理画面')

@section('content')
    <div class="container">
        {{-- Tab Menu --}}
        <ul class="nav nav-tabs nav-pills row mb-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">
                  ニュース一覧
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    プロフィール一覧
                </a>
            </li>
        </ul>
        {{-- Tab Contents --}}
        <div class="tab-content">
            {{-- News --}}
            <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ action('Admin\NewsController@add') }}" role="button" class="btn btn-primary">新規作成</a>
                    </div>
                    <div class="col-md-8">
                        <form action="{{ action('Admin\HomeController@index') }}" method="get">
                            <div class="form-group row">
                                <label class="col-md-2">タイトル</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
                                </div>
                                <div class="col-md-2">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-primary" value="検索">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="admin-news col-md-12 mx-auto">
                        <div class="row">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="20%">タイトル</th>
                                        <th width="50%">本文</th>
                                        <th width="10%">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news_posts as $news)
                                        <tr>
                                            <th>{{ $news->id }}</th>
                                            <td>{{ str_limit($news->title, 100) }}</td>
                                            <td>{{ str_limit($news->body, 250) }}</td>
                                            <td>
                                                <div>
                                                    <a href="{{ action('Admin\NewsController@edit', ['id' => $news->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('Admin\NewsController@delete', ['id' => $news->id]) }}">削除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Profile --}}
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
                    </div>
                    <div class="col-md-8">
                        <form action="{{ action('Admin\HomeController@index') }}" method="get">
                            <div class="form-group row">
                                <label class="col-md-2">名前</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="cond_name" value={{ $cond_name }}>
                                </div>
                                <div class="col-md-2">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-primary" value="検索">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="admin-news col-md-12 mx-auto">
                        <div class="row">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="10%">名前</th>
                                        <th width="10%">性別</th>
                                        <th width="20%">趣味</th>
                                        <th width="30%">自己紹介</th>
                                        <th width="10%">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profile_posts as $profile)
                                        <tr>
                                            <th>{{ $profile->id }}</th>
                                            <td>{{ str_limit($profile->name, 100) }}</td>
                                            <td>{{ str_limit($profile->gender, 250) }}</td>
                                            <td>{{ str_limit($profile->hobby, 250) }}</td>
                                            <td>{{ str_limit($profile->introduction, 250) }}</td>
                                            <td>
                                                <div>
                                                    <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
                                                </div>
                                                <div>
                                                    <a href="{{ action('Admin\ProfileController@delete', ['id' => $profile->id]) }}">削除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection