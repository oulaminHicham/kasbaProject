{{--
          @php
                $abouts=$Parametre->all();
                $theCurrentAbout = '';
                foreach ($abouts as $about) {
                    if ($about->lang === app()->getLocale()) {

                        $theCurrentAbout = $about->about_us ;
                    }
                }
            @endphp
 --}}
<x-main-layout>
    {{-- start of cursal --}}
    <main class="">
        <img id="carsoulImager" src="{{url('images/img5.jpg')}}" class="relative w-full max-h-[600px]" alt="cover">
    </main>
    {{-- end of cursal --}}
    {{-- start experiences --}}
    <main class="grid grid-cols-1 sm:grid-cols-2 p-5 gap-2 sm:p-32 sm:gap-12">
        <div>
            <h1 class="my-5 text-warning-200">@lang('general.Experiences.title')</h1>
            <hr class="text-green-700 w-20">
            <h3 class="my-10 text-2xl text-warning-50">@lang('general.Experiences.second title')</h3>
            <p class="text-warning-50">@lang('general.Experiences.content')</p>
            <div class="bg-dark-900 discover_btn px-2 py-2 w-[50%] hover:w-[60%] cursor-pointer my-5 rounded-sm shadow-lg">
                <a href="#" class="text-warning-200">@lang('general.Experiences.discover_btn')</a>
            </div>
        </div>
        <figure class="relative  transition-all duration-300  filter grayscale-0 hover:grayscale">
            <img src="{{url('images/img5.jpg')}}" class="rounded-lg"  alt="pec">
        </figure>
    </main>
    {{-- end experiences --}}

    {{-- start discover --}}
    <main>
        <h1 class="animate-bounce mb-4  font-bold  md:text-5xl lg:text-6xl my-5 text-center">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-warning-100 from-warning-200">@lang('general.discover_skoura.title')</span>
        </h1>
        <hr class="w-[20%] mx-auto mb-10">
        <div class="discover_cover">
            <div class="w-full sm:w-[50%] bg-white p-16 opacity-75">
                <h1 class="text-warning-200 font-bold  my-10">@lang('general.discover_skoura.second_title')</h1>
                <hr class="w-48 h-1 my-4 bg-green-600 border-0 rounded md:my-10 dark:bg-gray-700">
                <p class="my-10 text-dark-500 text-lg">@lang('general.discover_skoura.content')</p>
                <a href="#" type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                    @lang('general.discover_skoura.btn')
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-4 bg-white p-5 sm:p-26 opacity-75 py-3 sm:py-36 px-20 mt-0.1 h-[531px]">
                <div class="flex flex-col items-center justify-center  m-0 sm:m-5 gap-5">
                    <span class="text-green-700 text-7xl mx-16">10</span>
                    <span class="text-warning-200 font-bold text-2xl">@lang('general.discover_skoura.experience')</span>
                </div>
                <div class="flex flex-col items-center justify-center  m-0 sm:m-5 gap-5">
                    <span class="text-green-700 text-7xl mx-16">+300</span>
                    <span class="text-warning-200 font-bold text-2xl">@lang('general.discover_skoura.satisfaits')</span>
                </div>
                <div class="flex flex-col items-center justify-center  m-0 sm:m-5 gap-5">
                    <span class="text-green-700 text-7xl mx-16">3</span>
                    <span class="text-warning-200 font-bold text-2xl">@lang('general.discover_skoura.guide')</span>
                </div>
                <div class="flex flex-col items-center justify-center  m-0 sm:m-5 gap-5">
                    <span class="text-green-700 text-7xl mx-16">1</span>
                    <span class="text-warning-200 font-bold text-2xl">@lang('general.discover_skoura.equipe')</span>
                </div>
                
            </div>
        </div>
    </main>
    {{-- end discover --}}

    {{-- start galray --}}
        <main class="grid grid-cols-1 md:grid-cols-4 mt-32 sm:mt-0">
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img8.jpg')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img11.jpg')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img14.jpg')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img19.jpeg')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img20.jpeg')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img16.png')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img17.png')}}" alt="">
            </div>
            <div>
                <img class="h-[600px] w-[100%] " src="{{url('images/img18.png')}}" alt="">
            </div>
        </main>
    {{-- end galray --}}

    {{-- start qualetys --}}
        <main class="my-10 mx-24 py-16">
            <h1 class="text-warning-200 text-2xl text-center font-bold my-10">@lang('general.services_quality.title')</h1>
            <hr class="w-48 h-1 my-10 mx-auto bg-green-600 border-0 rounded md:my-10 dark:bg-gray-700 mb-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="flex flex-col items-center w-full sm:w-[80%]">
                    <svg class="w-16 h-16 text-warning-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                      </svg>
                      <h3 class="text-warning-200 my-2 text-center">@lang('general.services_quality.team_experience')</h3>
                      <p class="text-warning-100 my-2 text-center">@lang('general.services_quality.team_experience_content')</p>
                </div>
                <div class="flex flex-col items-center w-full sm:w-[80%]">
                    <svg class="w-16 h-16 text-warning-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                      </svg>
                      
                      <h3 class="text-warning-200 my-2 text-center">@lang('general.services_quality.premium')</h3>
                      <p class="text-warning-100 my-2 text-center">@lang('general.services_quality.premium_content')</p>
                </div>
                <div class="flex flex-col items-center w-full sm:w-[80%]">
                    <svg class="w-16 h-16 text-warning-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
                      </svg>
                      
                      <h3 class="text-warning-200 my-2 text-center">@lang('general.services_quality.qualified_guide')</h3>
                      <p class="text-warning-100 my-2 text-center">@lang('general.services_quality.qualified_guide_content')</p>
                </div>
            </div>
        </main>
    {{-- end qualitys --}}
    
    {{-- start contact us --}}
        <main class="contact--us p-10 sm:p-36 opacity-50  flex flex-col  justify-center items-center">
            <div class="w-full sm:w-[80%] mx-auto mt-96 sm:mt-5">
                <h3 class="my-10 text-center text-blue-100 text-sm sm:text-2x font-bold ">@lang('general.contact_us.title')</h3>
                <h1 class="mt-10 text-center text-red-200 font-bold text-lg sm:text-5xl">@lang('general.contact_us.second_title')</h1>
                <hr class="w-48 h-1 my-10 mx-auto bg-dark-900 border-0 rounded md:my-10 dark:bg-gray-700 ">
                <p class="text-center text-blue-100 text-sm sm:text-2xl my-10 font-bold">@lang('general.contact_us.content')</p>
                <div class="flex justify-center">
                    <a href="{{route('contactUs')}}" type="button" class="text-white w-[50%] bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300  font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                        @lang('general.contact_us.btn')
                    </a>
                </div>
            </div>
        </main>
    {{-- end contact us --}}

    <x-footer/>
</x-main-layout>
