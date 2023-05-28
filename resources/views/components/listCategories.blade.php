<div class="p-5 bg-white text-center">
    <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">{{ __('theme.categories') }}</div>
    <ul class="flex flex-col gap-3 uppercase text-theme">
        @foreach($listCategories as $category)
            <li>
                <a class="font-semibold" href="{{ localized_route('category.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
