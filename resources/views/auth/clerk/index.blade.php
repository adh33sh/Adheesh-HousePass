@extends('auth.clerk.layout')
@section('content')

<div class="bg-gray-200 h-96 w-full overflow-hidden mb-4 border-black border-2 rounded-2xl ">
    <p class="bg-green-300 text-center font-bold">RECIEPTS TO BE SENT TO SETTLEMENT OFFICER FOR SIGNATURE</p>

    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_number</th>
                <th scope="col">Reciept</th>
                <th scope="col">SEND</th>



                <!-- <th scope="col">Generate_Notesheet</th> -->


            </tr>
        </thead>
        <tbody>
            @foreach($clerks as $x => $clerk)
            @if($clerk->settlementfinalSend == 'Done')
            @if($clerk->clerkSent != 'Yes')



            <tr>

                <td>{{ $x+1 }}</td>
                <td>{{ $clerk->Application_number }}</td>
                <td><a href="/clerk/reciept/{{ $clerk->Application_number }}">Generate {{ $clerk->Application_number }}'s Reciept</a></td>
                <td>
                    <form action="/clerk/{{ $clerk->Application_number }}/clerkSent" method="POST">
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






</div>



@endsection