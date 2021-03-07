@extends('auth.survey.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">NOTESHEETS TO BE SENT TO THE SURVEYOR</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">NoteSheets</th>
                <th scope="col">Send</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $x => $survey)
            @if($survey->surveyAccepted == 'Accepted')
            @if($survey->surveyForwarded != 'Yes')

            <tr>

                <td>{{ $x+1 }}</td>
                <td><a href="/survey/form/{{ $survey->Application_number }}">{{ $survey->Application_number }}</a></td>

                <td><a href="/survey/notesheet/{{ $survey->Application_number }}">Generate {{ $survey->Application_number }}'s Notesheet</a></td>

                <td>
                    <form action="/survey/{{ $survey->Application_number }}/surveyForwarded" method="POST">
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