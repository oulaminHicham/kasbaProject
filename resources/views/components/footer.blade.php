{{-- <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
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
  </footer> --}}


<footer class="p-14 bg-dark-900 flex flex-col gap-5">
  <main class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-4">
    <img src="{{url('images/logo-removebg-preview.png')}}"/>
    <p class="text-warning-100 mx-10 my-5">@lang('general.footer.about')</p>
    <div class="mx-16">
      <h3 class="text-warning-200">@lang('general.footer.plan')</h3>
      <ul>
        <li class="text-warning-100 my-5">
          <a href="/">@lang('general.navigation.home')</a>
        </li>
        <li class="text-warning-100 my-5">
          <a href="/">@lang('general.navigation.howWeAre')</a>
        </li>
        <li class="text-warning-100 my-5">
          <a href="/">@lang('general.navigation.experiences')</a>
        </li>
        <li class="text-warning-100 my-5">
          <a href="{{route('contactUs')}}">@lang('general.navigation.Contact')</a>
        </li>
      </ul>
    </div>
    <div class="mx-16">
      <h1 class="text-warning-200 mb-5">@lang('general.footer.contact')</h1>
      <div class="flex gap-4 my-4">
        <svg class="w-6 h-6 text-warning-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"/>
        </svg>
        <a href="tel:+21232457690" class="text-warning-100">21232457690</a>
      </div>
      <div class="flex gap-4 my-4">
        <svg class="w-6 h-6 text-warning-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
        </svg>
        <a href="mailto:skourahous@gmail.com" class="text-warning-100">@lang('general.footer.click')</a>
      </div>
      <div>
        <h4 class="text-warning-200 my-5">folow us !</h4>
        <div class="flex">
          <a href="#">
            <svg class="w-6 h-6 text-warning-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
            </svg>
          </a>
          <a href="#">
            <svg class="w-6 h-6 text-warning-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
      </div>
      
    </div>
  </main>
  <hr class="w-full h-1 mx-auto my-4 bg-warning-100 border-0 rounded">

  
</footer>

  