<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('dashbord') }}
        </h2>
    </x-slot> --}}
   <div class="h-full flex justify-center items-center sm:p-48">
        <div class="grid  sm:grid-cols-2 sm:gap-40 grid-rows-1 gap-4">
            <div class="bg-red-400 text-red-50 w-72 h-48 rounded-lg  flex justify-center items-center hover:bg-red-300 sm:m-0 m-5">
                    <a class="btn" href="{{route('reservations.index')}}">{{$numOfReservation}} reservation</a>
            </div>
            <div class="bg-red-400 text-red-50 w-72 h-48 rounded-lg flex justify-center items-center hover:bg-red-300 sm:m-0 m-5">
                <a class="btn" href="{{route('suites.index')}}">{{$numOfSuites}} suite</a>
            </div>
        </div>
   </div>
</x-app-layout>
