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
        return view('layouts.profile');
    }

    public function update(Request $request)
    {
        /**
         * @var User model instance
         */
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
            // TODO: Add this in production
            // email:rfc,dns
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->update($request->only('name', 'email'));

        return back()->with('success', 'Profile successfully updated.');
    }
}
