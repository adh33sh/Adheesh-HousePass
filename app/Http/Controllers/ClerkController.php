<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ClerkController extends Controller
{



    public function index()
    {
        $clerks = Application::all();

        return view('auth.clerk.index', compact('clerks'));
    }
    public function reciept($id)
    {
        $application = Application::where('Application_number', $id)->first();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('auth.clerk.reciept', [
            'application' => $application,
        ]);
        return  $pdf->stream();
    }
    public function clerkSent($id)
    {
        $application = Application::where('Application_number', $id)->first();
        $application->clerkSent = 'Yes';
        $application->save();

        return redirect()->back();
    }
}
