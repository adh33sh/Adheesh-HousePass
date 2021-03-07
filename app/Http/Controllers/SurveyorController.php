<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Settlement;
use App\Models\Survey;
use App\Models\Surveyor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SurveyorController extends Controller
{
    public function index()
    {
        $surveyors = Application::all();

        return view('auth.surveyor.index', [
            'surveyors' => $surveyors,
        ]);
    }
    public function form($id)
    {
        $preview = Application::where('Application_number', $id)->first();
        $settlements = Settlement::where('Application_no', $id)->first();

        return view('auth.surveyor.form', [
            'applications' => $preview,
            'settlements' => $settlements
        ]);
    }

    public function send()
    {
        $surveyors = Application::all();

        return view('auth.surveyor.send', [
            'surveyors' => $surveyors,
        ]);
    }
    public function notesheet($id)
    {
        $application = Application::where('Application_number', $id)->first();


        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.surveyor.notesheet', [
            'application' => $application,


        ]);
        return  $pdf->stream();
    }
    public function verified($id)
    {
        $surveyor = Application::where('Application_number', $id)->first();
        $surveyor->surveyorVerified = 'Verified';
        $surveyor->save();

        return redirect(route('surveyor.send'));
    }
    public function surveyorForwarded($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->surveyorForwarded = 'Yes';
        $application->save();

        return redirect()->back();
    }
    public function delete($Application_no)
    {

        $surveyor = Surveyor::where('Application_no', $Application_no)->first();
        $surveyor->delete();

        return redirect()->back();
    }
}
