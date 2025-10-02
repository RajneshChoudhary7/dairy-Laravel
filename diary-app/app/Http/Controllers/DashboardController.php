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
        return view('dashboard.admin');
    }

    public function staffDashboard()
    {
        return view('dashboard.staff');
    }

    public function supplierDashboard()
    {
        return view('dashboard.supplier');
    }

    public function userDashboard()
    {
        return view('dashboard.user');
    }
}
