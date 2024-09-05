<x-app-layout>
        @isset($suites)
            <table class="w-[80%] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
                <a
                 class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4 mx-[40px]"
                 href="{{route('suites.create')}}"
                 >Ajouter suite</a>

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">description</th>
                        <th scope="col" class="px-6 py-3">avantages</th>
                        <th scope="col" class="px-6 py-3">classification</th>
                        <th scope="col" class="px-6 py-3">prix</th>
                        <th scope="col" class="px-6 py-3">operations</th>
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
                        <td class="px-6 py-4">{{$suite->prix}}</td>
                        <td>
                            <button    class="focus:outline-none text-white bg-green-700
                                            hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium
                                            rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600
                                            dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <a href="{{route('suites.edit' , $suite->id)}}">Edit</a>
                            </button>
                            <form class="inline" method="POST" action="{{route("suites.destroy" , $suite->id)}}" >
                                @csrf
                                @method('DELETE')
                                <button
                                  class="focus:outline-none text-white bg-red-700
                                        hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium
                                        rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600
                                        dark:hover:bg-green-700 dark:focus:ring-green-800"
                                 >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endisset 
</x-app-layout>
