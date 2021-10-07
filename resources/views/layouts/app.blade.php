<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Casturi', 'Casturi') }}</title>
    <link rel="icon" href="assets/img/logo-casturi.png">

   
</head>

<body>



    <div id="app">

        <main >
            @yield('content')
        </main>

    </div>


    <!-- Main Sidebar Container -->

</body>

</html>