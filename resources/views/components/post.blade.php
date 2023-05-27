<div class="flex flex-col gap-6 p-5">
    <div class="flex flex-col gap-4 items-center text-center font-semibold">
        @if ($showCategory)
        <a class="flex items-center justify-center gap-4 uppercase text-theme" href="{{ localized_route('category.show', ['slug' => $post->category->slug]) }}">
            <span class="w-[20px] h-[1px] bg-theme"></span>
            <span>{{ $post->category->name }}</span>
            <span class="w-[20px] h-[1px] bg-theme"></span>
        </a>
        @endif
        <a class="font-sans text-2xl lg:text-3xl xl:text-5xl" href="{{ localized_route('post.show', ['slug' => $post->slug]) }}">{{ $post->name }}</a>
        <div class="uppercase text-sm">{{ $post->created_at->format('d.m.Y') }} | {{ $post->user->name }}</div>
    </div>
    @if ($post->image)
    <a href="{{ localized_route('post.show', ['slug' => $post->slug]) }}">
        <img class="w-full" src="https://placehold.co/800x600" loading="lazy" alt="{{ $post->name }}">
    </a>
    @endif
    <div class="flex flex-col gap-3 font-sans text-xl">
        {!! $post->description !!}
    </div>
    <div class="flex justify-between gap-4">
        <a class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" href="{{ localized_route('post.show', ['slug' => $post->slug]) }}">Read more</a>
    </div>
</div>
