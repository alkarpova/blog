@extends('layouts.site', [
    'object' => null,
])

@section('content')
    <div class="container p-5 mx-auto flex flex-col gap-4">
        <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-4 border p-5">
            @csrf
            <h1 class="mb-5 font-sans font-semibold text-2xl lg:text-4xl">Register</h1>
            <div>
                <label for="name" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('Name') }}</label>
                <input type="text" id="name" class="bg-gray-50 border border-neutral-900 @error('name') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('E-Mail Address') }}</label>
                <input type="email" id="email" class="bg-gray-50 border border-neutral-900 @error('email') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email">
                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('Password') }}</label>
                <input type="password" id="password" class="bg-gray-50 border border-neutral-900 @error('password') border-red-500 @enderror text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password" placeholder="{{ __('Password') }}" required>
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-gray-900">{{ __('Confirm Password') }}</label>
                <input type="password" id="password_confirmation" class="bg-gray-50 border border-neutral-900 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
            </div>
            <div class="mt-3">
                <button class="inline-block px-10 py-3 bg-neutral-900 font-semibold text-white hover:bg-theme transition" type="submit">{{ __('Register') }}</button>
            </div>
            @if (Route::has('en.register') || Route::has('lv.register'))
                <p class="text-center">
                    {{ __('Already have an account?') }}
                    <a class="font-semibold" href="{{ localized_route('login') }}">
                        {{ __('Login') }}
                    </a>
                </p>
            @endif
        </form>
    </div>
@endsection
