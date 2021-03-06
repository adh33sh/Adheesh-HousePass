@extends('auth.settlement.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold">APPLICATIONS TO BE SENT TO THE SURVEY OFFICER</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">DDFD</th>
                <th scope="col">Target Date</th>
                <th scope="col">Send</th>

                <!-- <th scope="col">Generate_Notesheet</th> -->

            </tr>
        </thead>
        <tbody>
            @foreach($settlements as $x => $settlement)
            @if($settlement->settlementAccepted == 'Accepted')
            @if($settlement->settlementForwarded != 'Yes')

            <tr>

                <td>{{ $x+1 }}</td>
                <td><a href="/settlement/form/{{ $settlement->Application_number }}">{{ $settlement->Application_number }}</a></td>
                <td>{{ $settlement->DDFD }}</td>
                <td>{{ $settlement->Target_date }}</td>
                <td>
                    <form action="/settlement/{{ $settlement->Application_number }}/settlementForwarded" method="POST">
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