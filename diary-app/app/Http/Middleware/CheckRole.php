<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\alert;


class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        Log::info('Middleware called!');
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($user->role !== $role) {
            return redirect('/dashboard'); // ya koi 403 page
        }

        return $next($request);
    }
}
