@extends('auth.kiosk.layout')
@section('content')

<form action="kiosk/reject/submit" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="Reason" class="form-label">Reason</label>
        <input type="text" class="form-control hover:bg-green-100 transition ease-out duration-500" id="Reason" name="Reason">
    </div>
    <div class="col-12 mt-5 mb-5">
        <button type="submit" class="btn btn-primary w-full">Submit</button>
    </div>
</form>

@endsection