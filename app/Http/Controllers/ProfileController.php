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
        return view('layouts.profile', ['user' => Auth::user()]);
    }

    public function update(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
            // TODO: Add this in production
            // email:rfc,dns
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user->update($request->only('name', 'email'));

        return redirect()->back()->with('success', 'Profile successfully updated.');
    }
}
