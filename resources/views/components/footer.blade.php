
{{-- <footer class="rounded-lg  m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 
        <a href="/" class="hover:underline">skoura house</a>
        . All Rights Reserved.
    </span>

    </div>




</footer> --}}

<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="/" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{url('images/logo-removebg-preview.png')}}" alt="skourahouse" class="h-32 w-32 rounded-[50%]">
            Skourahouse    
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias aliquid inventore blanditiis totam!</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="{{route('reservation')}}" class="hover:underline me-4 md:me-6">reservation</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Campaigns</a>
            </li>
            <li>
                <a href="{{route('contact')}}" class="hover:underline">Contact</a>
            </li>
   
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 
            <a href="/" class="hover:underline">skoura house</a>
            . All Rights Reserved.
        </span>
    </div>
  </footer>