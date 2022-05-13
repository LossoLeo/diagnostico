<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <link rel="icon" href="{{ asset('img/heyicon-300x300.png') }}">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P6V55RG');
    </script>
    <!-- End Google Tag Manager -->

    <title>@yield('title')</title>
</head>

<style>
    html {
        font-family: "Clash Display", sans-serif;
    }

    @import url("https://fonts.cdnfonts.com/css/clash-display");

    @media only screen and (min-width: 350px) {
        body {
            background-image: url('img/bg_quiz.png');
            background-color: #21222a;
            background-repeat: no-repeat;
            background-position: top left;
            background: center;
            height: 100%;
            width: 100%;
            font-family: "Clash Display", sans-serif;
        }

        .login-box .row label {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #21222a;
            font-size: 18px;
            overflow: hidden;
            text-decoration: none;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: transparent;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
            transition: 0.5s;
            cursor: pointer;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type=checkbox]:checked+label {
            color: #21222a;
            background-color: grey;
            font-style: normal;
        }

        .row {
            display: inline;
        }

        /* AQUI TESTE */
        .login-box {
            text-align: center;
            width: 100%;
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
            overflow: hidden;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: #ffffff;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
        }


        /* AQUI TERMINA O TESTE*/

        .col h1 {
            text-align: center;
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

    @media only screen and (min-width: 930px) {
        body {
            background-image: url("img/bg_quiz.png");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }

        .row {
            display: flex;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type=checkbox]:checked+label {
            color: #21222a;
            background-color: #ffffff;
            font-style: normal;
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

        .login-box .row label {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #21222a;
            font-size: 18px;
            overflow: hidden;
            text-decoration: none;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: transparent;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
            transition: 0.5s;
            cursor: pointer;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #21222a;
            font-size: 18px;
            overflow: hidden;
            text-decoration: none;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: transparent;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
            transition: 0.5s;
            cursor: pointer;
        }

        .login-box button {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #21222a;
            font-size: 18px;
            overflow: hidden;
            text-decoration: none;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: transparent;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
            transition: 0.5s;
            cursor: pointer;
        }

        .login-box btn {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            color: #ffffff;
            font-size: 18px;
            overflow: hidden;
            text-decoration: none;
            transition: 1s;
            margin-top: 40px;
            letter-spacing: 1px;
            background-color: #ff5858;
            border-radius: 30px;
            border-color: #21222a;
            border-style: solid;
            border-width: 2px;
            font-weight: 600;
            transition: 0.5s;
            cursor: pointer;
        }

        .login-box button:hover {
            -webkit-transform: translateY(8px);
            transform: translateY(8px);
            background-color: #ffffff;
            cursor: pointer;
        }

        .login-box form a:hover {
            -webkit-transform: translateY(8px);
            transform: translateY(8px);
            background-color: #ffffff;
            cursor: pointer;
        }



        /* AQUI TERMINA O TESTE*/

        .col h1 {
            color: #21222a;
            text-align: left;
            font-size: 50px;
            font-weight: 600;
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6V55RG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header style="height: 30px; padding-left: 100px; padding-top: 15px">
        <a href="/"><img src="{{ asset('img/black_logo.png') }}" alt="" /></a>
    </header>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
