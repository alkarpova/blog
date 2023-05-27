<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $posts = Post::enabled()
            ->sorted()
            ->withTranslation()
            ->where('user_id', auth()->user()->id ?? null)
            ->simplePaginate(5);

        return view('pages.profile', compact('posts'));
    }
}
