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
        $surveys = Survey::all();

        return view('auth.surveyor.index', [
            'surveys' => $surveys,
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
    public function verified()
    {
        $surveyor = new Surveyor();

        $surveyor->Application_no = request('ApplicationNumber');
        $surveyor->Verified = request('Verified');

        $surveyor->save();

        return redirect(route('surveyor.send'));
    }
    public function send()
    {
        $surveyors = Surveyor::all();
        $surveys = Survey::all();

        return view('auth.surveyor.send', [
            'surveyors' => $surveyors,
            'surveys' => $surveys,
        ]);
    }
    public function notesheet($id)
    {
        $applications = Application::where('Application_number', $id)->first();
        $settlements = Settlement::where('Application_no', $id)->first();
        $surveyor = Surveyor::where('Application_no', $id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.surveyor.notesheet', [
            'applications' => $applications,
            'settlements' => $settlements,
            'surveyor' => $surveyor,

        ]);
        return  $pdf->stream();
    }
}
