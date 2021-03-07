<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use App\Models\Settlement;
use App\Models\Survey;
use App\Models\Surveyor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SurveyController extends Controller
{


    public function index()
    {
        $surveys = Application::all();
        return view('auth.survey.index', [
            'surveys' => $surveys
        ]);
    }
    public function notesheet($id)
    {
        $application = Application::where('Application_number', $id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.survey.notesheet', [
            'application' => $application,
        ]);
        return  $pdf->stream();
    }
    public function form($id)
    {
        $preview = Application::where('Application_number', $id)->first();
        $settlements = Settlement::where('Application_no', $id)->first();

        return view('auth.survey.form', [
            'applications' => $preview,
            'settlements' => $settlements
        ]);
    }
    // public function accept()
    // {
    //     $survey = new Survey();

    //     $survey->Application_no = request('ApplicationNumber');
    //     $survey->comments = request('Comments');

    //     $survey->save();

    //     return redirect(route('survey.send'));
    // }
    public function accepted($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->surveyAccepted = 'Accepted';
        $application->save();

        return redirect(route('survey.send'));
    }
    public function surveyForwarded($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->surveyForwarded = 'Yes';
        $application->save();

        return redirect()->back();
    }
    public function send()
    {
        $surveys = Application::all();

        return view('auth.survey.send', [
            'surveys' => $surveys,
        ]);
    }
    public function delete($Application_no)
    {

        $survey = Survey::where('Application_no', $Application_no)->first();
        $survey->delete();

        return redirect()->back();
    }
    public function verified()
    {
        $surveys = Application::all();

        return view('auth.survey.verified', [
            'surveys' => $surveys,
        ]);
    }
    public function comment($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->surveyComment = request('surveyComment');
        $application->save();

        $data = Application::where('Application_number', $id)->first();
        // $applicantName = $data->Applicant_name;
        $applicationNumber = $data->Application_number;
        $recieverMail = 'settlement@gmail.com';
        $msg = "I have commented on  $applicationNumber , You can take it over now";
        // $abs = $data->Email;
        // $recieverMail = $abs;

        $data = array("body" => $msg);

        Mail::send('auth.survey.mail', $data, function ($message) use ($recieverMail, $applicationNumber) {
            $message->to($recieverMail, $applicationNumber)
                ->subject("$applicationNumber way to go!");
            $message->from("survey@gmail.com", 'House Pass');
            $message->replyTo("survey@gmail.com");
        });


        return redirect()->back();
    }
}
