<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // 更新順にプロフィールのデータをDBから取得する
        $posts = Profile::all()->sortByDesc('updated_at');

        // 性別の表記を設定する
        for ($i = 0; $i < count($posts); $i++) {
            if ($posts[$i]['gender'] == 'm') {
                $posts[$i]['gender'] = '男';
            } elseif ($posts[$i]['gender'] == 'f') {
                $posts[$i]['gender'] = '女';
            } else {
                $posts[$i]['gender'] = 'その他';
            }
        }

        return view('profile.index', ['posts' => $posts]);
    }
}
