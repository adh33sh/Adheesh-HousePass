@extends('auth.kiosk.layout')
@section('content')

<div class="bg-gray-200 h-auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_number</th>
                <th scope="col">Kiosk</th>
                <th scope="col">Forward To Settlement Officer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kiosks as $x => $kiosk)

            @if($kiosk->kioskAccepted == 'Accepted')

            <tr>

                @if($kiosk->kioskForwarded != 'Yes')
                <td>{{$x+1}}</td>
                <td><a href="/application/{{ $kiosk->Application_number }}">{{ $kiosk->Application_number }}</a></td>
                <td>{{ $kiosk->kioskAccepted }}</a></td>
                <td>
                    <form action="/kiosk/{{ $kiosk->Application_number }}/kioskForwarded" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="submit" class="btn btn-success" value="SEND">
                    </form>

                </td>

                @endif
                <!-- <form action="/kiosk/delete/{{ $kiosk->Application_number }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                </form> -->

            </tr>
            @endif
            @endforeach

        </tbody>
    </table>

    <div class="mb-4">
        <a href="/kiosk/dashboard" class="btn btn-primary">GO BACK</a>
    </div>



</div>



@endsection