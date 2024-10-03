<x-app-layout>
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 m-4 mt-12 w-full">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a 
                                href="{{route('suites.create')}}" 
                                class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Suite
                            </a>                       
                        </div>
                    </div>
                    <div class="overflow-x-auto flex justify-center">
                        <table class="w-full sm:w-[70%]  text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">image</th>
                                    <th scope="col" class="px-6 py-3">description</th>
                                    <th scope="col" class="px-6 py-3">adventages</th>
                                    <th scope="col" class="px-6 py-3">classification</th>
                                    <th scope="col" class="px-6 py-3">price</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suites as $suite)
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            <img class="max-h-[100px] max-w-[100px] rounded-sm" src="{{url($suite->image)}}" alt="">
                                        </td>

                                        <td class="px-6 py-4">{{substr($suite->description,0,80)}}</td>
                                        <td>
                                            @foreach ($suite->avantages as $avantage)
                                                <span>{{$avantage}}</span> ,
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4">{{$suite->classification}}</td>
                                        <td class="px-2 py-4">{{$suite->prix}} $</td>

                                        <td class="px-2  flex gap-1 h-[100px] items-center">
                                            <x-show
                                                id="{{$suite->id}}"
                                                price="{{$suite->prix}}"
                                                classification="{{$suite->classification}}"
                                                description="{{$suite->description}}"
                                                avantages="{{implode(',' , $suite->avantages)}}"
                                            />
                                            <a 
                                                href="{{route('suites.edit' , $suite->id)}}" 
                                                class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                                Edit
                                            </a>
                                            <x-confirm-delete
                                                id="{{$suite->id}}"
                                                theRoute='suites'
                                            />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>
