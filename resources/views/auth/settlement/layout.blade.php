<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settlement Officer</title>
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div>
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
        <nav>
            <div>
                <h1></h1>
            </div>


        </nav>
        <div class="px-7">
            <!-- Form will go here -->
            <div class="md:grid grid-cols-3 gap-2">
                <div class="col-span-1 mb-5">

                    <div class="p-4 bg-gray-200 border-black border-2 rounded-2xl mb-5">
                        <div class="bg-white h-40 w-full flex justify-center rounded-2xl shadow-2xl p-2 ">

                            <form action="{{ url('/settlement/searchform') }}" type="GET">

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

                    <div class="bg-gray-200 h-auto w-full mb-5 border-black border-2 rounded-2xl">
                        <div class=" p-2 text-center ">
                            <div>
                                <div>
                                    <a href="/settlement/send" class="btn btn-dark w-full block mb-1">Check My Accepted Forms</a>
                                </div>
                                <div>
                                    <a href="/settlement/check" class="btn btn-secondary w-full block mb-1">Check Survey Officer's Comments For the Accepted Forms</a>
                                </div>
                                <div>
                                    <a href="/settlement/verified" class="btn btn-success w-full block mb-1">Check My Final Approval</a>
                                </div>
                                <a href="/settlement/final" class="btn btn-warning w-full block mb-1">Sign Reciepts</a>
                                <div>
                                </div>
                                <div>
                                    <a href="/settlement/upload" class="btn btn-primary w-full block mb-1">Check My Signed Forms</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 h-40 w-full mb-5 border-black border-2 rounded-2xl">

                        <nav>
                            <div class=" p-2 text-center mt-5 ">


                                <div class="mb-3">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Logout</button>
                                    </form>

                                </div>
                            </div>
                        </nav>



                    </div>



                </div>



                <div class="col-span-2">
                    <div class="bg-gray-200 h-auto w-full rounded-2xl">
                        @yield('content')
                    </div>

                </div>



            </div>
        </div>
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