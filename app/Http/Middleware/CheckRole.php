<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $roles)
        {   
            if (! $request->user()->hasRole($roles)) {
                abort('403', 'No tienes permisos para acceder a esta página');
            }
    
            return $next($request);
        }

}
