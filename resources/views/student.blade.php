@extends('layout.base')

@section('content')
    <div class="container-fluid mt-5">
        <h1 class="big-title text-light text-center">Attendance</h1>
    </div>
    <div class="container mt-5">
        <div class="d-lg-flex justify-content-between m-5 p-5 shadow-lg border bg-dark rounded-5">
            <div class="text-light m-3">Number of Classes Conducted:</div>
            <div class="text-light m-3">Number of Classes Attended:</div>
            <div class="text-light m-3">Percentage Attendance:</div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="text-light tablehead" style="width:50%">Class ID</div>
            <div class="text-light tablehead" style="width:50%">Attendance</div>
        </div>
        <hr class="border-light">
        <div class="d-flex justify-content-between">
            <div class="text-light m-3" style="width:50%">Class ID</div>
            <div class="text-light m-3" style="width:50%">Attendance</div>
        </div>
    </div>
@endsection