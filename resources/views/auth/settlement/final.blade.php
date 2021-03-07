@extends('auth.settlement.layout')
@section('content')

<div class="bg-gray-200 auto w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold">RECIEPTS TO BE SENT TO SETTLEMENT OFFICER FOR SIGNATURE</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_number</th>
                <th scope="col">Reciept</th>
                <th scope="col">SIGN</th>



                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($settlements as $x => $settlement)
            @if($settlement->clerkSent == 'Yes')
            @if($settlement->settlementSigned != 'Signed')



            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $settlement->Application_number }}</td>
                <td><a href="/settlement/reciept/{{ $settlement->Application_number }}">Generate {{ $settlement->Application_number }}'s Reciept</a></td>
                <td>
                    <form action="/settlement/{{ $settlement->Application_number }}/settlementSigned" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="submit" class="btn btn-success" value="SIGN">
                    </form>

                </td>


            </tr>

            @endif
            @endif
            @endforeach

        </tbody>
    </table>


    <div class="mb-4">
        <a href="/settlement/dashboard" class="btn btn-primary">GO BACK</a>
    </div>



</div>



@endsection