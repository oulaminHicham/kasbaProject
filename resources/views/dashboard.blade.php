<x-app-layout>
  
<section class="bg-white py-8 antialiased dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
          <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6">General overview</h2>
          <div class="flex justify-around border-b border-t border-gray-200 py-4 dark:border-gray-700 md:py-8 lg:grid-cols-4 xl:gap-16">
            <div>
              <div class="flex gap-5">
                <svg class="mb-2 h-8 w-8 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                </svg>
                <span class="flex items-center text-2xl font-bold text-gray-900 dark:text-white"
                ><a href="{{route('reservations.index')}}">
                  {{$numOfReservation}}
                </a>
              </span>
              </div>
              <h3 class="mb-2 text-gray-500 dark:text-gray-400">Orders made</h3>
            </div>

            <div>
                <div class="flex gap-2">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                  </svg>
                  <span class="flex items-center text-2xl font-bold text-gray-900 dark:text-white"
                  ><a href="{{route('suites.index')}}">
                    {{$numOfSuites}}
                  </a>
                </span>
                </div>
                  
              <h3 class="mb-2 text-gray-500 dark:text-gray-400">suites</h3>
            </div>

          </div>
          <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-8">
            <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Latest orders</h3>
          </div>
          <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            order id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            price
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($reservations as $reservation)
                      
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #{{$reservation->id}}
                        </th>
                        <td class="px-6 py-4">
                          {{$reservation->created_at}}

                        </td>
                        <td class="px-6 py-4">
                          {{$reservation->price}}

                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
</section>

</x-app-layout>
