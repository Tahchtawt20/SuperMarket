<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'responsable':
                    return redirect('/responsable_dashboard');
                    break;
                case 'caissier':
                    return redirect('/caissier_dashboard');
                    break;
                case 'stock':
                    return redirect('/stock_dashboard');
                    break;

                default:
                    return redirect('/welcome');
                    break;
            }
        }
        return $next($request);
    }
}
