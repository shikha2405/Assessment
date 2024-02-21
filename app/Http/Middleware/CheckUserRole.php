<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the role of 'admin'
        if ($request->user() && $request->user()->role !== 'admin') {
            // Redirect the user to the dashboard page with a message
            $request->session()->flash('message', 'Insufficient privileges.');
            return redirect()->route('dashboard')->with('error', 'Insufficient privileges.');
        }

        return $next($request);
    }
}
