{{-- <form action="{{ route('language.switch') }}" method="POST" class="inline-block">
    @csrf
    <select name="language" onchange="this.form.submit()" class="p-2 rounded bg-gray-100 text-gray-800">
        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
        <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>French</option>
        <option value="ar" {{ app()->getLocale() === 'ar' ? 'selected' : '' }}>Arabic</option>
    </select>
</form> --}}


   <form action="{{ route('language.switch') }}" method="POST" class="">
    @csrf
    <select name="language" onchange="this.form.submit()" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
        <option 
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" 
               role="menuitem" value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}
            >
            English
         </option>
        <option 
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" 
            role="menuitem" value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}
            >
            French
         </option>
        <option 
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" 
            role="menuitem" value="ar" {{ app()->getLocale() === 'ar' ? 'selected' : '' }}
         >
         Arabic
      </option>
    </select>
</form>




   
