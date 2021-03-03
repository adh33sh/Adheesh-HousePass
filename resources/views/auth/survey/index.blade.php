@extends('auth.survey.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Generate_Notesheet</th>
                <th scope="col">Reject</th>
                <!-- <th scope="col">Delete</th> -->

            </tr>
        </thead>
        <tbody>
            @foreach($settlements as $settlement)

            <tr>

                <td></td>
                <td><a href="/survey/form/{{ $settlement->Application_no }}">{{ $settlement->Application_no }}</a></td>
                <td><a href="/survey/notesheet/{{ $settlement->Application_no }}">Generate {{ $settlement->Application_no }}'s Notesheet</a></td>




                <form action="/settlement/delete/{{ $settlement->Application_no }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" class="btn btn-danger" value="Reject"></td>
                </form>


            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="mb-4">
        <a href="/survey/send" class="btn btn-primary">Check All Accepted Notesheet</a>
    </div>





</div>



@endsection