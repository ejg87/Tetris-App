<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Vuetify CSS -->
        <link href="https://cdn.jsdelivr.net/npm/vuetify@3.x/dist/vuetify.min.css" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app"></div> <!-- Vue will mount your application here -->

        <!-- Optional: include Vuetify JS from CDN if you're not importing it in app.js -->
        <script src="https://cdn.jsdelivr.net/npm/vuetify@3.x/dist/vuetify.min.js"></script>
    </body>
</html>
