@props(['img'=>'' ,'classification'=>'' , 'description'=>'' , 'avantages'=>[] , 'prix'=>''])
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row
                md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800
                dark:hover:bg-gray-700 min-h-[300px]"
>
        <img class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url($img)}}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">{{$classification}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$description}}
            </p>
            <h6 class="text-green-900">avatages</h6>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    @php
                    $theComeAvantagers = explode(',' ,$avantages ) ;
                      $firtsThreeAvantages = array_splice( $theComeAvantagers, 0 , 2) ;
                    @endphp
                        @foreach ($firtsThreeAvantages as $avantage)
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{$avantage}}</dt>
                            </div>
                        @endforeach
                </dl>
            </p>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-1xl font-extrabold">{{$prix}} MAD</span>
                <span class="text-gray-500 dark:text-gray-400">/night</span>
            </div>
            <div class="flex flex-col gap-5">
                <a 
                    href="{{route('card')}}" 
                    class="btn bg-blue-900 text-white text-center rounded-full px-7 py-2">details</a>
                <a 
                    href="{{route('card')}}" 
                    class="flex btn bg-blue-400 text-white text-center rounded-full px-7 py-2">
                    <svg class="w-5 h-5 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                    </svg>
                    reserver</a>
            </div>

        </div>
    
    </div>

