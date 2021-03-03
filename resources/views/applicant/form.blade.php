<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">

</head>

<body class="">
    <div class=" flex justify-center  p-5 mb-12 border-b border-black rounded-xl bg-gradient-to-l from-yellow-400 md:bg-gradient-to-r via-red-500 to-pink-500 ">
        <!-- <div class="">
            <h1 class="text-xl font-bold transform hover:scale-125">FORM</h1>
        </div> -->

        <img src="https://digitalseva.csc.gov.in/frontend/img/digital_seva_200x40.png" alt="">

        <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4 border-b border-gray-200 ">
                        <a href="/" class="text-green-500    sm:text-red-500 lg:text-blue-500">Application Form</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden " id="menu">
                        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="content">
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4  border-primary">
                            <span>Home</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-white ">
                            <span>About</span>
                            <svg class="w-5  ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4  border-white ">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>








    </div>
    <form action="/application" method="POST" class="main-form ">
        @csrf
        <fieldset>
            <div class="bg-gray-200 rounded-md p-4 border-2 border-black hover:shadow-inner  transform hover:scale-105">
                <legend>Personal Information</legend>
                <div class="col-md-6">
                    <label for="inputApplicationName" class="form-label">Application name</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputApplicationName" name="inputApplicationName" required />

                </div>
                <div class="col-md-6">
                    <label for="inputApplicantName" class="form-label">Applicant name</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputApplicantName" name="inputApplicantName">
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
                    <input type="date" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputDOB" name="inputDOB">
                </div>
                <div class="col-md-4">
                    <label for="inputCTBU" class="form-label">Certificate to be uploaded</label>
                    <select id="inputCTBU" name="inputCTBU" required class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select id="inputGender" name="inputGender" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputEmail4" name="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputContactNo" class="form-label">Contact no</label>
                    <input type="tel" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputContactNo" name="inputContactNo">
                </div>
                <div class="col-md-4">
                    <label for="inputEducation" class="form-label">Education</label>
                    <select id="inputEducation" name="inputEducation" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputReligion" class="form-label">Religion</label>
                    <select id="inputReligion" name="inputReligion" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputOccupation" class="form-label">Occupation</label>
                    <select id="inputOccupation" name="inputOccupation" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputRelationshipType" class="form-label">Relationship Type</label>
                    <select id="inputRelationshipType" name="inputRelationshipType" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputRelationName" class="form-label">Enter name</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputRelationName" name="inputRelationName">
                </div>
                <div class="col-md-6">
                    <label for="inputDOB" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputDOB2" name="inputDOB2">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <div class="mt-5 bg-gray-200 rounded  border-2 border-black hover:shadow-inner transform hover:scale-105 ">
                <legend>Permanent Address</legend>
                <div class="col-12">
                    <label for="inputPADNo" class="form-label">Permanent Address - Door no</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPADNo" name="inputPADNo" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputPASublocality1" class="form-label">Permanent Address - Sub Locality 1</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality1" name="inputPASublocality1" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputPASublocality2" class="form-label">Permanent Address - Sub Locality 2</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality2" name="inputPASublocality2" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputPALocation" class="form-label">Permanent Address - Location</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPALocation" name="inputPALocation" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
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
                    <input type="number" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPinCode" name="inputPinCode">
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
                    <select id="inputPAPS" name="inputPAPS" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputPAPO" class="form-label">Permanent Address - Post Office</label>
                    <select id="inputPAPO" name="inputPAPO" class="form-control hover:bg-green-100 transition ease-out duration-500">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <fieldset>


                <!-- Present ADdress -->
                <fieldset>
                    <div class="mt-5 bg-gray-200 rounded  border-2 border-black hover:shadow-inner transform hover:scale-105">
                        <legend>Present Address</legend>
                        <div class="col-12">
                            <label for="inputPADNo1" class="form-label">Present Address - Door no</label>
                            <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPADNoPre" name="inputPADNoPre" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputPASublocality1" class="form-label">Present Address - Sub Locality 1</label>
                            <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality1Pre" name="inputPASublocality1Pre" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputPASublocality2" class="form-label">Present Address - Sub Locality 2</label>
                            <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPASublocality2Pre" name="inputPASublocality2Pre" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputPALocation" class="form-label">Present Address - Location</label>
                            <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPALocationPre" name="inputPALocationPre" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputAddress2Pre" name="inputAddress2Pre" placeholder="Apartment, studio, or floor">
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
                            <input type="number" class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputPinCodePre" name="inputPinCodePre">
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
                            <select id="inputPAPSPre" name="inputPAPSPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPAPO1" class="form-label">Present Address - Post Office</label>
                            <select id="inputPAPOPre" name="inputPAPOPre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <!-- end PResent Address -->

                <div class="mt-5 bg-gray-200 rounded  border-2 border-black hover:shadow-inner transform hover:scale-105">
                    <div class="col-md-4">
                        <label for="PADuration" class="form-label">Duration of stay at present address</label>
                        <select id="PADuration" name="PADuration_pre" class="form-control hover:bg-green-100 transition ease-out duration-500">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputSuppDocs" class="form-label mt-4">List of the supporting documents</label>
                        <select id="inputSuppDocs" name="inputSuppDocs" class="form-control hover:bg-green-100 transition ease-out duration-500">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputRemarks" class="mt-4">Remarks/Suggestions to be enclosed with the list forwarded by the forwarder</label>
                        <textarea class="form-control hover:bg-green-100 transition ease-out duration-500" id="inputRemarks" name="inputRemarks" rows="3"></textarea>
                    </div>

                    <div class="col-auto">
                        <div class="form-check mb-2">
                            <input class="form-check-input mt-2" type="checkbox" id="autoSizingCheck" name="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">
                                I hereby declare that all the documents attached are verified with originals
                            </label>
                        </div>
                    </div>
                </div>


                <div class="col-12 mt-5 mb-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
    </form>

    <script src="/js/index.js"></script>

</body>

</html>