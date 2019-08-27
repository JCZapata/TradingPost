<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->role != User::ROLE_ADMIN) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
