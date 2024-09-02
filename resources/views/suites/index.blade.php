<x-app-layout>
        @isset($suites)
            <table class="w-[80%] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">description</th>
                        <th scope="col" class="px-6 py-3">avantages</th>
                        <th scope="col" class="px-6 py-3">classification</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suites as $suite)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">{{$suite->description}}</td>
                        <td>
                            @foreach ($suite->avantages as $avantage)
                                <span>{{$avantage}}</span> ,
                            @endforeach
                        </td>
                        <td class="px-6 py-4">{{$suite->classification}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endisset 
</x-app-layout>
