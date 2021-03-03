@extends('auth.survey.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>


                <th scope="col">Accepted NoteSheet</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach($surveyors as $surveyor)

            <tr>

                <td></td>
                <td><a href="/surveyor/form/{{ $surveyor->Application_no }}">{{ $surveyor->Application_no }}</a></td>

                <td><a href="/surveyor/notesheet/{{ $surveyor->Application_no }}">Generate {{ $surveyor->Application_no }}'s Notesheet</a></td>


                <form action="/survey/delete/{{ $surveyor->Application_no }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                </form>

            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mb-4">
        <a href="#" type="button" class="btn btn-success  ">SEND IT</a>
    </div>
    <div class="mb-4">
        <a href="/kiosk/dashboard" class="btn btn-primary">GO BACK</a>
    </div>



</div>



@endsection