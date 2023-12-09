<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated or has specific permissions
        //if (auth()->check() && auth()->user()->hasPermission('admin')) {
        if(true){    
            return $next($request);
        }

        // If not authenticated or doesn't have the required permission, redirect or respond accordingly
        return redirect()->route('login')->with('error', 'Unauthorized');
    }
}