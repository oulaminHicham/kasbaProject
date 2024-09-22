@if ($errors->any())
<ul class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 " role="alert">
    @foreach ($errors->all() as $error)
    <div class="flex ">
        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
          </svg>
          
        <li >{{ $error }}</span>
    </div>
    @endforeach
</ul>
@endif 