<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class AdminAuth
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->type != \UserType::SUPER_ADMIN) {
            return redirect('/login')->with('error', 'You don\'t have admin access');
        }

        return $next($request);
    }
}

?>