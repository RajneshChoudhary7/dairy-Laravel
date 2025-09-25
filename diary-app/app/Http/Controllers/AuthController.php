<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // Show Signup Form
    public function showSignup() {
        return view('auth.signup');
    }

    // Handle Signup Submit
    public function signupSubmit(Request $request) {
        $request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6',
            'role'=>'required|in:admin,staff,customer,supplier',
        ]);

        $imageName = null;
        if($request->face_image){
            $image = $request->face_image;
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = 'faces/' . time() . '.png';
            Storage::disk('public')->put($imageName, base64_decode($image));
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'face_image' => $imageName,
        ]);

        return redirect()->route('login')->with('success', 'Signup successful! Please login.');
    }

    // Show Login Form
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login Submit
    public function loginSubmit(Request $request) {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
