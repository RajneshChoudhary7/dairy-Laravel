<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function adminDashboard() {
        return view('dashboards.admin');
    }

    public function userDashboard() {
        return view('dashboards.user');
    }

    public function staffDashboard() {
        return view('dashboards.staff');
    }

    public function supplierDashboard() {
        return view('dashboards.supplier');
    }
}
