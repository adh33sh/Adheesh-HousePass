<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PUBLIC!</title>
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="mb-40">
        <div class="">
            <div class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500  h-2 w-full"></div>
        </div>

        <div class="">
            <div class="bg-gray-200 h-20 w-full">

                <div class="flex justify-center">
                    <img src="https://digitalindia.gov.in/writereaddata/files/Headerlogo_0.png">
                </div>

            </div>
        </div>
        <div class="">
            <div class="bg-gray-300 h-20 w-full  border-black border-b-2">
                <div class="flex justify-evenly  pt-4">
                    <h1 class="font-bold font-body">HOUSE PASS</h1>
                </div>

            </div>

        </div>
        <table class="table table-bordered table-dark table-hover   ">
            <thead class="bg-yellow-50 text-black">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Application_no</th>
                    <th scope="col">Kiosk Forwarded</th>
                    <th scope="col">Settlement Accept</th>
                    <th scope="col">Survey Comment</th>
                    <th scope="col">Settlement Signed</th>
                    <th scope="col">Settlement Uploaded</th>
                </tr>
            </thead>

            <tbody>
                @foreach($application as $x => $applicationz)
                <tr>
                    <td></td>
                    <td>{{ $applicationz->Application_number }}</td>
                    <td>{{ $applicationz->kioskForwarded ?? 'Not Forwarded Yet' }}</td>
                    <td>{{ $applicationz->settlementForwarded ?? 'Not Accepted Yet' }}</td>
                    <td>{{ $applicationz->surveyComment ?? 'Not Commented Yet'}}</td>
                    <td>{{ $applicationz->settlementSigned ?? 'Not Signed Yet'}}</td>
                    <td>{{ $applicationz->settlementUploaded ?? 'Not uploaded Yet' }}</td>

                </tr>
                @endforeach
            </tbody>


        </table>
    </div>

    <footer class="bg-gray-800 p-20 text-center text-white mt-5">

        <nav class="pb-2">
            |<a href="" class="pl-2 pr-2">FAQs</a>
            |
            <a href="" class="pr-2 pl-2">Policies</a>|
        </nav>
        Copyright 2021 ICT
    </footer>
</body>

</html>