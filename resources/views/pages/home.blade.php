@extends('layouts.site')

@section('content')
    <div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            @foreach($posts as $post)
                @include('components.post', ['post' => $post, 'showCategory' => true])
            @endforeach
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            <div class="p-5 bg-white text-center">
                <div class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Categories</div>
                <ul class="flex flex-col gap-3 uppercase text-theme">
                    @foreach($listCategories as $category)
                        <li>
                            <a class="font-semibold" href="{{ localized_route('category.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
