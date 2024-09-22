<x-app-layout>
    <form action="{{route("suites.update" , $suite->id)}}" method="POST"  class=" px-5 py-7 rounded-2 w-full sm:w-[40%] mx-auto  mt-5">
        @csrf
        @method("PUT")
        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Modifier Suite</h3>
        <x-error-message/>
        <x-input label="description" type='text' name="description" value="{{$suite->description}}"/>
        @php
            $avantage = implode("," , $suite->avantages)
        @endphp
        <x-input label="avantages" type='text' name="avantages"  value="{{$avantage}}"/>
        <x-input label="classification" type='text' name="classification" value="{{$suite->classification}}" />
        <x-input label="prix" type='number' name="prix" value="{{$suite->prix}}" />
        <x-input label="numbre de personne" type='number' name="num_persan" value="{{$suite->num_persan}}" />

        <button type="submit" class="btn bg-blue-400 px-3 py-2 rounded-lg w-72 text-red-50">Modifier</button>

        </form>
</x-app-layout>

