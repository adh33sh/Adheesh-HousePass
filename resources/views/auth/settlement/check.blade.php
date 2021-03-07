@extends('auth.settlement.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold ">FORMS COMMENTED BY THE SURVEY OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Accepted NoteSheet by Surveyor</th>
                <th scope="col">Survey Officer's Comments</th>
                <th scope="col">Approve</th>
                <th scope="col">Reject</th>
                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($settlements as $x => $settlement)
            @if($settlement->surveyComment != '')
            @if($settlement->settlementVerified != 'Verified')

            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $settlement->Application_no }}</a></td>

                <td><a href="/settlement/notesheet/{{ $settlement->Application_number }}">Generate {{ $settlement->Application_number }}'s Notesheet</a></td>
                <td> {{ $settlement->surveyComment }} </td>
                <td>

                    <form action="/settlement/approved/{{ $settlement->Application_number }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="submit" class="btn btn-success" value="APPROVE">
                    </form>
                </td>
                <td>
                    <form action="/kiosk/reject/{{ $settlement->Application_number }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Reject">
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