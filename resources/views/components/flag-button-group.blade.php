@foreach (config('app.available_locales') as $locale)
    <x-flag-button lang="{{ $locale }}" src="img/flag_{{ $locale }}.png">
    </x-flag-button>
@endforeach
