<?php

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
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
         //if (auth()->check() && auth()->user()->is_admin)
         if( Auth()->check() && Auth()->user()->type== 'menber')

         return $next($request);
 

         return redirect('/');
      }
    }

