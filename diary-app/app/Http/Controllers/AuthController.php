<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
            'face_image' => 'required|string', // Make face image required for signup
        ]);

        try {
            // Process face image
            $imageData = $request->face_image;
            $imageData = str_replace('data:image/png;base64,', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            $imageName = 'faces/' . uniqid() . '_' . time() . '.png';
            
            // Save the image
            Storage::disk('public')->put($imageName, base64_decode($imageData));

            // Create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'face_image' => $imageName,
            ]);

            Auth::login($user);
            
            return redirect()->route($this->getDashboardRoute($user->role))
                            ->with('success', 'Signup successful! Welcome.');

        } catch (\Exception $e) {
            Log::error('Signup error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Signup failed. Please try again.']);
        }
    }

    // Show Login Form
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login Submit (Email + Password)
   public function loginSubmit(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $user = Auth::user();
        return redirect()->route($this->getDashboardRoute($user->role))
                        ->with('success', 'Login successful!');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
    // (Removed duplicate login logic)
        
    }

    // Face Authentication Login - IMPROVED VERSION
    public function faceLogin(Request $request)
    {
        $request->validate([
            'face_image' => 'required|string',
        ]);

        try {
            $imageData = $request->face_image;
            $imageData = str_replace('data:image/png;base64,', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            
            // Create temporary file for comparison
            $tempImagePath = tempnam(sys_get_temp_dir(), 'face_login');
            file_put_contents($tempImagePath, base64_decode($imageData));

            $matchedUser = null;
            $users = User::whereNotNull('face_image')->get();

            foreach ($users as $user) {
                $similarity = $this->compareFaces($tempImagePath, $user->face_image);
                
                // Adjust threshold as needed (0.6 = 60% similarity)
                if ($similarity > 0.6) {
                    $matchedUser = $user;
                    break;
                }
            }

            // Clean up temp file
            unlink($tempImagePath);

            if ($matchedUser) {
                Auth::login($matchedUser);
                $redirectRoute = $this->getDashboardRoute($matchedUser->role);
                
                return response()->json([
                    'success' => true, 
                    'redirect' => route($redirectRoute),
                    'message' => 'Face recognition successful!'
                ]);
            }

            return response()->json([
                'success' => false, 
                'message' => 'Face not recognized. Please try again or use email login.'
            ], 401);

        } catch (\Exception $e) {
            Log::error('Face login error: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Authentication failed. Please try again.'
            ], 500);
        }
    }

    // Enhanced face comparison function
    private function compareFaces($capturedImagePath, $storedImagePath)
    {
        // Method 1: Simple image comparison (for basic testing)
        $similarity = $this->compareImagesSimple($capturedImagePath, $storedImagePath);
        
        // Method 2: For production, integrate with a proper face recognition service
        // return $this->compareWithFaceRecognitionService($capturedImagePath, $storedImagePath);
        
        return $similarity;
    }

    // Basic image comparison (placeholder - replace with real face recognition)
    private function compareImagesSimple($image1Path, $image2Path)
    {
        // This is a VERY basic comparison - not suitable for production!
        // In production, you should use:
        // 1. face-api.js on backend (Node.js) or 
        // 2. Python OpenCV with Laravel bridge
        // 3. Cloud APIs (AWS Rekognition, Azure Face API)
        
        try {
            if (!file_exists($image1Path) || !Storage::disk('public')->exists($image2Path)) {
                return 0;
            }

            // Get stored image full path
            $storedFullPath = Storage::disk('public')->path($image2Path);
            
            // Basic file comparison (this is just a demo!)
            $size1 = filesize($image1Path);
            $size2 = filesize($storedFullPath);
            
            // Simple size-based "similarity" (not real face recognition)
            $sizeSimilarity = 1 - abs($size1 - $size2) / max($size1, $size2);
            
            return max(0, min(1, $sizeSimilarity)); // Return between 0-1
            
        } catch (\Exception $e) {
            Log::error('Image comparison error: ' . $e->getMessage());
            return 0;
        }
    }

    // Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    // Helper: Return dashboard route based on user role
    private function getDashboardRoute($role) {
        $routes = [
            'admin' => 'admin.dashboard',
            'staff' => 'staff.dashboard',
            'supplier' => 'supplier.dashboard',
            'customer' => 'user.dashboard',
        ];
        
        return $routes[$role] ?? 'user.dashboard';
    }


    // In your AuthController methods, update the redirects:

}