<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){

            return redirect()->route('login');
        }
        //super admin role is 1
        if(Auth::user()->role == 1){

            return redirect()->route('superadmin');
        }

        //admin role is 2
        if(Auth::user()->role ==2){

            return redirect()->route('/admin');
        }

        //teacher role is 3
        if(Auth::user()->role ==3){

            return redirect()->route('/teacher');
        }

        //scout role is 4

        if(Auth::user()->role == 4){

            return redirect()->route('/scout');
        }

        //student role is 5
        if(Auth::user()->role ==5){

            return $next($request);
        }

         //user role is 6

         if(Auth::user()->role ==6){

            return redirect()->route('/user');
        }

    }
}
