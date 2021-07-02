<x-app-layout>
    <div class="flex justify-end pt-8">
        <div class="text-white flex space-x-4">
            <div>
                Event: {{ $event->name }}
            </div>
            <div class="flex flex-col flex-wrap">
                <div>
                    Track: {{ $track->name}}
                </div>
                <div class="flex flex-wrap text-red-400">
                    Track description: {{ $track->description }}
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('events.index')}}" class="p-4 bg-gray-500">
        Back
    </a>
</x-app-layout>
