<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;
class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //if ($this->auth->check()) {
            // if (Auth::user()->type == 3) {
            //     return redirect('/merchant');
            // } elseif (Auth::user()->type == 2) {
            //     return redirect('/manage');
            // } else {
            //     return redirect('/');
            // }
        //}
        if ($this->auth->check()) {
            if(Auth::user()->type == 4){
            return redirect('/');
            }else{
                return redirect('/merchant');
            }
        }

        return $next($request);
    }
}
