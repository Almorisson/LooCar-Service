<?php

namespace App\Http\Middleware;

use App\Model\Users;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
       if(Auth::check()) {
            if ($request->user()->user_category == 1)
                return redirect()->route('getAdminForm');
        }

        return $next($request);

    }

}
