<x-main-layout>
  <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 mt-16">
      <div class="mx-auto max-w-5xl"> 
         {{--the message that will display if reservation successfoly maded  --}}
        @session('success')
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <h3>reservation successfoly maded</h3>
        </div>
        @endsession
        {{-- end of success message --}}
        {{-- the messager that will diplay if an error hapen when the payement --}}
       @session('error')
       <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <h3>reservation feild ther is some problem!</h3>
      </div>
       @endsession
        {{-- end of error message --}}
        <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
          <form 
              action="{{route('stripe')}}" 
              method="POST"
              class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700
              dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8"
            >
            @csrf
            <div class="mb-6 grid grid-cols-2 gap-4">
              <div class="col-span-2 sm:col-span-1">
                <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Full name (as displayed on card)* </label>
                <input type="text" id="full_name" name="fullName" class="block w-full rounded-lg  border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Bonnie Green"  />
              </div>
  
              <div class="col-span-2 sm:col-span-1">
                <label for="card-number-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Email </label>
                <input type="email" name="email" id="card-number-input" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Email"   />
              </div>
            </div>
            <div class="my-5">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
              <textarea id="message" name="details" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="if ther is any details ..."></textarea>
            </div>
  
            <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reserve</button>
          </form>
  
          <div class="mt-6 grow sm:mt-8 lg:mt-0">
            <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
              <div class="space-y-2">
                <dl class="flex items-center justify-between gap-4">
                  <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Number of Nightrs</dt>
                  <dd class="text-base font-medium text-gray-900 dark:text-white">2</dd>
                </dl>
  
                <dl class="flex items-center justify-between gap-4">
                  <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Number of personne</dt>
                  <dd class="text-base font-medium text-gray-900 dark:text-white">2</dd>
                </dl>
              </div>
  
              <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                <dd class="text-base font-bold text-gray-900 dark:text-white">$7,191.00</dd>
              </dl>
            </div>

          </div>
        </div>
  

      </div>
    </div>
  </section>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-main-layout>