@props(['id'=>'','price'=>'' , 'classification'=>'' , 'avantages'=>'' , 'description'=>'' , 'adress'=>'' , 'clientName'=>'' ,'email'=>'' ])
<!-- Modal toggle -->
<div class="flex justify-center">
    <button id="readProductButton" data-modal-target="readProductModal" data-modal-toggle="readProductModal" class="block text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
    Show
    </button>
</div>

<!-- Main modal -->
<div id="readProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                        <h3 class="font-semibold ">
                            {{$classification == '' ? '' :"suite $classification"}}
                        </h3>
                        <h3 class="font-semibold ">
                            {{$clientName == '' ? '' : $clientName}}
                        </h3>
                        <p class="font-bold">
                            {{$price}} MAD
                        </p>
                    </div>
                    <div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                </div>
                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Descreption</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                        {{$description}}
                    </dd>
                </dl>
                <dl class="my-5">
                    <dt>{{$email == '' ? 'avantages' : 'email'}}</dt>
                    @php
                        $theComeAvantagers = explode(',' ,$avantages ) ;
                        $theAvantages = array_splice( $theComeAvantagers, 0 , 2) ;
                    @endphp
                    @foreach ($theAvantages as $avantage)
                        <dd>{{$avantage}}</dd>
                    @endforeach
                    <dd>{{$email == '' ? '' : $email}}</dd>
                </dl>
                <div class="flex justify-between items-center">
                    <a 
                    href="{{route($clientName == '' ? 'suites.edit' :'reservations.edit'  , $id)}}" 
                    class="rounded-md bg-green-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Edit
                    </a>
                    <form action="{{route($clientName == '' ? 'suites.destroy':'reservations.destroy'  , $id)}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-md bg-red-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Delete
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>
