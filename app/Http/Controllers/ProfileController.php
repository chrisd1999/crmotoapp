<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('layouts.profile', compact('user'));
    }

    public function update($locale, Request $request, User $user)
    {
        $user->update([
            'name'  => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back();
    }
}
