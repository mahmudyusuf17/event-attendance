<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
    <title>Registration User</title>
</head>
<body>
<div class="wrapper">
    <div class="login-page" style="background-image:url({{ url('template/dist/img/login.png') }}); background-repeat:no-repeat; background-position:center; background-size:cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div id="app">
                    <register></register>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</html>