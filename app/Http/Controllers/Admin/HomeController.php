<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;
use App\Profile;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        $cond_name = $request->cond_name;

        if ($cond_title != '') {
            // 検索されたら検索結果を取得する（完全一致）
            $news_posts = News::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $news_posts = News::all();
        }

        if ($cond_name != '') {
            // 検索されたら検索結果を取得する（完全一致）
            $profile_posts = Profile::where('name', $cond_name)->get();
        } else {
            // それ以外はすべてのプロフィールを取得する
            $profile_posts = Profile::all();
        }

        // DBから取得した性別を文字列に変換する
        for ($i = 0; $i < count($profile_posts); $i++) {
            if ($profile_posts[$i]['gender'] == 'm') {
                $profile_posts[$i]['gender'] = '男';
            } else if ($profile_posts[$i]['gender'] == 'f') {
                $profile_posts[$i]['gender'] = '女';
            } else {
                $profile_posts[$i]['gender'] = 'その他';
            }
        }
        
        return view('admin.index', [
            'news_posts' => $news_posts,
            'profile_posts' => $profile_posts,
            'cond_title' => $cond_title,
            'cond_name' => $cond_name,
            ]);
    }
}
