<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="icon" href="{{ asset('img/heyicon-300x300.png') }}">


    <title>@yield('title')</title>
</head>

<style>
    html {
        font-family: "Clash Display", sans-serif;
    }

    @import url("http://fonts.cdnfonts.com/css/clash-display");

    @media only screen and (min-width: 350px) {
        body {
            background-image: url("img/bg_warning2.png");
            background-color: #21222a;
            background-repeat: no-repeat;
            background-position: center;
            -webkit-mask-size: auto;
            height: 100%;
            width: 100%;
            font-family: "Clash Display", sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .heading h1 {
            text-align: center;
            color: #ff5858;
            font-size: 55px;
            padding-bottom: 3%;
            padding-top: 10%;
            font-weight: 600;
            letter-spacing: 5px;
        }

        p {
            padding-right: 5%;
            padding-left: 5%;
            padding-bottom: 2%;
            font-size: 20px;
            text-align: center;
            color: white;
        }


        .btn {
            background-color: #ff5858;
            transition: all 0.5s;
            font-family: "Clash Display", sans-serif;
            color: white;
            font-size: 25px;
            font-weight: 500;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            padding: 10px 35px 10px;
            text-align: center;
        }
    }

    @media only screen and (min-width: 1200px) {
        body {
            background-image: url("img/bg_warning.png");
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 50%;
            height: 100%;
            padding-right: 10%;
        }

        .heading {
            text-align: center;
            color: #ff5858;
        }

        p {
            color: #21222a;
            padding-right: 10%;
            padding-left: 5%;
            font-size: 20px;
            text-align: justify;
        }

        h1 {
            font-size: 134px;
            font-weight: 600;
            letter-spacing: 5px;
        }

        .btn {
            background-color: #ff5858;
            transition: all 0.5s;
            display: inline-block;
            font-family: "Clash Display", sans-serif;
            color: white;
            font-size: 23px;
            font-weight: 500;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            padding: 10px 75px 10px;
        }

        .btn span {
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .btn:hover,
        .btn:focus,
        .btn:active {
            -webkit-transform: translateY(8px);
            transform: translateY(8px);
        }
    }

</style>

<body>
    <header style="height: 30px; padding-left: 100px">
        <a href="/"><img src="{{ asset('img/Logo.png') }}" alt="" /></a>
    </header>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
