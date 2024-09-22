


<x-app-layout>
    <section class="bg-gray-50 dark:bg-gray-900 sm:p-5 mt-12 w-full sm:m-4">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex  justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a 
                            href="{{route('reservations.create')}}" 
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Reservation
                        </a>                       
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">fullName</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">price</th>
                                <th scope="col" class="px-6 py-3">Suite</th>
                                <th scope="col" class="px-6 py-3">details</th>
                                <th scope="col" class="px-6 py-3">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-6 py-4">{{$reservation->fullName}}</td>
                                    <td class="px-6 py-4">{{$reservation->email}}</td>
                                    <td class="px-6 py-4">{{$reservation->price}}</td>
                                    <td class="px-6 py-4">{{$reservation->suite_id}}</td>
                                    <td class="px-6 py-4">{{substr($reservation->details ,0 ,100)}}</td>
                                    <td class="px-2  flex gap-1 h-[100px] items-center">
                                        <x-show 
                                        id="{{$reservation->id}}"
                                        clientName="{{$reservation->fullName}}"
                                        email="{{$reservation->email}}"
                                        price="{{$reservation->price}}"
                                        description="{{$reservation->details }}"
                                        />
                                        <a 
                                            href="{{route('reservations.edit' , $reservation->id)}}" 
                                            class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                            Edit
                                        </a>
                                        <x-confirm-delete
                                        id="{{$reservation->id}}"
                                        theRoute='reservations'
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
