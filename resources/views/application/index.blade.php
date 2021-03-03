<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">

</head>

<body>

    <div class="p-4 bg-gray-200 border-black border-2 rounded-2xl mt-6 mb-6">
        <div class="bg-white h-40 w-full flex justify-center rounded-2xl shadow-2xl p-2">

            <form action="{{ url('/search') }}" type="GET">

                <div class="py-2 flex justify-center">
                    <label for="inputApplicationNumber" class="form-label">Application Number</label>
                    <input type="number" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="Application_number" name="Application_number">
                </div>
                <div class="col-12 flex justify-center">
                    <button type="submit" class="btn btn-primary">Find</button>
                </div>

            </form>

        </div>

    </div>





    <table class="table table-bordered table-dark table-hover table-sm  ">
        <caption>Applicants Details</caption>

        <thead class="">
            <tr class="bg-white">
                <th scope="col"></th>
                @foreach($applications as $i => $application)
                <th scope="col" class="text-gray-800">Applicant - {{ $i+1 }}</th>

                @endforeach

            </tr>

        </thead>
        <tr>
            <th>Application_number</th>
            @foreach($applications as $application)
            <td>{{ $application->Application_number }}</td>
            @endforeach
        </tr>

        <tr>
            <th>Application_name</th>
            @foreach($applications as $application)
            <td>{{ $application->Application_name }}</td>
            @endforeach


        </tr>
        <tr>
            <th>Applicant_name</th>
            @foreach($applications as $application)
            <td>{{ $application->Applicant_name }}</td>
            @endforeach
        </tr>
        <tr>
            <th>DOB</th>
            @foreach($applications as $application)
            <td>{{ $application->DOB }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Certificate_to_be_uploaded</th>
            @foreach($applications as $application)
            <td>{{ $application->Certificate_to_be_uploaded }}</td>
            @endforeach
        </tr>
        <tr>
            <th>file1</th>
            @foreach($applications as $application)
            <td><a class="text-green-200" href="/storage/certificate/{{ $application->file1 }}">View</a><br>
                <a class="text-green-200" href="/application/download/{{ $application->file1 }}">Download_CTBU</a>
            </td>

            @endforeach
        </tr>
        <tr>
            <th>Gender</th>
            @foreach($applications as $application)
            <td>{{ $application->Gender }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Email</th>
            @foreach($applications as $application)
            <td>{{ $application->Email }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Contact_no</th>
            @foreach($applications as $application)
            <td>{{ $application->Contact_no }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Education</th>
            @foreach($applications as $application)
            <td>{{ $application->Education }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Religion</th>
            @foreach($applications as $application)
            <td>{{ $application->Religion }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Occupation</th>
            @foreach($applications as $application)
            <td>{{ $application->Occupation }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Relationship_type</th>
            @foreach($applications as $application)
            <td>{{ $application->Relationship_type }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Enter_name</th>
            @foreach($applications as $application)
            <td>{{ $application->Enter_name }}</td>
            @endforeach
        </tr>
        <tr>
            <th>DOB_2</th>
            @foreach($applications as $application)
            <td>{{ $application->DOB_2 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_door_no</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_door_no }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_sub_locality_1</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_sub_locality_1 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_sub_locality_2</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_sub_locality_2 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_location</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_location }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Address_2</th>
            @foreach($applications as $application)
            <td>{{ $application->Address_2 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>City</th>
            @foreach($applications as $application)
            <td>{{ $application->City }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_disrict</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_disrict }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_state</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_state }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Pin_Code</th>
            @foreach($applications as $application)
            <td>{{ $application->Pin_Code }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_address_country</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_address_country }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Permanent_police_station</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_police_station }}</td>
            @endforeach
        </tr>

        <tr>
            <th>Permanent_post_office</th>
            @foreach($applications as $application)
            <td>{{ $application->Permanent_post_office }}</td>
            @endforeach
        </tr>

        <tr>
            <th>Present_address_door_no</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_door_no }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_address_sub_locality_1</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_sub_locality_1 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_address_sub_locality_2</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_sub_locality_2 }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_address_location</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_location }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Address_2_pre</th>
            @foreach($applications as $application)
            <td>{{ $application->Address_2_pre }}</td>
            @endforeach
        </tr>
        <tr>
            <th>City_pre</th>
            @foreach($applications as $application)
            <td>{{ $application->City_pre }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_address_disrict</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_disrict }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_state</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_state }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Pin_Code_pre</th>
            @foreach($applications as $application)
            <td>{{ $application->Pin_Code_pre }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_address_country</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_address_country }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_police_station</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_police_station }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Present_post_office</th>
            @foreach($applications as $application)
            <td>{{ $application->Present_post_office }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Duration_of_stay_at_present_address</th>
            @foreach($applications as $application)
            <td>{{ $application->Duration_of_stay_at_present_address }}</td>
            @endforeach
        </tr>
        <tr>
            <th>List_of_supporting_docs</th>
            @foreach($applications as $application)
            <td>{{ $application->List_of_supporting_docs }}</td>
            @endforeach
        </tr>
        <tr>
            <th>Attachments</th>
            @foreach($applications as $application)
            <td><a class="text-green-200" href="/storage/supportingDocs/{{ $application->attachments }}">View</a><br>
                <a class="text-green-200" href="/application/download2/{{ $application->attachments }}">Download_Attachments</a>
            </td>
            @endforeach
        </tr>
        <tr>
            <th>Remarks</th>
            @foreach($applications as $application)
            <td>{{ $application->Remarks }}</td>
            @endforeach
        </tr>




    </table>


</body>

</html>