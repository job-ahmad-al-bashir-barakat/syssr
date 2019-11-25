<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectMemberIfVerified
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
            $user = Auth::user();
            if($user->type == 'M' && $user->status == 'I') {
                if(collect(\Route::getCurrentRoute()->gatherMiddleware())->search('auth')) {
                    \Session::flash('status',trans('app.verify_account_member'));
                    return redirect()->home();
                }

            }
        }

        return $next($request);
    }
}
