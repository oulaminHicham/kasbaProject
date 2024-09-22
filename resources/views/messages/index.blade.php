<x-app-layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 m-4 mt-12 w-full">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto flex justify-center">
                    <table class="w-full sm:w-[70%]  text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">email</th>
                                <th scope="col" class="px-6 py-3">subject</th>
                                <th scope="col" class="px-6 py-3">message</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-6 py-4">{{$message->email}}</td>
                                    <td class="px-6 py-4">{{$message->subject}} </td>
                                    <td class="px-6 py-4">{{$message->message}} </td>

                                    <td class="px-2  flex gap-1 h-[100px] items-center">
                                        <x-confirm-delete
                                            id="{{$message->id}}"
                                            theRoute='contact'
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
