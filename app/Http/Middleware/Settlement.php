<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Settlement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        //role 1 = kiosk
        if (Auth::user()->role == 'KioskOperator') {
            return redirect()->route('kiosk.dashboard');
        }
        //role 2 = settlement
        if (Auth::user()->role == 'SettlementOfficer') {
            return $next($request);
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
