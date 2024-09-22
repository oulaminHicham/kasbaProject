<x-app-layout>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
          <div class="lg:flex lg:items-center lg:justify-between lg:gap-4">
            <h2 class="shrink-0 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Parametre</h2>
            <a 
                href="{{route('parametres.create')}}" 
                class="rounded-md bg-blue-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Add about
             </a>
            <a 
                href="{{route('stripe.create')}}" 
                class="rounded-md bg-blue-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
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
                                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0"> 
                                    {{$parametre->lang}}
                                </span>
                            </div>
                            <h1 class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">About</h1>
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