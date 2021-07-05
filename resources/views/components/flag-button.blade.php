@props(['lang', 'src'])

<a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $lang) }}"><img src="{{ asset($src) }}"
        class="h-5 w-10 border-1 border-gray-500 {{ app()->getLocale() !== $lang ? 'opacity-55' : '' }}" alt="" /></a>
