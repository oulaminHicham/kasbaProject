<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="/" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{url('images/logo-removebg-preview.png')}}" alt="skourahouse" class="h-32 w-32 rounded-[50%]">
            Skourahouse    
        </a>
        <ul class="flex flex-wrap justify-center gap-4 items-center mb-6 text-gray-900 dark:text-white">
              <li>
                <a href="https://fr.wikipedia.org/wiki/Skoura" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('general.about_skoura')</a>
              </li>
              <li>
                <a href="{{route('contactUs')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('general.navigation.Contact')</a>
              </li>
              <li>
                <a href="{{route('reservation')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('general.navigation.reservation')</a>
              </li>
   
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 
            <a href="/" class="hover:underline">skoura house</a>
            . All Rights Reserved.
        </span>
    </div>
  </footer>