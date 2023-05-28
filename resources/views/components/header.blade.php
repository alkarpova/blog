<nav class="bg-white border-gray-200 border-b z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 lg:py-5 px-5">
        <a href="{{ localized_route('home') }}" class="flex items-center font-sans">
            <span class="self-center text-2xl lg:text-4xl font-semibold whitespace-nowrap">Alexa Blog</span>
        </a>
        <div class="flex items-center md:order-2">
            @if(empty($object))
                @if($locales)
                    @foreach($locales as $locale)
                        @if($locale === app()->getLocale())
                            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 uppercase" href="{{ localized_route(substr(Route::currentRouteName(), 3), [], $locale) }}">{{ $locale }}</a>
                        @else
                            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 uppercase" href="{{ localized_route(substr(Route::currentRouteName(), 3), [], $locale) }}">{{ $locale }}</a>
                        @endif
                    @endforeach
                @endif
            @else
                @if($locales)
                    @foreach($locales as $locale)
                        @if($locale === app()->getLocale())
                            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 uppercase" href="{{ route($locale . '.' . substr(Route::currentRouteName(), 3), ['slug' => $object->{'slug:' . $locale} ]) }}">{{ $locale }}</a>
                        @else
                            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 uppercase" href="{{ route($locale . '.' . substr(Route::currentRouteName(), 3), ['slug' => $object->{'slug:' . $locale} ]) }}">{{ $locale }}</a>
                        @endif
                    @endforeach
                @endif
            @endif
            <a class="inline-flex items-center justify-center px-4 py-2 font-semibold text-gray-900 cursor-pointer" href="{{ localized_route('profile.show') }}">
                <span>{{ __('theme.profile') }}</span>
            </a>
        </div>
    </div>
</nav>
