<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::enabled()
            ->with('translations')
            ->whereTranslation('slug', $slug)
            ->with([
                'user',
                'category' => fn ($query) => $query->withTranslation(),
                'comments' => fn ($query) => $query->with('user'),
            ])
            ->firstOrFail();

        return view('pages.post', compact('post'));
    }

    public function comment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Comment::create($request->all());

        return back();
    }
}
