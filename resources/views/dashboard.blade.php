<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="flex justify-center text-2xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100">
                            <a href="">Management</a>
                        </div>
                        <div class="flex justify-center text-2xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100">
                            <a href="">Cashier</a>
                        </div>
                        <div class="flex justify-center text-2xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100">
                            <a href="">Report</a>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
