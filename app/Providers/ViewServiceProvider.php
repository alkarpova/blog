<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $locales = config('translatable.locales');

        $categories = Category::enabled()
            ->with('translations')
            ->where('status', true)
            ->get();

        View::share('locales', $locales);
        View::share('listCategories', $categories);

        Paginator::useTailwind();
    }
}
