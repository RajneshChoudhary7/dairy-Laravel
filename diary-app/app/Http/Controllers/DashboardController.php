<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === 'staff') {
        return redirect()->route('staff.dashboard');
    } elseif ($user->role === 'supplier') {
        return redirect()->route('supplier.dashboard');
    } elseif ($user->role === 'customer') {
        return redirect()->route('user.dashboard');
    } else {
        return redirect('/login');
    }

    
}

public function adminDashboard()
{
    $users = \App\Models\User::all();  // saare users
    return view('dashboards.admin', compact('users'));
}

public function staffDashboard()
{
    $users = \App\Models\User::where('role', 'staff')->get();
    return view('dashboards.staff', compact('users'));
}

public function userDashboard()
{
    $users = \App\Models\User::where('role', 'customer')->get();
    return view('dashboards.user', compact('users'));
}

public function supplierDashboard()
{
    return view('dashboards.supplier');
}

}
