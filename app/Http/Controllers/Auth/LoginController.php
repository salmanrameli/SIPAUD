<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    public function username()
    {
        return 'id';
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';
    /*
    protected function authenticated($request, $user)
    {
        if($user->role = 'Tata Usaha') {
            return redirect()->intended('/tata_usaha');
        }
        elseif($user->role = 'Guru') {
            return redirect()->intended('/guru');
        }
        //else return redirect('/');
    }
*/
    protected function authenticated($request, $user)
    {
        if(Auth::check() && Auth::user()->jabatan == 'Tata Usaha') {
            return redirect()->intended('/tu');
        }
        if(Auth::check() && Auth::user()->jabatan == 'Guru') {
            return redirect()->intended('/guru');
        }
        if(Auth::check() && Auth::user()->jabatan == 'Kepala Sekolah') {
            return redirect()->intended('/kepala_sekolah');
        }
        //else return redirect('/');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
