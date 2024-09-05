<x-app-layout>
    <form action="{{route("reservations.update" , $reservation->id)}}" method="POST"  class=" px-5 py-7 rounded-2 w-full sm:w-[40%] mx-auto  mt-5">
        @method('PUT')
        @csrf
        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Ajouter Reservation</h3>

        <x-input label="first name" type='text' name="firstName" value="{{$reservation->firstName}}"/>
        <x-input label="last name" type='text' name="lastName" value="{{$reservation->lastName}}"/>
        <x-input label="phone" type='tel' name="phone" value="{{$reservation->phone}}"/>
        <x-input label="email" type='email' name="email" value="{{$reservation->email}}"/>
        <x-input label="adress" type='text' name="adress" value="{{$reservation->adress}}"/>
        

        <x-input-label>Details</x-input-label>
        <textarea 
            id="message" 
            rows="4" 
            name="details"
            class="block p-2.5 w-full text-sm text-gray-900 mt-3 mb-3 bg-gray-50 rounded-lg border
             border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
               dark:focus:border-blue-500">
               {{$reservation->details}}"
        </textarea>

  
        <x-input-label>Suite</x-input-label>
        <select 
            id="countries" 
            class="bg-gray-50 border border-gray-300 mt-3 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
               dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="suite_id"
            value="{{$reservation->id}}"
        >
            <option selected>Choisir Un Suites </option>
            @foreach ($suites as $suite)
                <option @selected($reservation->suite_id == $suite->id)  value={{$suite->id}}>{{$suite->id}}</option>
            @endforeach
        </select>

        <div class="text-center mt-4">
            <x-primary-button>Modefier</x-primary-button>
        </div>

    </form>
</x-app-layout>