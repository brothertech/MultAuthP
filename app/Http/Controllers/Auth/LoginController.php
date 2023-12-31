<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo(){
        switch(Auth::user()->role){
            case 1: 
                return $this->redirectTo = '/superadmin';

                break;
            case 2:
                return $this->redirectTo = '/admin';

                break;
            case 3:
                return $this->redirectTo = '/teacher';
                break;

            case 4:
                return $this->redirectTo = '/scout';
                break;
            case 5:
                return $this->redirectTo = '/student';
                break;
            case 6:
                return $this->redirectTo = 'user';
                break;
            default:
            return $this->redirectTo = '/login';



            
        }



    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
