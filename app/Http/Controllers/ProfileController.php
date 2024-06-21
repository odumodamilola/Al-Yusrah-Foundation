<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ProfileController extends Controller
{
    // public function index()
    // {
    //     return view('admin.dashboard.index');
    // }

    // public function edit()
    // {
    //     return view('admin.dashboard.edit');
    // }


    // public function update(Request $request)
    // {
    //     $user = User::find(Auth::id());

    //     $validator = Validator::make($request->all(), [
    //         'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255',
    //         'old_password' => 'required_with:password|password:web',
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('profile.edit')->withErrors($validator)->withInput();
    //     }

    //     // Handle profile image upload
    //     if ($request->hasFile('profile_image')) {
    //         // Delete previous profile image if it exists
    //         if ($user->profile_image) {
    //             Storage::disk('public')->delete($user->profile_image);
    //         }
    //         $user->profile_image = $request->file('profile_image')->store('profile_images', 'public');
    //     }

    //     // Update other profile fields
    //     $user->firstname = $request->input('firstname');
    //     $user->lastname = $request->input('lastname');
    //     $user->email = $request->input('email');

    //     // Update password if provided
    //     if ($request->filled('password')) {
    //         $user->password = Hash::make($request->input('password'));
    //     }

    //     // Save the user model
    //     $user->save();

    //     return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    // }
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function edit()
    {
        return view('admin.dashboard.edit');
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $validator = Validator::make($request->all(), [
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile.edit')->withErrors($validator)->withInput();
        }

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete previous profile image if it exists
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
            $user->profile_image = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Update other profile fields
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');

        // Save the user model
        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }

    public function changePassword()
    {
        return view('admin.dashboard.change-password');
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::id());

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile.password')->withErrors($validator)->withInput();
        }

        // Update password if provided
        $user->password = Hash::make($request->input('password'));

        // Save the user model
        $user->save();

        return redirect()->route('profile.index')->with('success', 'Password updated successfully');
    }
}
