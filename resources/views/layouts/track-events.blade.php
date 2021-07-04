<x-app-layout>

    <h1 class="text-white flex justify-end">
        <span class="text-green-600 font-bold">Track name: </span>{{ $track->name }}
    </h1>
    <div class="text-gray-200 text-semibold tracking-wide">

        @foreach ($track->events as $event)
            <h2>
                <span>Event name: </span>{{ $event->name }}
            </h2>
        @endforeach
    </div>

    <a href="{{ route('events.index')}}">
        <button class="bg-gray-900 text-white py-2 px-4 rounded-md">
            Back
        </button>
    </a>
</x-app-layout>
