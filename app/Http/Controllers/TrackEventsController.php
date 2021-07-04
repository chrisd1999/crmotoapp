<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TrackEventsController extends Controller
{
    public function show(Request $request)
    {
        try {
            $track = Track::with('events')->select('id', 'name')->findOrFail($request->track);
        } catch (ModelNotFoundException $err) {
            return redirect()->route('events.index');
        }

        return view('layouts.track-events', compact('track'));
    }
}
