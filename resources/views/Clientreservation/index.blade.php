<x-main-layout>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-12">
        @foreach ($suites as $suite)
            <x-card 
                img='images/IMG_3555.jpg'
                classification="{{$suite->classification}}"
                description="{{$suite->description}}"
                avantages="{{implode(',' , $suite->avantages)}}"
                prix="{{$suite->prix}}"
            />
        @endforeach
    </div>
</x-main-layout>
