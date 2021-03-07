@extends('auth.surveyor.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">VERIFIED NOTESHEETS TO BE SENT BACK TO THE SURVEY OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Verified NoteSheet</th>
                <th scope="col">Send</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($surveyors as $x => $surveyor)
            @if($surveyor->surveyorVerified == 'Verified')
            @if($surveyor->surveyorForwarded != 'Yes')
            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $surveyor->Application_number }}</td>

                <td><a href="/surveyor/notesheet/{{ $surveyor->Application_number }}">Generate {{ $surveyor->Application_number }}'s Notesheet</a></td>

                <td>
                    <form action="/surveyor/{{ $surveyor->Application_number }}/surveyorForwarded" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="submit" class="btn btn-success" value="SEND">
                    </form>

                </td>

            </tr>
            @endif
            @endif
            @endforeach

        </tbody>
    </table>


    <div class="mb-4">
        <a href="/kiosk/dashboard" class="btn btn-primary">GO BACK</a>
    </div>



</div>



@endsection