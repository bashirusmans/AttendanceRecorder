<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Login</title>
</head>
<body class="dark" style="height:100%">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Attendance Recorder</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center" style="height:90%">
        <div class="container shadow-lg mx-3 border bg-dark my-auto rounded-5" style="width:700px; height:350px">
            <form id="loginform" style="height:90%" onsubmit="window.location.href = {{ url('/teacher') }}; return false;">
                <div class="mt-3" style="height:70%">
                    <div class="d-flex justify-content-center" style="height:50%">
                        <div class="py-2" style="width:80%; height:100%"><input class="bg-light rounded-5 p-4 text-light" style="width:100%; height:80%; font-size:50px" name="email" autocomplete="off" id="email" required type="email" placeholder="Email"></div>
                    </div>
                    <div class="d-flex justify-content-center" style="height:50%">
                        <div class="py-2" style="width:80%; height:100%"><input class="bg-light rounded-5 p-4 text-light" style="width:100%; height:80%; font-size:50px" name="pass" autocomplete="password" id="pass" required type="password" placeholder="Password"></div>
                    </div>
                </div>
                <hr>
                <div class="pb-3 d-flex justify-content-center" style="height:50%;">
                    <input id="loginbtn" type="submit" class="btn btn-warning rounded-5" value="Login" style="width:50%; height:40%; font-size:30px">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
