<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class StaffController extends Controller
{
    public function index()
    {
        $staffId = Auth::id();
        $tasks = Task::where('staff_id', $staffId)
                      ->whereDate('date', today())
                      ->get();

        return view('staff.dashboard', compact('tasks'));
    }
}
