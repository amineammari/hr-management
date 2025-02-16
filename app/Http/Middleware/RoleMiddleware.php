<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        // Check if the user has the required role
        if (Auth::user()->role === $role) {
            return $next($request);
        }

        // If the user doesn't have the required role, abort with a 403 error
        abort(403, 'Unauthorized action.');
    }
}