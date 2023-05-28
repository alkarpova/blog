<footer class="bg-neutral-900 text-white">
    <div class="py-10">
        <div class="container p-5 mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="flex flex-col justify-center text-center gap-4">
                <div class="font-sans text-2xl">{{ __('theme.social') }}</div>
                <ul class="flex flex-col gap-2 text-neutral-400 uppercase text-sm">
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Instagran</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col justify-center gap-4 text-center font-sans">
                <span class="self-center text-5xl font-semibold whitespace-nowrap">Alexa Blog</span>
                <p class="text-neutral-400 text-2xl">{{ __('theme.slogan') }}</p>
            </div>
            <div class="flex flex-col justify-center text-center gap-4">
                <div class="font-sans text-2xl">{{ __('theme.categories') }}</div>
                <ul class="flex flex-col gap-2 text-neutral-400 uppercase text-sm">
                    @foreach($listCategories as $category)
                        <li>
                            <a href="{{ localized_route('category.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="py-4 border-t border-neutral-700 text-center font-sans">
        <span>&copy; {{ date('Y') }} Alexa Blog, All Rights Reserved</span>
    </div>
</footer>
