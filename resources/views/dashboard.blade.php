<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="flex justify-center p-6 text-2xl bg-gray-100 border-2 border-gray-300 rounded-xl">
                            <a href="/management">Management</a>
                        </div>
                        <div class="flex justify-center p-6 text-2xl bg-gray-100 border-2 border-gray-300 rounded-xl">
                            <a href="">Cashier</a>
                        </div>
                        <div class="flex justify-center p-6 text-2xl bg-gray-100 border-2 border-gray-300 rounded-xl">
                            <a href="">Report</a>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
