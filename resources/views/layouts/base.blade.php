<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        h1 {
            margin: 20px 0;
        }

        .edit-button {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        /*html, body {*/
            /*background-color: #fff;*/
            /*color: #636b6f;*/
            /*font-family: 'Raleway', sans-serif;*/
            /*font-weight: 100;*/
            /*height: 100vh;*/
            /*margin: 0;*/
        /*}*/

        /*.full-height {*/
            /*height: 100vh;*/
        /*}*/

        /*.flex-center {*/
            /*align-items: center;*/
            /*display: flex;*/
            /*justify-content: center;*/
        /*}*/

        /*.position-ref {*/
            /*position: relative;*/
        /*}*/

        /*.top-right {*/
            /*position: absolute;*/
            /*right: 10px;*/
            /*top: 18px;*/
        /*}*/

        /*.content {*/
            /*text-align: center;*/
        /*}*/

        /*.title {*/
            /*font-size: 84px;*/
        /*}*/

        /*.links > a {*/
            /*color: #636b6f;*/
            /*padding: 0 25px;*/
            /*font-size: 12px;*/
            /*font-weight: 600;*/
            /*letter-spacing: .1rem;*/
            /*text-decoration: none;*/
            /*text-transform: uppercase;*/
        /*}*/

        /*.m-b-md {*/
            /*margin-bottom: 30px;*/
        /*}*/
    </style>
</head>
<body>
<div class="container">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li><a class="btn btn-outline-primary mr-2" href="{{route('currencies.index')}}">Currencies</a></li>
        <li><a class="btn btn-outline-success" href="{{route('currencies.create')}}">Add</a></li>
    </ul>

    <h1> @yield('h1') </h1>
    @yield('content')
</div>
</body>
</html>
