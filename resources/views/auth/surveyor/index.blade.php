@extends('auth.surveyor.layout')
@section('content')

<div class="bg-gray-200 h-96 w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">NOTESHEETS SENT BY THE SURVEY OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>


                <th scope="col">Accepted NoteSheet</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->
                <th scope="col">Verify</th>

            </tr>
        </thead>
        <tbody>
            @foreach($surveyors as $x => $surveyor)
            @if($surveyor->surveyForwarded == 'Yes')
            @if($surveyor->surveyorVerified != 'Verified')
            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $surveyor->Application_number }}</td>

                <td><a href="/surveyor/notesheet/{{ $surveyor->Application_number }}">Generate {{ $surveyor->Application_number }}'s Notesheet</a></td>


                <form action="/surveyor/verified/{{ $surveyor->Application_number }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <td><input type="submit" class="btn btn-success" value="Verify"></td>
                </form>



            </tr>
            @endif
            @endif
            @endforeach

        </tbody>
    </table>







</div>



@endsection