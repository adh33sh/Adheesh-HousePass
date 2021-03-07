@extends('auth.settlement.layout')
@section('content')




<div class="bg-gray-200 h-96 w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">

    <p class="bg-green-300 text-center font-bold ">APPLICATIONS SENT BY THE KIOSK OPERATOR</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application number</th>
                <th scope="col">Kiosk Forwarded</th>


            </tr>
        </thead>
        <tbody>
            @foreach($kiosks as $x => $kiosk)
            @if($kiosk->kioskForwarded == 'Yes')
            @if($kiosk->settlementAccepted != 'Accepted')
            <tr>

                <td>{{ $x+1 }}</td>
                <td><a href="/settlement/form/{{ $kiosk->Application_number }}">{{ $kiosk->Application_number }}</a></td>
                <td>{{ $kiosk->kioskForwarded }}</td>
                <!-- <form action="/kiosk/delete/{{ $kiosk->Application_number }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                </form> -->

            </tr>
            @endif
            @endif
            @endforeach

        </tbody>
    </table>








</div>



@endsection