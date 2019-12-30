<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckStatus
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
        $response = $next($request);

        if(Auth::check() && Auth::user()->type == 'M' && Auth::user()->status == 'I'){

            Auth::logout();

            $request->session()->flash('status',trans('app.verify_account_member'));

            return redirect()->home();
        }

        return $response;
    }
}
