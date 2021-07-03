<x-app-layout>
    <form method="POST" action="{{ route('profile.update', $user) }}">
        @method("PUT")
        @csrf
        <div class="max-w-md mx-auto space-y-4">
            <div class="flex items-center space-x-4">
                <label class="text-white text-md flex-1" for="name">{{ __('Username')}}:</label>
                <x-input id="name" class="block mt-1 w-3/4 focus:outline-none focus:ring-2 focus:ring-gray-900" type="text" name="name" placeholder="{{ $user->name }}" value="" required />
            </div>
            <div class="flex items-center space-x-4">
                <label class="text-white text-md flex-1" for="name">{{ __('Email')}}:</label>
                <x-input id="email" class="block mt-1 w-3/4 focus:outline-none focus:ring-2 focus:ring-gray-900" type="email" name="email" placeholder="{{ $user->email }}" value="" required />
            </div>
        </div>

        <button class="p-4 bg-gray-800 rounded-md text-white text-md text-bold" type="submit">
            Change fields
        </button>
    </form>
</x-app-layout>
