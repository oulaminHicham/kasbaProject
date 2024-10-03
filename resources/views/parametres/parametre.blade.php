<x-app-layout>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
          <div class="lg:flex lg:items-center lg:justify-between lg:gap-4">
            <h2 class="flex justify-center items-center gap-2 shrink-0 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  </svg>
                  
                Settings
            </h2>
            <a 
                href="{{route('parametres.create')}}" 
                class="flex justify-center items-center gap-2 rounded-md bg-blue-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                  
                Add about
             </a>
            <a 
                href="{{route('stripe.create')}}" 
                class="flex justify-center items-center gap-2 rounded-md bg-blue-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                Add Stripe
             </a>
          </div>
      
          <div class="mt-6 flow-root">
            @if (count($stripe) !== 0)
            <h3>stripe key</h3>
            <div class="-my-6 divide-y divide-gray-200 dark:divide-gray-800">
                <div class="space-y-4 py-6 md:py-8">
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        {{$stripe[0]->stipe_key}}
                    </p>
                    {{-- controller panels --}}
                    <div class="flex gap-5">
                        <a 
                            href="{{route('stripe.edit' , $stripe[0]->id)}}" 
                            class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Edit
                        </a>
                        <x-confirm-delete
                        id="{{$stripe[0]->id}}"
                        theRoute='stripe'
                        />
                    </div>
                </div>
            </div>                
            @endif
            @foreach ($parametres as $parametre)
                <div class="-my-6 divide-y divide-gray-200 dark:divide-gray-800">
                    <div class="space-y-4 py-6 md:py-8">
                        <div class="grid gap-4">
                            <div>
                                
                                <span class="flex  rounded bg-green-100 px-2.5 py-0.5 text-md font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0"> 
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 19 3.5-9 3.5 9m-6.125-2h5.25M3 7h7m0 0h2m-2 0c0 1.63-.793 3.926-2.239 5.655M7.5 6.818V5m.261 7.655C6.79 13.82 5.521 14.725 4 15m3.761-2.345L5 10m2.761 2.655L10.2 15"/>
                                      </svg>
                                      
                                    {{$parametre->lang}}
                                </span>
                            </div>
                            <h1 class="flex items-center text-xl font-semibold text-gray-900 hover:underline dark:text-white">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                                  </svg>
                                About
                            </h1>
                        </div>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            {{$parametre->about_us}}
                        </p>
                        {{-- controller panels --}}
                        <div class="flex gap-5">
                            <a 
                                href="{{route('parametres.edit' , $parametre->id)}}" 
                                class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                Edit
                            </a>
                            <x-confirm-delete
                            id="{{$parametre->id}}"
                            theRoute='parametres'
                            />
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>

</x-app-layout>