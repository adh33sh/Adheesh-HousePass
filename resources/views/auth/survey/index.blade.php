@extends('auth.survey.layout')
@section('content')

<div class="bg-gray-200 h-96 w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">APPLICATIONS SENT BY THE SETTLEMENT OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_number</th>
                <th scope="col">Check Notesheets</th>
                <th scope="col">Accept</th>
                <!-- <th scope="col">Delete</th> -->

            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $x => $survey)
            @if($survey->settlementForwarded == 'Yes')
            @if($survey->surveyAccepted != 'Accepted')

            <tr>

                <td>{{$x+1}}</td>
                <td><a href="/survey/form/{{ $survey->Application_number }}">{{ $survey->Application_number }}</a></td>
                <td><a href="/survey/notesheet/{{ $survey->Application_number }}">Generate {{ $survey->Application_number }}'s Notesheet</a></td>

                <form action="/survey/accepted/{{ $survey->Application_number }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <td><input type="submit" class="btn btn-success" value="Accept"></td>
                </form>





            </tr>
            @endif
            @endif
            @endforeach

        </tbody>
    </table>






</div>



@endsection