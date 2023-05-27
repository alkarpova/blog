@extends('layouts.site', [
    'object' => $post,
])

@section('content')
    <div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-4 items-center text-center font-semibold">
                    <a class="flex items-center justify-center gap-4 uppercase text-theme" href="{{ localized_route('category.show', ['slug' => $post->category->slug]) }}">
                        <span class="w-[20px] h-[1px] bg-theme"></span>
                        <span>{{ $post->category->name }}</span>
                        <span class="w-[20px] h-[1px] bg-theme"></span>
                    </a>
                    <h1 class="font-sans text-2xl lg:text-3xl xl:text-5xl">{{ $post->name }}</h1>
                    <div class="uppercase text-sm">{{ $post->created_at->format('d.m.Y') }} | {{ $post->user->name }}</div>
                </div>
                @if ($post->image)
                    <img class="w-full" src="{{ Storage::url($post->image) }}" loading="lazy" alt="{{ $post->name }}">
                @endif
                <div class="flex flex-col gap-3 font-sans text-xl">
                    {!! $post->content !!}
                </div>
            </div>
            <div>
                <h2 class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">{{ __('Comments') }}</h2>
                <div class="flex flex-col gap-4">
                    @foreach($post->comments as $comment)
                        @include('components.comment', ['comment' => $comment])
                    @endforeach
                    <form action="{{ route('comment') }}" method="post" class="flex flex-col gap-4 border p-5">
                        @csrf
                        <h3 class="mb-5 font-sans font-semibold text-2xl">{{ __('Add comments') }}</h3>
                        @auth()
                        @else
                            <div>
                                <label for="name" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('Name') }}</label>
                                <input type="text" id="name" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="{{ __('Name') }}" required>
                            </div>
                        @endauth

                        <div>
                            <label for="mesage" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('Message') }}</label>
                            <textarea id="mesage" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="message" rows="10" placeholder="{{ __('Message') }}" required></textarea>
                        </div>
                        <div class="flex justify-between">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">{{ __('Send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            @include('components.listCategories')
        </div>
    </div>
@endsection
