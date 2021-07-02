<x-app-layout>
    <div class="flex justify-end pt-8">
        <div>
            <select class="bg-gray-200 text-md font-medium tracking-wide rounded-md">
                <option value="0">--- All Tracks ---</option>
                @foreach ($tracks as $t)
                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex flex-col">
        @foreach ($events as $e)
        <a href="{{ route('events.show', $e->id)}}" class="border-b-2 border-blue-500 py-4">
            <h1 class="text-white text-md inline-block">
                {{ $e->name }}
            </h1>
        </a>
        @endforeach
    </div>
</x-app-layout>
