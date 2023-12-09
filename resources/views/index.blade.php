<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Attendance Recorder</title>
</head>
<body class="dark">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Attendance Recorder</a>
            <div class="d-flex">
                <div class="mt-1 mx-1">
                    <label>
                        <a href="{{ url('/login') }}" class="login-btn btn btn-outline-danger">Login</a>
                    </label>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <h1 class="big-title text-light text-center">Attendance Recorder</h1>
    </div>
    <div class="container-fluid mt-5">
        <p class="text-light medium-title">Welcome to our attendance management site! We are here to help you keep track of your employees' attendance and work hours. Our site is designed to be user-friendly and easy to navigate. We hope that our site will help you streamline your attendance management process and increase your team's productivity. If you have any questions or feedback, please don't hesitate to contact us. Thank you for choosing our site!</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>