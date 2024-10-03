   <nav class="bg-dark-900  fixed w-full z-20 top-0 start-0 border-b ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img class="h-24 w-auto rounded-lg" src="{{url('images/logo-removebg-preview.png')}}" alt="Your Company">
      <span @class(['hidden' => app()->getLocale()=='ar']) class="hidden sm:block self-center text-2xl font-semibold whitespace-nowrap dark:text-white">skourahouse</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <x-select-language/>

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-sticky">
      <ul class="rtl: flex flex-col p-4 md:p-0 mt-4 font-medium font-sans border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
          <a href="/" class="actived block py-2 px-3 text-warning-50 bg-warning-100 rounded md:bg-transparent md:p-0">@lang('general.navigation.home')</a>
        </li>
        <li>
          <a href="/experiences" class="block py-2 px-3 text-warning-50  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Experiences</a>
        </li>
        <li>
          <a href="{{route('contactUs')}}" class="block py-2 px-3 text-warning-50  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('general.navigation.Contact')</a>
        </li>
        <li>
          <a href="{{route('reservation')}}" class="block py-2 px-3 text-warning-50  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('general.navigation.reservation')</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  

   