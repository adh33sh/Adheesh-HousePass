<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use App\Models\Settlement;
use App\Models\Survey;
use App\Models\Surveyor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class SettlementController extends Controller
{


    public function index()
    {
        $kiosks = Application::all();
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
        $settlements = Application::all();

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
    public function accept($id)
    {
        $settlements = Application::where('Application_number', $id)->first();
        $settlements->DDFD = request('DDFD');
        $settlements->Target_date = request('TargetDate');
        $settlements->settlementAccepted = 'Accepted';

        $settlements->save();

        return redirect(route('settlement.send'));
    }
    public function settlementForwarded($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->settlementForwarded = 'Yes';
        $application->save();

        return redirect()->back();
    }
    public function check()
    {
        $settlements = Application::all();

        return view('auth.settlement.check', [
            'settlements' => $settlements,
        ]);
    }
    // public function approve($id)
    // {
    //     $settlement = Settlement::where('Application_no', $id)->first();
    //     $settlement->Status = "Yes";
    //     $settlement->save();
    //     return redirect('/settlement/approved');
    // }
    // public function approved()
    // {

    //     $settlements = Settlement::all();

    //     return view('auth.settlement.approved', [
    //         'settlements' => $settlements,
    //     ]);
    // }

    public function approved($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->settlementVerified = 'Verified';
        $application->save();

        return redirect(route('settlement.verified'));
    }

    public function verified()
    {
        $settlements = Application::all();
        return view('auth.settlement.approved', compact('settlements'));
    }
    public function finalSend($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->settlementfinalSend = 'Done';
        $application->save();

        return redirect()->back()->with('alert', 'done');
    }

    public function reciept($id)
    {
        $application = Application::where('Application_number', $id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.settlement.reciept', [
            'application' => $application,
        ]);
        return  $pdf->stream();
    }
    public function final()
    {
        $settlements = Application::all();

        return view('auth.settlement.final', compact('settlements'));
    }
    public function settlementSigned($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->settlementSigned = 'Signed';
        $application->save();

        return redirect(route('settlement.upload'));
    }

    public function settlementUploaded($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->settlementUploaded = 'Uploaded';
        $application->save();

        if ($application->Email) {
            $data = Application::where('Application_number', $id)->first();
            $applicantName = $data->Applicant_name;
            $applicationNumber = $data->Application_number;
            $recieverMail = $data->Email;
            $msg = "Hi $applicantName, Your application for House Pass has been accepted! You can now go to the Kiosk Center and take your reciept. Your application number is $applicationNumber";
            // $abs = $data->Email;
            // $recieverMail = $abs;

            $data = array("body" => $msg);

            Mail::send('auth.settlement.email', $data, function ($message) use ($recieverMail, $applicantName) {
                $message->to($recieverMail, $applicantName)
                    ->subject("$applicantName way to go!");
                $message->from("settlement@gmail.com", 'House Pass');
                $message->replyTo("settlement@gmail.com");
            });
        }


        return redirect()->back();
    }
    public function upload()
    {
        $settlements = Application::all();
        return view('auth.settlement.upload', compact('settlements'));
    }

    public function notesheet($id)
    {
        $application = Application::where('Application_number', $id)->first();


        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.settlement.notesheet', [
            'application' => $application,


        ]);
        return  $pdf->stream();
    }
}
