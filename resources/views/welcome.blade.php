<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Attendance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="login-page" style="background-image:url({{ url('template/dist/img/welcome.png') }}); background-repeat:no-repeat; background-position:center; background-size:cover;">
        <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        <p class="h3">Welcome to</p> 
                        <p class="h1">Event Attendance</p>
                    </div>
                    @if (Route::has('login'))
                    @auth
                        <p class="text-success">You are has Login</p>
                    @else
                        <a href="{{route('login')}}" class="btn btn-primary">Login as Organizer</a>
                        <a href="{{route('auth')}}" class="btn btn-primary">Login as User</a>
                        @endauth
                    @endif
                </div>
            <div>
        </div>
    </body>
    <script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
