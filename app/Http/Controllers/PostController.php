<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show post page.
     *
     * @param $slug
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
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

        $this->setMetaSeo($post);

        return view('pages.post', compact('post'));
    }

    /**
     * Show create post page.
     *
     */
    public function create()
    {
        SEOMeta::setTitleDefault(__('theme.add_post'));
        SEOMeta::setDescription('');
        SEOMeta::addMeta('robots', 'noindex,nofollow');

        $categories = Category::enabled()
            ->sorted()
            ->withTranslation()
            ->get();

        return view('profile.create', compact('categories'));
    }

    /**
     * Store post.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->user()->id]);
        $request->merge(['status' => false]);

        $rules = RuleFactory::make([
            '%name%' => 'required|string|max:255',
            '%content%' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'file' => 'nullable|mimes:jpeg,png,jpg|size:2048',
        ]);

        $request->validate($rules);

        if ($request->hasFile('file')) {
            $request->merge(['image' => $request->file('file')->storeAs(
                '', $request->file('file')->getClientOriginalName()
            )]);
        }

        Post::create($request->all());

        return redirect()->route(app()->getLocale() . '.profile.show');
    }

    public function destroy(Post $post)
    {
        // Check if user is owner of post
        if ((int)$post->user_id !== auth()->user()->id) {
            abort(403);
        }

        $post->delete();

        return redirect()->route(app()->getLocale() . '.profile.show');
    }

    /**
     * Add comment.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function comment(Request $request)
    {
        if (auth()->check()) {
            $request->merge(['user_id' => auth()->user()->id]);
            $request->merge(['name' => auth()->user()->name]);
        }

        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Comment::create($request->all());

        return back();
    }
}
