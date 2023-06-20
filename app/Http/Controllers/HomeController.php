<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitleDefault('Home | Alexa Blog');
        SEOMeta::setDescription('My personal blog');

        $posts = Post::enabled()
            ->sorted('created_at', 'desc')
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
