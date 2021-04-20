<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- For the project purposes I just use the Tailwind css minified from CDN -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <title>Simple Laravel Vue JS CRUD System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <nav class="bg-white px-8 pt-2 shadow-md">
            <div class="-mb-px flex justify-center">
                <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide {{ request()->routeIs('users.index') ?  "font-bold" : "" }} text-xs py-3 mr-4" href="{{ route('users.index') }}">
                    Users
                </a>
                <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide {{ request()->routeIs('departments.index') ?  "font-bold" : "" }} text-xs py-3 mr-4" href="{{ route('departments.index') }}">
                    Departments
                </a>
            </div>
       </nav>

        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
