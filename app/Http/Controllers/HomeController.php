<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::enabled()
            ->sorted()
            ->withTranslation()
            ->with([
                'user',
                'category'
            ])
            ->limit(5)
            ->get();

        return view('pages.home', compact('posts'));
    }
}
