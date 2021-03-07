<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1 style="text-align:center">NoteSheet</h1>


    <p>Application Number: {{$application->Application_number}}</p><br>

    <p>Applicant Name: {{$application->Applicant_name}}</p><br>
    <P>Application Name: {{$application->Application_name}}</p><br>
    <P>Target Date: {{$application->Target_date}}</p><br>
    <p>DDFD: {{$application->DDFD}} </p><br>
    <p>Survey Officer's acceptance: {{$application->surveyAccepted ?? 'Not Accepted Yet'}} </p><br>
    <p>Surveyor verification: {{$application->surveyorVerified ?? 'Not Verified Yet'}} </p><br>










</body>

</html>