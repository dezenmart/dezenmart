<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here -->
                
               <div class="relative">
                    <!-- Include Product Section -->
                    <x-products :products="$products" />
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
