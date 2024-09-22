<x-main-layout>
    <div class="p-5">
        <form class=" mx-auto flex justify-center gap-32 mt-16" action="">
                    {{--the message that will display if reservation successfoly maded  --}}
        @session('success')
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <h3>@lang('general.success_reservation_msg')</h3>
        </div>
        @endsession
        {{-- end of success message --}}
        {{-- the messager that will diplay if an error hapen when the payement --}}
        @session('error')
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <h3>@lang('general.feild _reservation_msg')</h3>
        </div>
        @endsession
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-5 w-[90%] mx-auto">
                <div >
                    <x-input type="number" label="{{__('general.num_of_personne')}}" name="nbrPersonne" value={{1}}/>
                </div>

                <div>
                    <x-input type="date" label="{{__('general.arivel_date')}}" name="arrive"/>
                </div>
                <div>
                    <x-input type="date" label="{{__('general.Departure_date')}}" name="depart"/>
                </div>
                <div class="mt-5 cursor-pointer">
                    <x-input type="submit"  value="{{__('general.seursh')}}"/>
                </div>
            </div>
        </form>
    </div>
    @php
        $suiteFromRequest = [];
        $nombreDeJour = 1 ;
        $numOfPersan = 1 ;
        $isChoised = 'not choise';
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nbrPersonne']) && isset($_GET['arrive']) 
            && isset($_GET['depart']) && !empty($_GET['nbrPersonne']) &&
            !empty($_GET['arrive']) &&  !empty($_GET['depart']) ) 
        {
            $isChoised = 'choise';
            $numOfPersan =$_GET['nbrPersonne'];
            $dateAreve = (new DateTime($_GET['arrive']));
            $dateDepart =(new DateTime($_GET['depart']));
            session()->put('date_arive', $dateAreve->format('Y-m-d'));
            session()->put('date_depart', $dateDepart->format('Y-m-d'));
            // calculate the number of days from two given dates
            $nombreDeJour =$dateAreve->diff($dateDepart)->format("%r%a");
            // iterate the suites and get avalaibel one for number of persan and date tha client give us
            for ($i=0; $i <count($suites) ; $i++) { 
                if( $numOfPersan <= $suites[$i]->num_persan && $suites[$i]->checkReserved(str($_GET['arrive']) ,$suites[$i]->id)){
                    array_push($suiteFromRequest ,$suites[$i] ) ;
                }
            }
        }else {
            $suiteFromRequest = $suites ;
        }
    @endphp
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 p-0 sm:px-10">
        @if (empty($suiteFromRequest))
        <div class="mx-10 p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 w-full" role="alert">
            <span class="font-medium">no availible suite for this date with this num of persone now </span> 
          </div>
        @endif
        @foreach ($suiteFromRequest as $suite)
            <x-card 
                id="{{$suite->id}}"
                capacity="{{$suite->num_persan}}"
                img="{{$suite->image}}"
                classification="{{$suite->classification}}"
                description="{{$suite->description}}"
                avantages="{{implode(',' , $suite->avantages)}}"
                prix="{{$suite->prix}}"
                nombreDeJour="{{$nombreDeJour}}"
                numOfPersan="{{$numOfPersan}}"
                isChoised="{{$isChoised}}"
            />
        @endforeach
    </div>
</x-main-layout>
