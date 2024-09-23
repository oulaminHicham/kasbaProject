<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>skourahouse</title>
    @vite('resources/css/app.css')
    @vite('resources/js/carsoul.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://js.stripe.com/v3/"></script>

</head>
@php($direction = app()->getLocale() =='ar' ? 'rtl':'ltr')
<body  class="bg-indigo-50" dir="{{$direction}}">
    <x-navbare />
    <main class="pt-16">
        {{$slot}}  
    </main>  
    <div id="checkout">
        <!-- Checkout will insert the payment form here -->
    </div>
</body>
</html>