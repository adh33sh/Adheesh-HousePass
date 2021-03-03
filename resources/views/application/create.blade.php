@extends('application.main')
@section('content')
<form action="/application" enctype="multipart/form-data" method="POST" class=" main-form">
    @csrf
    <fieldset>
        <div class="bg-gray-200 rounded-t-2xl p-4 border-2 border-black hover:shadow-inner  ">
            <legend>Personal Information</legend>
            <div class="col-md-6">
                <label for="inputApplicationName" class="form-label">Application name</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputApplicationName" name="inputApplicationName" required>
            </div>
            <div class="col-md-6">
                <label for="inputApplicantName" class="form-label">Applicant name</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputApplicantName" name="inputApplicantName">
            </div>
            <div class="col-md-4">
                <label for="inputAppellation" class="form-label">Appellation</label>
                <select id="inputAppellation" name="inputAppellation" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputSuffix" class="form-label">Suffix</label>
                <select id="inputSuffix" name="inputSuffix" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputDOB" class="form-label">Date of Birth</label>
                <input type="date" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputDOB" name="inputDOB">
            </div>
            <div class="col-md-4">
                <label for="inputCTBU" class="form-label">Certificate to be uploaded</label>
                <select id="inputCTBU" required name="inputCTBU" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <div class="custom-file">
                    <label class="form-label" for="validatedCustomFile">Choose File</label>
                    <input type="file" required class="form-control-file" id="file1" name="file1">
                </div>
            </div>
            <div class="col-md-4">
                <label for="inputGender" class="form-label">Gender</label>
                <select id="inputGender" required name="inputGender" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputEmail4" name="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputContactNo" class="form-label">Contact no</label>
                <input type="tel" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputContactNo" name="inputContactNo">
            </div>
            <div class="col-md-4">
                <label for="inputEducation" class="form-label">Education</label>
                <select id="inputEducation" required name="inputEducation" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputReligion" class="form-label">Religion</label>
                <select id="inputReligion" required name="inputReligion" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputOccupation" class="form-label">Occupation</label>
                <select id="inputOccupation" required name="inputOccupation" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputRelationshipType" class="form-label">Relationship Type</label>
                <select id="inputRelationshipType" required name="inputRelationshipType" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputRelationName" class="form-label">Enter name</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputRelationName" name="inputRelationName">
            </div>
            <div class="col-md-6">
                <label for="inputDOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputDOB2" name="inputDOB2">
            </div>
        </div>
    </fieldset>

    <fieldset>
        <div class="mt-5 bg-gray-200  p-4 border-2 border-black hover:shadow-inner ">
            <legend>Permanent Address</legend>
            <div class="col-12">
                <label for="inputPADNo" class="form-label">Permanent Address - Door no</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPADNo" name="inputPADNo" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPASublocality1" class="form-label">Permanent Address - Sub Locality 1</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality1" name="inputPASublocality1" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPASublocality2" class="form-label">Permanent Address - Sub Locality 2</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality2" name="inputPASublocality2" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPALocation" class="form-label">Permanent Address - Location</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPALocation" name="inputPALocation" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputCity" name="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputPADistrict" class="form-label">Permanent Address - District</label>
                <select id="inputPADistrict" name="inputPADistrict" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAState" class="form-label">Permanent Address - State</label>
                <select id="inputPAState" name="inputPAState" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inputPinCode" class="form-label">Pin Code</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPinCode" name="inputPinCode">
            </div>
            <div class="col-md-4">
                <label for="inputPACountry" class="form-label">Permanent Address - Country</label>
                <select id="inputPACountry" name="inputPACountry" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAPS" class="form-label">Permanent Address - Police Station</label>
                <select id="inputPAPS" required name="inputPAPS" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAPO" class="form-label">Permanent Address - Post Office</label>
                <select id="inputPAPO" required name="inputPAPO" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </fieldset>


    <!-- Present ADdress -->
    <fieldset>
        <div class="mt-5 bg-gray-200  p-4 border-2 border-black hover:shadow-inner ">
            <legend>Present Address</legend>
            <div class="col-12">
                <label for="inputPADNo1" class="form-label">Present Address - Door no</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPADNoPre" name="inputPADNoPre" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPASublocality1" class="form-label">Present Address - Sub Locality 1</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality1Pre" name="inputPASublocality1Pre" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPASublocality2" class="form-label">Present Address - Sub Locality 2</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality2Pre" name="inputPASublocality2Pre" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputPALocation" class="form-label">Present Address - Location</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPALocationPre" name="inputPALocationPre" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputCityPre" name="inputCityPre">
            </div>
            <div class="col-md-4">
                <label for="inputPADistrict1" class="form-label">Present Address - District</label>
                <select id="inputPADistrictPre" name="inputPADistrictPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAState1" class="form-label">Present Address - State</label>
                <select id="inputPAStatePre" name="inputPAStatePre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inputPinCode1" class="form-label">Pin Code</label>
                <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPinCodePre" name="inputPinCodePre">
            </div>
            <div class="col-md-4">
                <label for="inputPACountry1" class="form-label">Present Address - Country</label>
                <select id="inputPACountryPre" name="inputPACountryPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAPS1" class="form-label">Present Address - Police Station</label>
                <select id="inputPAPSPre" required name="inputPAPSPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputPAPO1" class="form-label">Present Address - Post Office</label>
                <select id="inputPAPOPre" required name="inputPAPOPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </fieldset>
    <!-- end PResent Address -->

    <div class="mt-5 bg-gray-200 rounded-b-2xl p-4 border-2 border-black hover:shadow-inner ">
        <div class="col-md-4">
            <label for="PADuration" required class="form-label">Duration of stay at present address</label>
            <select id="PADuration" name="PADuration_pre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputSuppDocs" class="form-label mt-4">List of the supporting documents</label>
            <select id="inputSuppDocs" required name="inputSuppDocs" class="form-control hover:bg-green-100 transition ease-out duration-500">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            <div class="custom-file">
                <label class="form-label" for="validatedCustomFile">Choose File</label>
                <input type="file" required class="form-control-file" id="attachments" name="attachments" multiple="">
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check  mt-4">
                <input class="form-check-input mt-2" type="checkbox" id="autoSizingCheck" name="autoSizingCheck" required>
                <label class="form-check-label" for="autoSizingCheck">
                    I hereby declare that all the documents attached are verified with originals
                </label>
            </div>
        </div>
    </div>




    <div class="col-12 mt-5 mb-5">
        <button type="submit" class="btn btn-primary w-full">Submit</button>
    </div>
</form>

<script src="/js/index.js"></script>

@endsection