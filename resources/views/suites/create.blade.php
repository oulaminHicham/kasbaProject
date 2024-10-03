<x-app-layout>
  
    <form action="{{route("suites.store")}}" method="POST"  class=" px-5 py-7 rounded-2 w-full sm:w-[40%] mx-auto  mt-5"
    enctype="multipart/form-data" autocomplete="off">
        @csrf
        <h3 class="text-center m-4 text-2xl font-sm dark:text-white">Add Suite</h3>
        <x-error-message/>
        <x-input label="description" type='text' name="description" />
        <span class="text-green-300 text-sm">Enter The Adventages Separate With Comma</span>
        <x-input label="advantages" type='text' name="avantages"/>

        <x-input label="classification" type='text' name="classification"/>

        <x-input label="price" type='number' name="prix"/>

        <x-input label="number of persones" type='number' name="num_persan"/>

        <x-input label="Image" type='file' name="image"/>


        <x-button color="blue">Add</x-button>
    </form>
</x-app-layout>