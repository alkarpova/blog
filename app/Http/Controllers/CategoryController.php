<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::enabled()
            ->withTranslation()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        $posts = Post::enabled()
            ->sorted()
            ->withTranslation()
            ->where('category_id', $category->id)
            ->with([
                'user',
            ])
            ->simplePaginate(10);

        return view('pages.category', compact('category', 'posts'));
    }
}
