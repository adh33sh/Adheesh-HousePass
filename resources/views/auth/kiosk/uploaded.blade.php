@extends('auth.kiosk.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold">RECIEPTS TO BE SENT TO SETTLEMENT OFFICER FOR SIGNATURE</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_number</th>
                <th scope="col">Reciept</th>
                <th scope="col">Done</th>




                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($applications as $x => $application)
            @if($application->settlementUploaded == 'Uploaded')



            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $application->Application_number }}</td>
                <td><a href="/kiosk/reciept/{{ $application->Application_number }}">Generate {{ $application->Application_number }}'s Reciept</a></td>
                <td>
                    <form action="/kiosk/done/{{ $application->Application_number }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-success" value="Done">
                    </form>
                </td>



            </tr>

            @endif

            @endforeach

        </tbody>
    </table>


    <div class="mb-4 ">
        <a href="/kiosk/dashboard" class="btn btn-primary">GO BACK</a>
    </div>



</div>



@endsection