<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('layouts.profile', compact('user'));
    }

    public function update($locale, Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user->update($request->only('name', 'email'));

        return redirect()->back()->with('success', 'Profile successfully updated.');
    }
}
