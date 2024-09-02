<x-app-layout>
    @isset($reservations)
    <table class="w-[80%] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4 ">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4 mx-[40px]">Ajouter reservation</button>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Client Name</th>
                    <th scope="col" class="px-6 py-3">Client Last Name</th>
                    <th scope="col" class="px-6 py-3">Phone</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Adress</th>
                    <th scope="col" class="px-6 py-3">Suite</th>
                    <th scope="col" class="px-6 py-3">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4">{{$reservation->firstName}}</td>
                    <td class="px-6 py-4">{{$reservation->lastName}}</td>
                    <td class="px-6 py-4">{{$reservation->phone}}</td>
                    <td class="px-6 py-4">{{$reservation->email}}</td>
                    <td class="px-6 py-4">{{$reservation->adress}}</td>
                    <td class="px-6 py-4">{{$reservation->suite_id}}</td>
                    <td>
                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endisset 
</x-app-layout>
