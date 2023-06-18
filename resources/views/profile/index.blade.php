@extends('layouts.site')

@section('content')
    <div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            <div class="flex items-center justify-center gap-4 text-center uppercase font-sans font-semibold text-4xl xl:text-6xl text-theme">
                <span class="w-[40px] h-[1px] bg-theme"></span>
                <h1>{{ auth()->user()->name }}, {{ __('theme.posts') }}</h1>
                <span class="w-[40px] h-[1px] bg-theme"></span>
            </div>
            @foreach($posts as $post)
                @include('components.post', ['post' => $post, 'showCategory' => true, 'showEditorPanel' => true])
            @endforeach
            {!! $posts->links() !!}
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            <div class="p-5 bg-white text-center flex flex-col items-center gap-4">
                <a class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" href="{{ localized_route('post.create') }}">{{ __('theme.add_post') }}</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition">{{ __('theme.logout') }}</button>
                </form>
            </div>
            @include('components.listCategories')
        </div>
    </div>
@endsection
