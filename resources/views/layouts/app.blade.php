<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{url('images/logo-removebg-preview.png')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'house skoura') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dark:bg-gray-900">
        <div class="grid sm:grid-cols-12 antialiased bg-gray-50 dark:bg-gray-900">
              <x-dashbord-nav/>
              <!-- Sidebar -->
              <x-sidbar/>
          
              <main class=" col-span-10 col-start-3  py-16">
                  {{$slot}}
              </main>
        </div> 
    </body>
</html>
