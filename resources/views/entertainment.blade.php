<x-app-layout><!-- <x-slot name="header"> <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('') }}</h2> </x-slot> <div class="py-12"> <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> <x-jet-welcome /> </div> <div class="container-fluid mb-5 top"> -->
    <div class="container mx-auto">
        <div class="flex flex-row align-center justify-center mt-12">
            <div class=" bg-white w-1/4 rounded-md shadow-lg mr-8 p-8">
                <div class="flex flex-wrap">
                    <h2 class="flex-auto text-xl font-semibold">Netflix Account
                        @ 350=/</h2>
                    <p class="">Per month</p>
                </div>
                <button style="background: #137368"
                    class="inline-flex items-center px-6 py-2 mt-4 text-white font-semibold bg-blue-700 rounded-2xl shadow-sm"
                    type="submit">Buy now
                </button>
            </div>
            <div class="bg-white w-1/4 rounded-md shadow-lg mr-8 p-8">
                <div class="flex flex-wrap"><h2 class="flex-auto text-xl font-semibold">DSTV Account
                        @400</h2>
                    <p class="">Per month</p>
                </div>
                <button style="background: #137368"
                    class="inline-flex items-center px-6 py-2 mt-4 text-white font-semibold bg-blue-700 rounded-2xl shadow-sm"
                    type="submit">Buy now
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

