@extends('layouts.site', [
    'object' => $category,
])

@section('content')
    <div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            <div class="flex items-center justify-center gap-4 text-center uppercase font-sans font-semibold text-4xl xl:text-6xl text-theme">
                <span class="w-[40px] h-[1px] bg-theme"></span>
                <h1>{{ $category->name }}</h1>
                <span class="w-[40px] h-[1px] bg-theme"></span>
            </div>
            @foreach($posts as $post)
                @include('components.post', ['post' => $post, 'showCategory' => false, 'showEditorPanel' => false])
            @endforeach
            {!! $posts->links() !!}
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            @include('components.listCategories')
        </div>
    </div>
@endsection
