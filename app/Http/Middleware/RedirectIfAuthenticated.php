<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     $user = Auth::user();

            //     if ($user->role == 'admin') {
            //         return redirect('/admin');
            //     } elseif ($user->role == 'client') {
            //         return redirect('/client');
            //     } elseif ($user->role == 'eleveur') {
            //         return redirect('/eleveur');
            //     }
            // }
        }

        return $next($request);
    }
}
