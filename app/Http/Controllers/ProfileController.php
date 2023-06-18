<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;

class ProfileController extends Controller
{
    /**
     * Show profile page.
     *
     */
    public function show()
    {
        SEOMeta::setTitleDefault('Profile');
        SEOMeta::setDescription('Profile');
        SEOMeta::addMeta('robots', 'noindex,nofollow');

        $posts = Post::enabled()
            ->sorted('created_at', 'desc')
            ->withTranslation()
            ->where('user_id', auth()->user()->id ?? null)
            ->simplePaginate(5);

        return view('profile.index', compact('posts'));
    }
}
