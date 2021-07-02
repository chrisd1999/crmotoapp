<x-app-layout>
    <div class="flex justify-end pt-8">
        <div>
            <select class="bg-gray-200 text-md font-medium tracking-wide rounded-md">
                @foreach ($events as $e)
                    <x-dropdown-track track_name="{{ $e->track->name }}">
                    </x-dropdown-track>
                @endforeach
                {{-- @foreach ($track as $t) --}}
                {{-- @endforeach --}}
            </select>
        </div>
    </div>
    {{-- <div class="text-white text-lg">
        @foreach ($events as $e)
            <h1>
                Event name: {{ $e->name }}
            </h1>
        @endforeach
    </div> --}}
</x-app-layout>
