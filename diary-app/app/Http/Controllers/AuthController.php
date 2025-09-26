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
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,staff,customer,supplier',
        ]);

        $imageName = null;
        if ($request->face_image) {
            $image = $request->face_image;
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = 'faces/' . time() . '.png';
            Storage::disk('public')->put($imageName, base64_decode($image));
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'face_image' => $imageName,
        ]);

        Auth::login($user); // Signup ke baad automatically login
        return redirect()->route($this->getDashboardRoute($user->role))
                         ->with('success', 'Signup successful! Welcome.');
    }

    // Show Login Form
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login Submit (Email + Password)
    public function loginSubmit(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->route($this->getDashboardRoute($user->role));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    // Face Authentication Login
    public function faceLogin(Request $request)
{
    $imageData = $request->input('face_image');
    if(!$imageData) return response()->json(['success'=>false]);

    // Compare with stored face image (for demo, first user le rahe)
    $user = User::first(); 

    if($user){
        Auth::login($user);
        $redirect = $user->role == 'admin' ? route('admin.dashboard') : route('user.dashboard');
        return response()->json(['success'=>true, 'redirect'=>$redirect]);
    }

    return response()->json(['success'=>false]);
}

    // Dummy face match function (Replace with real face recognition logic)
    private function matchFace($capturedImage, $storedImagePath) {
        // TODO: Implement actual face recognition here (OpenCV / face-api.js)
        // For now, simple placeholder returning false
        return false;
    }

    // Helper: Return dashboard route based on user role
    private function getDashboardRoute($role) {
        switch ($role) {
            case 'admin':
                return 'admin.dashboard';
            case 'staff':
                return 'staff.dashboard';
            case 'supplier':
                return 'supplier.dashboard';
            default:
                return 'user.dashboard'; // customer
        }
    }
}
