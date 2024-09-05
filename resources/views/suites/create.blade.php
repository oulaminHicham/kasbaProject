<x-app-layout>
    <form action="{{route("suites.store")}}" method="POST"  class=" px-5 py-7 rounded-2 w-full sm:w-[40%] mx-auto  mt-5">
        @csrf
        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Ajouter Suite</h3>

        <x-input label="description" type='text' name="description" />
        <span>Entrer Les Avantages Separer Avec Virgule</span>
        <x-input label="avantages" type='text' name="avantages"/>

        <x-input label="classification" type='text' name="classification"/>

        <x-button color="blue">Ajouter</x-button>
    </form>
</x-app-layout>