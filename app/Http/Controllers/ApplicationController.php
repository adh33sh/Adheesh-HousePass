<?php

namespace App\Http\Controllers;


use App\Models\Applicant;
use App\Models\Application;
use App\Models\Kiosk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use PDF;

class ApplicationController extends Controller
{

    public function index()
    {

        $applications = Application::all();

        return view('application.index', [
            'applications' => $applications
        ]);
    }

    public function create()
    {
        $applications = Application::all();
        return view('application.create', [
            'applications' => $applications
        ]);
    }


    public function store(Request $request)
    {


        // $path = $request->file('file2')->store('uploads');
        // return $path;

        // $imagePath1 =  request('file1')->store('uploads', 'public');
        // $imagePath2 =  request('file2')->store('uploads', 'public');

        // dd(request('file2'));

        // $this->validate($request, [
        //     'file1' => '',
        //     // 'file2' => 'image|nullable|max:1999'
        // ]);
        // //Handle File Upload
        // if ($request->hasFile('file1')) {
        //     //Get filename with extention
        //     $filenameWithExt = $request->file('file1')->getClientOriginalExtension();
        //     //Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get just ext
        //     $extension = $request->file('file1')->getClientOriginalExtension();
        //     //Filename to Store
        //     $filenameToStore = $filename . '_' . time() . '.' . $extension;
        //     //Upload Image
        //     $path = $request->file('file1')->storeAs('public/uploads', $filenameToStore);
        // } else {
        //     $filenameToStore = 'noFIleUploaded';
        // }

        function randomString($n)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $str = '';
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $str .= $characters[$index];
            }
            return $str;
        }

        if ($request->hasFile('file1')) {
            $filenameWithExt = $request->file('file1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('file1')->getClientOriginalExtension();
            $filenameToStore =  $filename . '_' . randomString(8) . '.' . date('h-i-s') . '.' . $ext;
            $request->file('file1')->storeAs('/certificate', $filenameToStore);
        }



        $varFile = request('attachments');
        if ($request->hasFile('attachments')) {
            $filenameToStore2 =  randomString(8) . '.' . date('h-i-s') . '.' . request('attachments')->getClientOriginalExtension();
            $varFile->storeAs('/supportingDocs', $filenameToStore2);
        }



        function randomNumber($n)
        {
            $characters = '0123456789';
            $num = '';
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $num .= $characters[$index];
            }
            return $num;
        }







        $applications = new Application();




        // if ($request->file('file1')) {
        //     $file = $request->file('file1');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $request->file('file1')->storeAs('public/uploads', $filename);
        //     $applications->file1 = $filename;
        // }

        $applications->Application_number = randomNumber(9);
        $applications->Application_name = request('inputApplicationName');
        $applications->Applicant_name = request('inputApplicantName');
        $applications->DOB = request('inputDOB');
        $applications->Certificate_to_be_uploaded = request('inputCTBU');
        $applications->file1 = $filenameToStore;
        // $applications->file1 = $filenameToStore;
        $applications->Gender = request('inputGender');
        $applications->Email = request('inputEmail4');
        $applications->Contact_no = request('inputContactNo');
        $applications->Education = request('inputEducation');
        $applications->Religion = request('inputReligion');
        $applications->Occupation = request('inputOccupation');
        $applications->Relationship_type = request('inputRelationshipType');
        $applications->Enter_name = request('inputRelationName');
        $applications->DOB_2 = request('inputDOB2');


        $applications->Permanent_address_door_no = request('inputPADNo');
        $applications->Permanent_address_sub_locality_1 = request('inputPASublocality1');
        $applications->Permanent_address_sub_locality_2 = request('inputPASublocality2');
        $applications->Permanent_address_location = request('inputPALocation');

        $applications->City = request('inputCity');
        $applications->Permanent_address_disrict = request('inputPADistrict');
        $applications->Permanent_state = request('inputPAState');
        $applications->Pin_Code = request('inputPinCode');
        $applications->Permanent_address_country = request('inputPACountry');
        $applications->Permanent_police_station = request('inputPAPS');
        $applications->Permanent_post_office = request('inputPAPO');

        $applications->Present_address_door_no = request('inputPADNoPre');
        $applications->Present_address_sub_locality_1 = request('inputPASublocality1Pre');
        $applications->Present_address_sub_locality_2 = request('inputPASublocality2Pre');
        $applications->Present_address_location = request('inputPALocationPre');

        $applications->City_pre = request('inputCityPre');
        $applications->Present_address_disrict = request('inputPADistrictPre');
        $applications->Present_state = request('inputPAStatePre');
        $applications->Pin_Code_pre = request('inputPinCodePre');
        $applications->Present_address_country = request('inputPACountryPre');
        $applications->Present_police_station = request('inputPAPSPre');
        $applications->Present_post_office = request('inputPAPOPre');



        $applications->Duration_of_stay_at_present_address = request('PADuration_pre');
        $applications->List_of_supporting_docs = request('inputSuppDocs');

        $applications->attachments = $filenameToStore2;




        $applications->save();

        return redirect('/kiosk/dashboard')->with('mssg', 'Welcome Kiosk Operator!')->withInput();
    }

    public function show($Application_number)
    {
        $preview = Application::where('Application_number', $Application_number)->first();
        $kiosks = Kiosk::all();
        return view('application.show', [
            'applications' => $preview,
            'kiosks' => $kiosks
        ]);
    }





    public function search()
    {
        $kiosks = Kiosk::all();
        $search = request()->query('Application_number');
        if ($search) {
            // dd(request()->query('Application_number'));
            $applications = Application::where('Application_number', 'LIKE', '%' . $search . '%')->get();
        }
        return view('application.search', [
            'applications' => $applications,
            'kiosks' => $kiosks
        ]);
    }

    public function download($file1)
    {
        return response()->download(public_path() . '/storage/certificate/' . $file1);
        // return Storage::downlaod($file1);
    }
    public function download2($attachments)
    {
        return response()->download('storage/supportingDocs/' . $attachments);
    }
}
