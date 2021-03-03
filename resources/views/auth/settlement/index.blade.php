@extends('auth.settlement.layout')
@section('content')




<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Delete</th>


            </tr>
        </thead>
        <tbody>
            @foreach($kiosks as $kiosk)

            <tr>

                <td></td>
                <td><a href="/settlement/form/{{ $kiosk->Application_no }}">{{ $kiosk->Application_no }}</a></td>
                <form action="/kiosk/delete/{{ $kiosk->Application_no }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" class="btn btn-danger" value="Delete"></td>
                </form>

            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mb-4">
        <a href="/settlement/send" class="btn btn-primary">Check All Accepted Forms</a>
    </div>





</div>



@endsection