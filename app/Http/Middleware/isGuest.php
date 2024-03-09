<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Jika sudah login, tidak boleh akses link tersebut lagi
        if (Auth::check()) {
            return redirect()->route('detail')->with('success', 'Kamu sudah dalam keadaan login');
        }
        return $next($request);
    }
}
