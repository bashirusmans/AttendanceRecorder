<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Teacher</title>
</head>
<body class="dark">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Attendance Recorder</a>
            <div class="d-flex">
                <div class="mt-1 mx-1">
                    <label>
                        <a href="{{ url('/login') }}" class="login-btn btn btn-outline-danger">Logout</a>
                    </label>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <h1 class="big-title text-light text-center">Attendance</h1>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-between m-5 p-5 shadow-lg border bg-dark rounded-5">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>