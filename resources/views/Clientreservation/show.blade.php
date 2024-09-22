<x-main-layout>
<div class="flex justify-center h-[600px] items-center">
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row
                md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800
                dark:hover:bg-gray-700 min-h-[300px] w-[500px] "
>
        <img class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{url($suite->image)}}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">suite {{$suite->classification}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$suite->description}}
            </p>
            <h6 class="text-green-900">avatages</h6>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">

                        @foreach ($suite->avantages  as $avantage)
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{$avantage}}</dt>
                            </div>
                        @endforeach
                </dl>
            </p>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-1xl font-extrabold">{{$suite->prix}} MAD</span>
                <span class="text-gray-500 dark:text-gray-400">/night</span>
            </div>
            <div class="flex flex-col gap-5">
                <a 
                    href="{{route('reservation')}}" 
                    class="btn bg-blue-900 text-white text-center rounded-full px-7 py-2">@lang('general.navigation.back')
                </a>
            </div>

        </div>
    
    </div>


</div>
</x-main-layout>