@extends('layout.base')

@section('content')
    <div class="container-fluid mt-5">
        <h1 class="big-title text-light text-center">Attendance</h1>
    </div>
    <div class="container mt-5">
        <div class="d-lg-flex justify-content-between m-5 p-5 shadow-lg border bg-dark rounded-5">
            <div class="sessionbtn"><a class="btn btn-light"><--- Previous Session</a></div>
            <div class="sessiontxt medium-title text-light">Date</div>
            <div class="sessionbtn"><a class="btn btn-light">Next Session ---></a></div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="text-light tablehead" style="width:25%">Student ID</div>
            <div class="text-light tablehead" style="width:25%">Name</div>
            <div class="text-light tablehead" style="width:25%">Percent Attendance</div>
            <div class="text-light tablehead" style="width:25%">Session Attendance</div>
        </div>
        <hr class="border-light">
        <div class="d-flex justify-content-between">
            <div class="text-light m-3" style="width:25%">Student ID</div>
            <div class="text-light m-3" style="width:25%">Name</div>
            <div class="text-light m-3" style="width:25%">Percentage Attendance</div>
            <div class="m-3" style="width:25%"><a class="attendancebtn btn btn-success">Present</a></div>
        </div>
    </div>
@endsection