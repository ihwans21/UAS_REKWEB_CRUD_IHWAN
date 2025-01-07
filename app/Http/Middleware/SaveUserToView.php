<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class SaveUserToView
{
    public function handle($request, Closure $next)
    {
        View::share('auth.user', auth()->user());

        return $next($request);
    }
}
