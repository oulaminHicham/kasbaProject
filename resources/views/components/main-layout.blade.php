 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation</title>
    @vite('resources/css/app.css')
    @vite('resources/js/carsoul.js')
    <script src="https://js.stripe.com/v3/"></script>

</head>
<body  class="bg-indigo-50">
    <x-navbare />
        {{$slot}}    
        <div id="checkout">
            <!-- Checkout will insert the payment form here -->
        </div>
</body>
</html>