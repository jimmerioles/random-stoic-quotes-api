<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110960249-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-110960249-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A random stoic quotes Web API back-end (Server-side Web API). JSON API v1 and CORS compliant.">
        <meta name="theme-color" content="#636B6F">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@jimmerioles">
        <meta name="twitter:title" content="Random Stoic Quotes API">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="https://randomstoicquotesapi.herokuapp.com/images/site-image-lg.jpg">

        <meta property="og:title" content="A Tribute to Sergeant Stubby">
        <meta property="og:description" content="A random stoic quotes Web API back-end (Server-side Web API). JSON API v1 and CORS compliant.">
        <meta property="og:image" content="https://randomstoicquotesapi.herokuapp.com/images/site-image-lg.jpg">
        <meta property="og:url" content="https://randomstoicquotesapi.herokuapp.com">

        <title>Random Stoic Quotes API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Random Stoic Quotes API
                </div>

                <div class="links">
                    <a href="https://github.com/jimmerioles/random-stoic-quotes-api">Documentation</a>
                    <a href="https://twitter.com/jimmerioles">Twitter</a>
                </div>
            </div>
        </div>
    </body>
</html>
