<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Officer</title>
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



                    <div class="bg-gray-200 h-40 w-full mb-5 border-black border-2 rounded-2xl">
                        <div class=" p-2 text-center ">
                            <div>

                                <div>
                                    <a href="/survey/send" class="btn btn-dark w-full block mb-1">Check My Accepted Notesheets</a>
                                </div>
                                <div>
                                    <a href="/survey/verified" class="btn btn-secondary w-full block mb-1">Check Verified Notesheets By The Surveyor</a>
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