<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Track;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        // $events = Event::with('track')->get();
        // $tracks = $events->unique('track.id')->pluck('track.name', 'track.id')->toArray();

        $events = Event::all();
        $tracks = Track::select('id', 'name')->get()->sortBy('name');
    
        return view('layouts.events', compact('events', 'tracks'));
    }

    public function show($locale, Event $event)
    {
        $track = $event->track;

        return view('events', compact('event', 'track'));
    }
}
