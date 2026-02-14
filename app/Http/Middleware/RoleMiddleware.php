<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // If user is not authenticated
        if (!$request->user()) {
            abort(403, 'Unauthorized.');
        }
        
        // Get the user's role
        $userRole = $request->user()->role;
        
        // Flatten roles array in case they contain pipes (e.g., 'super-admin|admin')
        $allowedRoles = [];
        foreach ($roles as $role) {
            // Split by pipe if it contains pipe-separated values
            $allowedRoles = array_merge($allowedRoles, explode('|', $role));
        }
        
        // Check if user role is in the allowed roles
        if (!in_array($userRole, $allowedRoles)) {
            abort(403, 'Unauthorized.');
        }
        
        return $next($request);
    }
}
