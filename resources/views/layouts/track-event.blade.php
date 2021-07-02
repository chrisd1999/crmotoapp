<x-app-layout>
    <div class="flex justify-end pt-4">
        <div class="py-2 px-3 text-black rounded-md bg-gray-200">
            {{ $track['0'] }}
        </div>
    </div>
    <div class="text-white font-semibold text-lg">
        @foreach ($events as $e)
        <a href="{{ route('events.show', $e->id)}}">
            <h1>
                {{ $e->name }}
            </h1>
        </a>
            <p class="font-thin tracking-tight">
                {{ $e->description}}
            </p>
        @endforeach
    </div>
</x-app-layout>
