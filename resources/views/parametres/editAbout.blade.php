<x-app-layout>
    <form action="{{route('parametres.update' , $parametre->id)}}" class="w-[60%] mx-auto mt-10" method="POST">
        @csrf
        @method("PUT")
        <x-input-label>language</x-input-label>
        <select 
            id="countries" 
            class="bg-gray-50 border border-gray-300 mt-3 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
               dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="lang"
        >
            <option selected>Choisir Un langue </option>
            <option value="english" @selected($parametre->lang =='english')>english</option>
            <option value="french" @selected($parametre->lang =='french')>french</option>
            <option value="arbic" @selected($parametre->lang =='arbic')>arabic</option>
            <option value="spanish" @selected($parametre->lang =='spanish')>spanish</option>
        </select>

        <x-input-label>about</x-input-label>
        <textarea 
        id="message" 
        rows="10" 
        name="about_us"
        class="block p-2.5 w-full text-sm text-gray-900 mt-3 mb-3 bg-gray-50 rounded-lg border
         border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
          dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
           dark:focus:border-blue-500">
           {{$parametre->about_us}}"
        </textarea>
        <button type="submit" class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">edit</button>
    </form>
</x-app-layout>