<x-main-layout>
    <section class="relative flex justify-between items-center">
        <img id="carsoulImager" src="{{url('images/img5.jpg')}}" class="w-full max-h-[600px]" alt="">
    </section>
    
    <section class=" px-52 py-10 ">
        <main class="flex justify-center items-center">
            <img class="w-52 animate-rotate-x " src="{{url('images/logo-removebg-preview.png')}}" alt="">
            <h3 class="animate-bounce mb-4 text-1xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Skoura house</span>
            </h3>
        </main>

        <main id="about" class="">
            <p id="" class="animate-rotate-x mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest
             first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900
              dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">
              @lang('general.aboutContent')
            </p>
        </main>
        <main>
            

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-16">

                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img12.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img13.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img3.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img9.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img13.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{url('images/img10.jpg')}}" alt="">
                </div>
            </div>
        </main>

       

    </section>
    <aside>
        


       
        






    </aside>
    <x-footer/>
</x-main-layout>
