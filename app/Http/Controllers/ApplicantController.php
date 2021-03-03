<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApplicantController extends Controller
{



    //
    public function index()
    {
        $applicants = Applicant::all();


        return view('applicant.index', [
            'applicants' => $applicants,
        ]);
    }
    public function create()
    {
        // return view('applicant.create');
        return view('applicant.create');
    }
    // public function form()
    // {
    //     return view('applicant.form');
    // }
    public function show($id)
    {
        // dd($id);
        $user = Applicant::findOrFail($id);
        return view('applicant.show', [
            'users' => $user,
        ]);
    }
    public function store()
    {
        $applicant = new Applicant();

        $applicant->Last_name = request('last_name');

        $applicant->save();



        return redirect('/')->with('mssg', 'Form Filled Successfully!');
    }





    public function apitest()
    {
        $response = Http::get('https://api.chucknorris.io/jokes/random');
        $json = json_decode($response);

        $myJoke = $json->value;
        return view('apitest', compact('myJoke'));
    }
}
