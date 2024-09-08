@props(['img'=>'' ,'classification'=>'' , 'description'=>'' , 'avantages'=>[] , 'prix'=>''])
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row
                md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800
                dark:hover:bg-gray-700 min-h-[300px]"
>
        <img class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{$img}}" alt="">
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
                        <span>details</span>
                </dl>
            </p>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-2xl font-extrabold">$29</span>
                <span class="text-gray-500 dark:text-gray-400">/night</span>
            </div>

        </div>
    </div>

