<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$artikel->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h5 class="font-thin text-sm text-black-100 leading-tight">
                        {{$artikel->author}}
                    </h5>

                    <h5 class="font-thin text-base text-black-200 leading-tight">
                        {{$artikel->content}}
                    </h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>