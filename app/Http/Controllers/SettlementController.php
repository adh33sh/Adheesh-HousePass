<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use App\Models\Settlement;
use Illuminate\Http\Request;

class SettlementController extends Controller
{


    public function index()
    {
        $kiosks = Kiosk::all();
        return view('auth.settlement.index', [
            'kiosks' => $kiosks
        ]);
    }
    public function form($Application_number)
    {
        $preview = Application::where('Application_number', $Application_number)->first();

        return view('auth.settlement.form', [
            'applications' => $preview,
        ]);
    }
    public function delete($Application_no)
    {
        // if (Auth::user()->role != 'KioskOperator') {
        //     return redirect()->back()->session()->flash('notAllowed', 'Not authorized bro');
        // }
        // $this->authorize('view', $user);

        $settlements = Settlement::where('Application_no', $Application_no)->first();
        $settlements->delete();

        return redirect()->back();
    }
    public function reject($Application_number)
    {
        $application = Application::where('Application_number', $Application_number)->first();
        $application->delete();

        return redirect('/kiosk/dashboard');
    }
    public function send()
    {
        $settlements = Settlement::all();

        return view('auth.settlement.send', [
            'settlements' => $settlements,
        ]);
    }

    public function searchform()
    {
        $kiosks = Kiosk::all();
        $search = request()->query('Application_number');
        if ($search) {
            // dd(request()->query('Application_number'));
            $applications = Application::where('Application_number', 'LIKE', '%' . $search . '%')->get();
        }
        return view('auth.settlement.searchform', [
            'applications' => $applications,
            'kiosks' => $kiosks
        ]);
    }
    public function accept()
    {
        $settlements = new Settlement();
        $settlements->Application_no = request('ApplicationNumber');
        $settlements->DDFD = request('DDFD');
        $settlements->Target_date = request('TargetDate');
        $settlements->Remarks = request('Remarks');

        $settlements->save();

        return redirect(route('settlement.send'));
    }
}
