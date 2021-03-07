<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class KioskController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('auth.kiosk.index', compact('applications'));
    }

    public function appStatus($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->kioskAccepted = 'Accepted';
        $application->save();

        return redirect(route('kiosk.send'));
    }
    public function kioskForwarded($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->kioskForwarded = 'Yes';
        $application->save();

        if ($application->Email) {
            $data = Application::where('Application_number', $id)->first();
            $applicantName = $data->Applicant_name;
            $applicationNumber = $data->Application_number;
            $recieverMail = $data->Email;
            $msg = "Hi $applicantName, your application for House Pass has been forwarded by the Kiosk Operator.
        Your application number is $applicationNumber. You can keep track of it through the website. Good Luck!";
            $abs = $data->Email;
            $recieverMail = $abs;

            $data = array("body" => $msg);

            Mail::send('auth.kiosk.email', $data, function ($message) use ($recieverMail, $applicantName) {
                $message->to($recieverMail, $applicantName)
                    ->subject("$applicantName Your Application for House Pass is in process");
                $message->from("kiosk@gmail.com", 'House Pass');
                $message->replyTo("kiosk@gmail.com");
            });
        }

        return redirect()->back();
    }
    public function uploaded()
    {
        $applications = Application::all();
        return view('auth.kiosk.uploaded', compact('applications'));
    }

    public function reciept($id)
    {
        $application = Application::where('Application_number', $id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.kiosk.reciept', [
            'application' => $application,
        ]);
        return  $pdf->stream();
    }

    // public function store()
    // {
    //     $kiosks = new Kiosk;




    //     $kiosks->Application_no = request('ApplicationNumber');

    //     $kiosks->save();

    //     return redirect(route('kiosk.send'));
    // }
    public function reject($Application_number)
    {
        $application = Application::where('Application_number', $Application_number)->first();

        if ($application->Email) {
            $data = Application::where('Application_number', $Application_number)->first();
            $applicantName = $data->Applicant_name;
            $applicationNumber = $data->Application_number;
            $recieverMail = $data->Email;
            $msg = "Hi $applicantName, your application of application number $applicationNumber was rejected. Sorry to let you know. Try it giving better information next time.";
            $abs = $data->Email;
            $recieverMail = $abs;

            $data = array("body" => $msg);

            Mail::send('auth.kiosk.mailreject', $data, function ($message) use ($recieverMail, $applicantName) {
                $message->to($recieverMail, $applicantName)
                    ->subject("$applicantName Your Application was Rejected");
                $message->from("kiosk@gmail.com", 'House Pass');
                $message->replyTo("kiosk@gmail.com");
            });
        }
        $application->delete();

        return redirect('/kiosk/dashboard');
    }
    public function done($Application_number)
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
        // $kiosks = Kiosk::all();
        $kiosks = Application::all();

        return view('auth.kiosk.send', compact('kiosks'));
    }
    // public function delete($Application_no)
    // {
    //     // if (Auth::user()->role != 'KioskOperator') {
    //     //     return redirect()->back()->session()->flash('notAllowed', 'Not authorized bro');
    //     // }
    //     // $this->authorize('view', $user);

    //     $kiosk = Kiosk::where('Application_no', $Application_no)->first();
    //     $kiosk->delete();

    //     return redirect()->back();
    // }
}
