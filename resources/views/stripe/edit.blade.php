<x-app-layout>
    <form action="{{route('stripe.update' , $key_id)}}" class="w-[50%] h-[50%] mx-auto my-auto mt-10" method="POST">
        @method('PUT')
        @csrf
        <x-input label='stripe_key' type="text" name='stipe_key' value="{{$key}}"/>
        <button type="submit" class="btn bg-blue-300 py04 px-10 text-white rounded-md">edit</button>
    </form>
</x-app-layout>
