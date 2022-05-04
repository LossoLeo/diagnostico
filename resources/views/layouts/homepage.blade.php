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

    @media only screen and (min-width: 320px) {
        body {
            /*background-image: url("img/bg_homepage.png");*/
            background-color: #21222a;
            background-repeat: no-repeat;
            background-position: top left;
            height: 100%;
            width: 100%;
            font-family: "Clash Display", sans-serif;
        }

        /* AQUI TESTE */
        .login-box {
            text-align: center;
            width: 100%;
            padding: 35px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .login-box h2 {
            padding-bottom: 5%;
            color: #ff5858;
            text-align: center;
            font-size: 35px;
            text-transform: capitalize;
        }

        .login-box p {
            padding-bottom: 5px;
            color: #21222a;
            text-align: left;
        }

        .login-box .user-box {}

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #ff5858;
            outline: none;
            background: transparent;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #ffffff;
            font-size: 22px;
            text-decoration: none;
            text-transform: capitalize;
            overflow: hidden;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: #ff5858;
            border-radius: 30px;
            font-weight: 500;
        }


        /* AQUI TERMINA O TESTE*/

        .col h1 {
            color: #ffffff;
            text-align: left;
            font-size: 35px;
            font-weight: 500;
            padding-top: 20%;
            padding-left: 3%;
            padding-right: 3%;
            text-align: center;
            letter-spacing: 1px;
            line-height: 1em;
        }

        .col h5 {
            color: #ffffff;
            line-height: 1.3em;
            text-align: center;
            font-weight: 400;
            font-size: 20px;
            letter-spacing: 0.1em;
        }

        .col span {
            color: #ff5858;
            font-size: 35px;
        }

        /* AQUI TERMINA O TESTE*/

    }

    @media only screen and (min-width: 1350px) {
        body {
            background-image: url("img/bg_homepage.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
        }



        /* AQUI TESTE */
        .login-box {
            width: 60%;
            padding: 35px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .login-box h2 {
            padding-bottom: 5%;
            color: #ff5858;
            text-align: left;
        }

        .login-box p {
            padding-bottom: 5px;
            color: #21222a;
            text-align: left;
        }

        .login-box .user-box {}

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 18px;
            color: #21222a;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #ff5858;
            outline: none;
            background: transparent;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #ffffff;
            font-size: 22px;
            text-decoration: none;
            text-transform: capitalize;
            overflow: hidden;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: #ff5858;
            border-radius: 30px;
            font-weight: 500;
        }


        /* AQUI TERMINA O TESTE*/

        .col h1 {
            color: #ffffff;
            text-align: left;
            font-size: 50px;
            font-weight: 500;
            letter-spacing: 0.7px;
            padding-left: 25%;
            line-height: 1em;
        }

        .col h5 {
            color: #21222a;
            text-align: left;
        }

        .col span {
            color: #ff5858;
            font-size: 50px;
        }


    }

</style>

<body>
    <header style="height: 30px; padding-left: 100px; padding-top: 15px">
        <a href="/"><img src="{{ asset('img/Logo.png') }}" alt="" /></a>
    </header>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
