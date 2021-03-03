<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        <h2>Create form</h2>
    </div>
    <div class="bg-gray-300">
        <form action="/applicant" method="POST">
            @csrf
            <div class="pb-2">
                <div class="p-1">
                    <label for="app_date" class="border-black border-2 rounded">Application Date : </label>
                    <input class="border-gray-400 border-2 from-control" type="date" id="app_date" name="app_date" required><br>
                </div>
            </div>

            <label for="app_name">Applicant Name : </label>
            <input type="text" id="app_name" name="app_name" required><br>
            <label for="appellation">Appellation : </label>
            <select name="appellation" id="appellation"><br>
                <option value="none">none</option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <label for="suffix">Suffix : </label>
            <select name="suffix" id="suffix">
                <option value="none">none</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="jd">J.D</option>
                <option value="jr">Jr.</option>
                <option value="Med">M.Ed.</option>
                <option value="pe">PE</option>
                <option value="phd">Ph.D.</option>
                <option value="sr">Sr.</option>
            </select>
            <label for="dob">Date Of Birth : </label>
            <input type="date" id="dob" name="dob" required>
            <label for="ctbu">Certificate to be upload :</label>
            <select name="ctbu" id="ctbu" required>
                <option value="bc">Birth Certificate</option>
                <option value="sc">School Certificate</option>
                <option value="affidavit">Affidavit</option>
            </select>
            <label for="Gender">Gender : </label>
            <select name="Gender" id="Gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
            <label for="email">Email : </label>
            <input type="email" id="email" name="email">
            <label for="contact">Contact no : </label>
            <input type="tel" id="contact" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" name="contact" maxlength="18" required />
            <label for="edu">Education : </label>
            <select name="edu" id="edu" required>
                <option value="none">none</option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <fieldset>
                <legend>Education</legend>
                <select class="form-control dropdown" id="education" name="education" required>
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="No formal education">No formal education</option>
                    <option value="Primary education">Primary education</option>
                    <option value="Secondary education">Secondary education or high school</option>
                    <option value="GED">GED</option>
                    <option value="Vocational qualification">Vocational qualification</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate or higher">Doctorate or higher</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Religion</legend>
                <select class="form-control dropdown" id="religion" name="religion" required>
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="christian">christian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="buddhist">Buddhist</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Occupation</legend>
                <select class="form-control dropdown" id="occupation" name="occupation" required>
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="teacher">Teacher</option>
                    <option value="dentist">Dentist</option>
                    <option value="doctor">Doctor</option>
                    <option value="clerk">Clerk</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>
            <label for="relationship">Relationship type : </label>
            <select name="relationship" id="relationship" required>
                <option value="s/o">S/o</option>
                <option value="d/o">D/o</option>
                <option value="w/o">W/o</option>
                <option value="f/o">F/o</option>
                <option value="m/o">M/o</option>
                <option value="c/o">C/o</option>
                <option value="h/o">H/o</option>
            </select>
            <label for="Rname">Enter Name : </label>
            <input type="text" id="Rname" name="Rname">
            <label for="rdob">Date Of Birth of Relation : </label>
            <input type="date" id="rdob" name="rdob" required><br>
            <label for="per_add">Permanent Address - Door number : </label>
            <textarea rows="4" cols="50" name="per_add" required></textarea><br>
        </form>
    </div>
</body>

</html>