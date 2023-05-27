@extends('layouts.site')

@section('content')
    <div class="container p-5 mx-auto grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9 flex flex-col gap-4">
            @foreach($posts as $post)
                @include('components.post', ['post' => $post, 'showCategory' => true])
            @endforeach
        </div>
        <div class="col-span-12 lg:col-span-3 flex flex-col gap-4 relative">
            @include('components.listCategories')
        </div>
    </div>
@endsection
