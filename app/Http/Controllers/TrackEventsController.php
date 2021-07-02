<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Event;
use Illuminate\Http\Request;

class TrackEventsController extends Controller
{
    public function show($locale, $id)
    {
        $events = Event::where('track_id', $id)->get();

        return view('layouts.track-event', compact('events'));
    }
}
