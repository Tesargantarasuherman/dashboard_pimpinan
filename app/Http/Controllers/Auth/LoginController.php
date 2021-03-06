<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Brian2694\Toastr\Facades\Toastr;
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
    protected $redirectTo = RouteServiceProvider::HOME;
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        // session()->flash('success', 'You are logged in!');
        Toastr::info('You are logged in!', 'Welcome', ["positionClass" => "toast-top-center"]);
        return $this->redirectTo;
    }

    // public function redirectTo()
    // {
    //     $role = Auth::user()->role;
    //     switch ($role) {
    //         case 'admin':
    //             Toastr::info('Welcome', 'Info', ["positionClass" => "toast-top-center"]);
    //             return ('home');
    //             break;
    //         case 'basic':
    //             return ('/users-dashboard');
    //             break;

    //         default:
    //             return ('home');
    //             break;
    //     }
    // }
}
