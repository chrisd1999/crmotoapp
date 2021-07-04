<x-app-layout>
    {{-- TODO: Refactor in component <x-error></x-error> --}}
    @if ($errors->any())
        <div class="pt-1 pb-4">
            <div class="text-white text-md rounded-md font-light bg-red-700 py-4 space-y-1">
                @foreach ($errors->all() as $message)
                    <h4 class="px-4">{{ $message }}</h4>
                @endforeach
            </div>
        </div>
    @endif
    <form method="POST" action="{{ route('profile.update', $user) }}">
        @method("PUT")
        @csrf
        <div class="max-w-md mx-auto space-y-4">
            <div class="flex items-center space-x-4">
                <label class="text-white text-md flex-1" for="name">{{ __('Username') }}:</label>
                <x-input id="name" class="block mt-1 w-3/4 focus:outline-none focus:ring-2 focus:ring-gray-900"
                    type="text" name="name" value="{{ $user->name }}" required />
            </div>
            <div class="flex items-center space-x-4">
                <label class="text-white text-md flex-1" for="name">{{ __('Email') }}:</label>
                <x-input id="email" class="block mt-1 w-3/4 focus:outline-none focus:ring-2 focus:ring-gray-900"
                    type="email" name="email" value="{{ $user->email }}" required />
            </div>
        </div>

        <div class="py-4 flex justify-center">

            <button class="p-4 bg-gray-800 rounded-md text-white text-md text-bold" type="submit">
                Change fields
            </button>
        </div>
    </form>
</x-app-layout>
