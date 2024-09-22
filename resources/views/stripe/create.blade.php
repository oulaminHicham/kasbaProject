<x-app-layout>
    <form action="{{route('stripe.store')}}" class="w-[50%] h-[50%] mx-auto my-auto mt-10" method="POST">
        @csrf
        <x-input label='stripe_key' type="text" name='stipe_key'/>
        <button type="submit" class="btn bg-blue-300 py04 px-10 text-white rounded-md">add</button>
    </form>
</x-app-layout>
