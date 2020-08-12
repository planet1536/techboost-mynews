<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');
        $logo_image = Storage::disk('s3')->url("logo.png");

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        return view('news.index', ['logo_image' => $logo_image, 'headline' => $headline, 'posts' => $posts]);
    }
}
