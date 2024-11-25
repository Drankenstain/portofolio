<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/logo.jpg') }}" alt="" width="150px">
            </div>
        </div>
        <div class="row">
            <div class="col">@yield('content')</div>
        </div>
        <div class="row">
            <div class="col text-center">&copy;2024 Web Programming</div>
        </div>
    </div>
</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>
