<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (!Auth::check()) {
                return redirect()->route('login');
            }
            //  role 1 = kiosk
            if (Auth::user()->role == 'KioskOperator') {
                return redirect()->route('kiosk.dashboard');
            }
            //role 2 = settlement
            if (Auth::user()->role == 'SettlementOfficer') {
                return redirect()->route('settlement.dashboard');
            }
            //role 3 = survey
            if (Auth::user()->role == 'SurveyOfficer') {
                return redirect()->route('survey.dashboard');
            }
            //role 4 = surveyor
            if (Auth::user()->role == 'Surveyor') {
                return redirect()->route('surveyor.dashboard');
            }
            //role 5 = clerk
            if (Auth::user()->role == 'SectionClerk') {
                return redirect()->route('clerk.dashboard');
            }
        }
    }

    // protected $redirectTo;
    // public function redirectTo()
    // {
    //     switch (Auth::user()->role) {
    //         case 1:
    //             $this->redirectTo = '/kiosk/dashboard';
    //             return $this->redirectTo;
    //             break;
    //         case 2:
    //             $this->redirectTo = '/settlement/dashboard';
    //             return $this->redirectTo;
    //             break;
    //         case 3:
    //             $this->redirectTo = '/survey/dashboard';
    //             return $this->redirectTo;
    //             break;
    //         case 4:
    //             $this->redirectTo = '/surveyor/dashboard';
    //             return $this->redirectTo;
    //             break;
    //         case 5:
    //             $this->redirectTo = '/clerk/dashboard';
    //             return $this->redirectTo;
    //             break;
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
