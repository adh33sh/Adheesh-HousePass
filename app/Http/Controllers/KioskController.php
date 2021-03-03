<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class KioskController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('auth.kiosk.index', compact('applications'));
    }
    public function gen()
    {
        $applications = Application::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('test', compact('applications'));
        return $pdf->stream();

        // $applications = Application::all();
        // $pdf = PDF::loadView('auth.kiosk.index', compact('applications'));
        // return $pdf->stream();
    }
    public function store()
    {
        $kiosks = new Kiosk;

        $kiosks->Application_no = request('ApplicationNumber');


        $kiosks->save();

        return redirect(route('kiosk.send'));
    }
    public function reject($Application_number)
    {
        $application = Application::where('Application_number', $Application_number)->first();
        $application->delete();

        return redirect('/kiosk/dashboard');
    }
    public function reason()
    {
        return view('auth.kiosk.reason');
    }
    public function send()
    {
        $kiosks = Kiosk::all();

        return view('auth.kiosk.send', compact('kiosks'));
    }
    public function delete($Application_no)
    {
        // if (Auth::user()->role != 'KioskOperator') {
        //     return redirect()->back()->session()->flash('notAllowed', 'Not authorized bro');
        // }
        // $this->authorize('view', $user);

        $kiosk = Kiosk::where('Application_no', $Application_no)->first();
        $kiosk->delete();

        return redirect()->back();
    }
}
