<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // Redirect user to role-based dashboard
        $role = \Illuminate\Support\Facades\Auth::user()->role;
        switch($role){
            case 'admin': return redirect()->route('admin.dashboard');
            case 'staff': return redirect()->route('staff.dashboard');
            case 'supplier': return redirect()->route('supplier.dashboard');
            case 'customer': return redirect()->route('user.dashboard');
            default: return redirect()->route('dashboard');
        }
    }

    public function adminDashboard(){ return view('dashboards.admin'); }
    public function staffDashboard(){ return view('dashboards.staff'); }
    public function supplierDashboard(){ return view('dashboards.supplier'); }
    public function userDashboard(){ return view('dashboards.user'); }
}
