<x-main-layout>
    <div class="p-5">
        <form class=" mx-auto flex justify-center gap-32">
            <div>
                <x-input type="number" label="nombre de personne" name="nbrPersonne" value={{1}}/>
            </div>

            <div>
                <x-input type="date" label="Arreve" name="arrive"/>
            </div>

            <div>
                <x-input type="date" label="Depart" name="depart"/>
            </div>
        </form>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-12">
        @foreach ($suites as $suite)
            <x-card 
                img="{{$suite->image}}"
                classification="{{$suite->classification}}"
                description="{{$suite->description}}"
                avantages="{{implode(',' , $suite->avantages)}}"
                prix="{{$suite->prix}}"
            />
        @endforeach
    </div>
</x-main-layout>
