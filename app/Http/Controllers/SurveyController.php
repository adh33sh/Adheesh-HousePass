<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Kiosk;
use App\Models\Settlement;
use App\Models\Survey;
use App\Models\Surveyor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SurveyController extends Controller
{


    public function index()
    {
        $settlements = Settlement::all();
        return view('auth.survey.index', [
            'settlements' => $settlements
        ]);
    }
    public function notesheet($id)
    {
        $applications = Application::where('Application_number', $id)->first();
        $settlements = Settlement::where('Application_no', $id)->first();


        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.survey.notesheet', [
            'applications' => $applications,
            'settlements' => $settlements,


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
    public function accept()
    {
        $survey = new Survey();

        $survey->Application_no = request('ApplicationNumber');
        $survey->comments = request('Comments');

        $survey->save();

        return redirect(route('survey.send'));
    }
    public function send()
    {
        $surveys = Survey::all();

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
        $surveyors = Surveyor::all();
        $surveys = Survey::all();

        return view('auth.survey.verified', [
            'surveyors' => $surveyors,
            'surveys' => $surveys,
        ]);
    }
}
