@extends('auth.survey.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">VERIFIED NOTESHEETS BY THE SURVEYOR</p>
    <p class="bg-green-300 text-center font-bold ">TO BE SENT TO THE SETTLEMENT OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Accepted NoteSheet by Surveyor</th>
                <th scope="col">My Comments</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $x => $survey)
            @if($survey->surveyorForwarded == 'Yes')
            @if($survey->surveyComment == '')
            <tr>

                <td>{{ $x+1 }}</td>
                <td><a href="/survey/form/{{ $survey->Application_number }}">{{ $survey->Application_number }}</a></td>

                <td><a href="/survey/notesheet/{{ $survey->Application_number }}">Generate {{ $survey->Application_number }}'s Notesheet</a></td>
                <td>
                    @if($survey->surveyComment == '')
                    <form action="/survey/comment/{{ $survey->Application_number }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="">
                            <label for="surveyComment" class="form-label">Comment</label>

                            <input type="text" required class="form-control hover:bg-green-100 transition ease-out duration-500" id="surveyComment" name="surveyComment">
                        </div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                    @else
                    <button class="btn btn-secondary">Commented</button>
                    @endif
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