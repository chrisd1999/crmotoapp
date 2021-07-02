<header class="py-2 bg-gray-800">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
        <div class="">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}">
            </a>
        </div>
        <nav class="hidden md:flex space-x-6">
            <div class="relative space-x-3 text-gray-100 text-sm font-bold tracking-wide">
                <a href="{{ route('events.index') }}">{{ __('Events') }}</a>
                <a href="#">{{ __('Racing') }}</a>
                <a href="#">{{ __('Results') }}</a>
                <a href="#">{{ __('FAQ') }}</a>
                @auth
                    <a href="#">{{ __('My events') }}</a>
                    <a href="{{ route('profile.index')}}">{{ __('Profile') }}</a>
                    <form class="inline-block" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}">{{ __('Sign in') }}</a>
                    @endguest
            </div>
            <div class="flex items-center space-x-2">
                @component('components.flag-button-group')@endcomponent
            </div>
        </nav>
    </div>
</header>
