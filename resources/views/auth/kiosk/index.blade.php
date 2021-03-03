@extends('auth.kiosk.layout')
@section('content')

<div class="bg-gray-200 h-96 w-full overflow-hidden mb-4 border-black border-2 rounded-2xl">
    <table class="table table-bordered table-dark table-hover table-sm  ">

        <thead class="bg-yellow-50 text-black">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Application_no</th>
                <th scope="col">Application_name</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)

            <tr>

                <td></td>
                <td><a href="/application/{{ $application->Application_number }}">{{ $application->Application_number }}</a></td>
                <td>{{ $application->Application_name }}</td>
                <td>{{ $application->created_at }}</td>
                <td>{{ $application->updated_at }}</td>

            </tr>


            @endforeach
        </tbody>



    </table>
</div>

@endsection