<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class Authorized
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( !auth()->check() ) { return abort(403); }

        if ( in_array($request->route()->getActionMethod(), ['destroy']) ) 
        {
            if ( auth()->user()->hasRole('cashier') ) 
                {
                return abort(403);
            }
        }

        return $next($request);
    }
}
