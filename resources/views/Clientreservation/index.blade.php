 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbare />
    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-36 mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-16 py-3">
                        <span class="sr-only">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
        
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4">
                        <img src="{{url('images/IMG_3605.jpg')}}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        $599
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline mx-3">details</a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-3">Réserver maintenant</a>
                    </td>
          <x-galrie />
            </tbody>
        </table>
    </div> --}}
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-12">
        @foreach ($suites as $suite)
            <x-card 
                img='images/IMG_3555.jpg'
                classification="{{$suite->classification}}"
                description="{{$suite->description}}"
                avantages="{{implode(',' , $suite->avantages)}}"
            />
        @endforeach
    </div>
</body>
</html>