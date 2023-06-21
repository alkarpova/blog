@extends('layouts.site', [
    'object' => null,
])

@section('content')
    <div class="container p-5 mx-auto flex flex-col gap-4">
        <form class="flex flex-col gap-4 border p-5" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">{{ __('theme.add_post') }}</h1>
            <div>
                <label for="category" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.category') }} <span class="font-bold text-red-500">*</span></label>
                <select id="category" class="bg-gray-50 border border-neutral-900 @error('category_id') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="category_id">
                    @foreach($categories as $category)
                        @if($category->id == old('category_id'))
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div x-data="{ activeTab:  0 }">
                <div class="flex gap-4 pb-3">
                    <label @click="activeTab = 0" class="font-bold text-neutral-500 cursor-pointer" :class="{ '!text-black': activeTab === 0 }">English</label>
                    <label @click="activeTab = 1" class="font-bold text-neutral-500 cursor-pointer @error('lv.name') text-red-500 @enderror @error('lv.content') text-red-500 @enderror" :class="{ '!text-black': activeTab === 1 }">Latvian</label>
                </div>
                <div class="flex flex-col gap-4" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
                    <div>
                        <label for="en_name" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.title') }} <span class="font-bold text-red-500">*</span></label>
                        <input id="en_name" class="bg-gray-50 border border-neutral-900 @error('en.name') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="en[name]" value="{{ old('en.name') }}" type="text"  placeholder="{{ __('theme.name') }}" required>
                        @error('en.name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="en_content" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.content') }} <span class="font-bold text-red-500">*</span></label>
                        <textarea id="en_content" name="en[content]" placeholder="{{ __('theme.content') }}">{{ old('en.content') }}</textarea>
                        @error('en.content')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col gap-4" :class="{ 'active': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">
                    <div>
                        <label for="lv_name" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.title') }} <span class="font-bold text-red-500">*</span></label>
                        <input id="lv_name" class="bg-gray-50 border border-neutral-900 @error('lv.name') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="lv[name]" value="{{ old('lv.name') }}" type="text"  placeholder="{{ __('theme.name') }}" required>
                        @error('lv.name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="lv_content" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.content') }} <span class="font-bold text-red-500">*</span></label>
                        <textarea id="lv_content" name="lv[content]" placeholder="{{ __('theme.content') }}">{{ old('lv.content') }}</textarea>
                        @error('lv.content')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="image" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.image') }}</label>
                <input type="file" name="file" accept=".png, .jpg, .jpeg">
            </div>
            <div>
                <ul class="font-semibold text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-3">
                <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">{{ __('theme.save_post') }}</button>
            </div>
        </form>
    </div>
@endsection

@section('head_scripts')
    <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
@endsection
@section('footer_scripts')
    <script>
        tinymce.init({
            selector: '#en_content,#lv_content',
            plugins: 'autoresize directionality link wordcount',
            toolbar: 'alignjustify alignright aligncenter alignleft | removeformat | bold italic | link',
            language: '{{ app()->getLocale() }}',
        });
    </script>
@endsection
