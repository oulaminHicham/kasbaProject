<x-app-layout>
    <x-form>

        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Ajouter Suite</h3>

        <x-input label="description" type='text' name="description" />
        <x-input label="avantages" type='text' name="avantages"/>
        <x-input label="classification" type='text' name="classification"/>

        <div class="text-center">
            <x-primary-button>Ajouter</x-primary-button>
        </div>

    </x-form>
</x-app-layout>