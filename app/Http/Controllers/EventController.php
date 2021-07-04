<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Track;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;

class EventController extends Controller
{

    public function index()
    {
        // $events = Event::with('track')->get();
        // $tracks = $events->unique('track.id')->pluck('track.name', 'track.id')->toArray();

        // $events = Event::all();

        $events = QueryBuilder::for(Event::class)
            ->allowedFilters([AllowedFilter::exact('track_id')])->get();

        $tracks = Track::select('id', 'name')->get()->sortBy('name');

        // $tracks = QueryBuilder::for(Track::class)
        //     ->allowedIncludes('id')->select('id', 'name')->get();

        return view('layouts.events', compact('events', 'tracks'));
    }

    public function show($locale, Event $event)
    {
        $track = $event->track;

        return view('events', compact('event', 'track'));
    }

    public function filter($locale, Request $request)
    {
        if ($request->input('tracks') == 0) {
            return redirect()->route('events.index');
        }

        $param = 'filter[track_id]=' . $request->input('tracks');

        return redirect()->route('events.index', [$param]);
        // dd($request->all());
    }
}
