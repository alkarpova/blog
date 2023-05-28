@extends('layouts.site', [
    'object' => null,
])

@section('content')
    <div class="container p-5 mx-auto flex flex-col gap-4">
        <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-4 border p-5">
            @csrf
            <h1 class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">{{ __('theme.register') }}</h1>
            <div>
                <label for="name" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.name') }}</label>
                <input type="text" id="name" class="bg-gray-50 border border-neutral-900 @error('name') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="{{ __('theme.name') }}" required autocomplete="name" autofocus>
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.email') }}</label>
                <input type="email" id="email" class="bg-gray-50 border border-neutral-900 @error('email') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" value="{{ old('email') }}" placeholder="{{ __('theme.email') }}" required autocomplete="email">
                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.password') }}</label>
                <input type="password" id="password" class="bg-gray-50 border border-neutral-900 @error('password') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password" placeholder="{{ __('theme.password') }}" required autocomplete="new-password">
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('theme.confirm_password') }}</label>
                <input type="password" id="password_confirmation" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password_confirmation" placeholder="{{ __('theme.confirm_password') }}" required autocomplete="new-password">
            </div>
            <div class="mt-3">
                <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">{{ __('theme.register') }}</button>
            </div>
            @if (Route::has('en.register') || Route::has('lv.register'))
                <p class="text-center">
                    {{ __('theme.already_account') }}
                    <a class="font-semibold" href="{{ localized_route('login') }}">
                        {{ __('theme.login') }}
                    </a>
                </p>
            @endif
        </form>
    </div>
@endsection
