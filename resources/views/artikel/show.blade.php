<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto my-6">
            <div class="p-12">
                <div class="p-6">
                    <h2 class="font-extrabold text-5xl text-gray-800 leading-tight">
                        {{ $artikel->title }}
                    </h2>

                    <div class="flex justify-between">
                        <div>
                            <h5 class="font-thin text-sm text-black leading-normal opacity-80 mt-1 mb-4">
                                By {{ $artikel->author }}
                            </h5>
                        </div>
                        <div>
                            <div class="flex contents-end">
                                <h5
                                    class="font-thin text-sm text-black leading-normal opacity-80 flex float-right mt-1 mb-4 ">
                                    <img src="../../../icon/date.svg" alt="date"
                                        class="px-2 opacity-90">{{ $artikel->created_at }}
                                </h5>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-7">
                    <h5 class="font-thin text-base text-gray-700 leading-normal text-justify">
                        {{ $artikel->content }}
                    </h5>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
