<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth::user()->role;
        $is_member = Auth::user()->is_member;

        if ( $role == 0 && $is_member == 1){
            return $next($request);
        }else{
            // return redirect()->route('login');
            abort(403, 'Unauthorised action!');
        }
    }
   
}
