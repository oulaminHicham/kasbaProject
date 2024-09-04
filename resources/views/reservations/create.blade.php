<x-app-layout>
    <x-form>
        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Ajouter Reservation</h3>

        <x-input label="first name" type='text' name="firstName" />
        <x-input label="last name" type='text' name="lastName"/>
        <x-input label="phone" type='tel' name="phone"/>
        <x-input label="email" type='email' name="email"/>
        <x-input label="adress" type='text' name="adress"/>
        

        <x-input-label>Details</x-input-label>
        <textarea 
            id="message" 
            rows="4" 
            name="details"
            class="block p-2.5 w-full text-sm text-gray-900 mt-3 mb-3 bg-gray-50 rounded-lg border
             border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
               dark:focus:border-blue-500">
        </textarea>

  
        <x-input-label>Suite</x-input-label>
        <select 
            id="countries" 
            class="bg-gray-50 border border-gray-300 mt-3 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
               dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="suite_id"
        >
            <option selected>Choisir Un Suites </option>
            @foreach ($suites as $suite)
                <option value={{$suite->id}}>{{$suite->id}}</option>
            @endforeach
        </select>

        <div class="text-center mt-4">
            <x-primary-button>Ajouter</x-primary-button>
        </div>

    </x-form>
</x-app-layout>