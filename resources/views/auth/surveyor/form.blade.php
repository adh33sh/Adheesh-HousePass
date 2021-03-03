@extends('auth.survey.layout')
@section('content')


<table class="table table-bordered table-dark table-hover table-sm  ">


    <thead class="">
        <tr class="bg-yellow-50">
            <th scope="col"></th>
            <th scope="col" class="text-gray-800">Application no - {{ $applications->Application_number }}</th>



        </tr>

    </thead>

    <tr>
        <th>Application_name</th>

        <td>{{ $applications->Application_name }}</td>



    </tr>
    <tr>
        <th>Applicant_name</th>

        <td>{{ $applications->Applicant_name }}</td>

    </tr>
    <tr>
        <th>DOB</th>

        <td>{{ $applications->DOB }}</td>

    </tr>
    <tr>
        <th>Certificate_to_be_uploaded</th>

        <td>{{ $applications->Certificate_to_be_uploaded }}</td>

    </tr>
    <tr>
        <th>file1</th>

        <td><a class="text-green-200" href="/storage/certificate/{{ $applications->file1 }}">View</a><br>
            <a class="text-green-200" href="/application/download/{{ $applications->file1 }}">Download_CTBU</a>
        </td>


    </tr>
    <tr>
        <th>Gender</th>

        <td>{{ $applications->Gender }}</td>

    </tr>
    <tr>
        <th>Email</th>

        <td>{{ $applications->Email }}</td>

    </tr>
    <tr>
        <th>Contact_no</th>

        <td>{{ $applications->Contact_no }}</td>

    </tr>
    <tr>
        <th>Education</th>

        <td>{{ $applications->Education }}</td>

    </tr>
    <tr>
        <th>Religion</th>

        <td>{{ $applications->Religion }}</td>

    </tr>
    <tr>
        <th>Occupation</th>

        <td>{{ $applications->Occupation }}</td>

    </tr>
    <tr>
        <th>Relationship_type</th>

        <td>{{ $applications->Relationship_type }}</td>

    </tr>
    <tr>
        <th>Enter_name</th>

        <td>{{ $applications->Enter_name }}</td>

    </tr>
    <tr>
        <th>DOB_2</th>

        <td>{{ $applications->DOB_2 }}</td>

    </tr>
    <tr>
        <th>Permanent_address_door_no</th>

        <td>{{ $applications->Permanent_address_door_no }}</td>

    </tr>
    <tr>
        <th>Permanent_address_sub_locality_1</th>

        <td>{{ $applications->Permanent_address_sub_locality_1 }}</td>

    </tr>
    <tr>
        <th>Permanent_address_sub_locality_2</th>

        <td>{{ $applications->Permanent_address_sub_locality_2 }}</td>

    </tr>
    <tr>
        <th>Permanent_address_location</th>

        <td>{{ $applications->Permanent_address_location }}</td>

    </tr>
    <tr>
        <th>Address_2</th>

        <td>{{ $applications->Address_2 }}</td>

    </tr>
    <tr>
        <th>City</th>

        <td>{{ $applications->City }}</td>

    </tr>
    <tr>
        <th>Permanent_address_disrict</th>

        <td>{{ $applications->Permanent_address_disrict }}</td>

    </tr>
    <tr>
        <th>Permanent_state</th>

        <td>{{ $applications->Permanent_state }}</td>

    </tr>
    <tr>
        <th>Pin_Code</th>

        <td>{{ $applications->Pin_Code }}</td>

    </tr>
    <tr>
        <th>Permanent_address_country</th>

        <td>{{ $applications->Permanent_address_country }}</td>

    </tr>
    <tr>
        <th>Permanent_police_station</th>

        <td>{{ $applications->Permanent_police_station }}</td>

    </tr>

    <tr>
        <th>Permanent_post_office</th>

        <td>{{ $applications->Permanent_post_office }}</td>

    </tr>

    <tr>
        <th>Present_address_door_no</th>

        <td>{{ $applications->Present_address_door_no }}</td>

    </tr>
    <tr>
        <th>Present_address_sub_locality_1</th>

        <td>{{ $applications->Present_address_sub_locality_1 }}</td>

    </tr>
    <tr>
        <th>Present_address_sub_locality_2</th>

        <td>{{ $applications->Present_address_sub_locality_2 }}</td>

    </tr>
    <tr>
        <th>Present_address_location</th>

        <td>{{ $applications->Present_address_location }}</td>

    </tr>
    <tr>
        <th>Address_2_pre</th>

        <td>{{ $applications->Address_2_pre }}</td>

    </tr>
    <tr>
        <th>City_pre</th>

        <td>{{ $applications->City_pre }}</td>

    </tr>
    <tr>
        <th>Present_address_disrict</th>

        <td>{{ $applications->Present_address_disrict }}</td>

    </tr>
    <tr>
        <th>Present_state</th>

        <td>{{ $applications->Present_state }}</td>

    </tr>
    <tr>
        <th>Pin_Code_pre</th>

        <td>{{ $applications->Pin_Code_pre }}</td>

    </tr>
    <tr>
        <th>Present_address_country</th>

        <td>{{ $applications->Present_address_country }}</td>

    </tr>
    <tr>
        <th>Present_police_station</th>

        <td>{{ $applications->Present_police_station }}</td>

    </tr>
    <tr>
        <th>Present_post_office</th>

        <td>{{ $applications->Present_post_office }}</td>

    </tr>
    <tr>
        <th>Duration_of_stay_at_present_address</th>

        <td>{{ $applications->Duration_of_stay_at_present_address }}</td>

    </tr>
    <tr>
        <th>List_of_supporting_docs</th>

        <td>{{ $applications->List_of_supporting_docs }}</td>

    </tr>
    <tr>
        <th>Attachments</th>

        <td><a class="text-green-200" href="/storage/supportingDocs/{{ $applications->attachments }}">View</a><br>
            <a class="text-green-200" href="/application/download2/{{ $applications->attachments }}">Download_Attachments</a>
        </td>

    </tr>
    <tr>
        <th>Remarks</th>

        <td>{{ $applications->Remarks }}</td>

    </tr>
</table>

<form action="/surveyor/verified" method="POST">
    @csrf
    <div class="col-4">
        <label for="ApplicationNumber" class="form-label">Application Number</label>
        <input type="number" required value="{{ $settlements->Application_no }}" class="form-control hover:bg-green-100 transition ease-out duration-500" id="ApplicationNumber" name="ApplicationNumber" readonly>
    </div>
    <div class="col-md-6">
        <label for="Verified" class="form-label">Verified</label>
        <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="Verified" name="Verified" placeholder="Yes">
    </div>

    <td><input type="submit" class="btn btn-success" value="Accept"></td>

</form>


<div class="mb-4">
    <a href="/surveyor/send" class="btn btn-primary">Check All Verified Forms</a>
</div>




@endsection