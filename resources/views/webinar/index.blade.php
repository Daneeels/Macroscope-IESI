<x-app-layout>
    <x-slot name="header">
        @if (session()->has('success'))
            <div class="alert alert-success bg-lime-100 text-green-600 rounded-md p-5" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <h2 class="font-extrabold text-4xl mx-auto my-2">
            {{ __("Macroscope's Webinars") }}
        </h2>
        <div class="container mx-auto mt-12 mb-4 md:flex sm:flex sm:justify-center gap-6">
            <div class="flex justify-center my-6">
                <div>
                    <img src="../../../img/pic_1.jpg" alt="speakers"
                        class="lg:h-48 md:h-32 w-96 object-cover object-center rounded-md shadow-md">
                    <h3 class="font-bold text-md text-black leading-tight text-center mt-4">Extremely Competent Speakers
                    </h3>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <div>
                    <img src="../../../img/pic_2.jpg" alt="social media"
                        class="lg:h-48 md:h-32 w-96 object-cover object-center rounded-md shadow-md">
                    <h3 class="font-bold text-md text-black leading-tight text-center mt-4">Up to date Topics</h3>
                </div>
            </div>
            <div class="flex justify-center my-6">
                <div>
                    <img src="../../../img/pic_3.jpg" alt="insight"
                        class="lg:h-48 md:h-32 w-96 object-cover object-center rounded-md shadow-md">
                    <h3 class="font-bold text-md text-black leading-tight text-center mt-4">Fresh insights</h3>
                </div>
            </div>
        </div>
        <hr class="my-12">
        <h2 class="font-extrabold text-3xl mx-auto my-2">
            {{ __('Upcoming Webinars') }}
        </h2>
        @can('admin')
            <div class="flex justify-end">
                <div class="mt-7 mb-3 opacity-50 hover:opacity-100 hover:cursor-pointer">
                    <a href="{{ route('webinar.create') }}" class="flex">Add
                        <img src="../../../icon/add_circle.svg" alt="add_button" class="px-2"></a>
                </div>
            </div>
        @endcan
        <div class="container mx-auto px-2 mt-2 md:flex sm:flex sm:flex-wrap sm:justify-center gap-6">
            @foreach ($webinars as $webinar)
                <div class="overflow-hidden shadow-lg rounded-md mb-4 sm:w-64 md:w-96">
                    <div class="px-6 py-3 bg-white border-b border-gray-200">
                        @can('admin')
                            <span class="font-semibold text-lg text-black-400 leading-tight">
                                <x-dropdown width="24">
                                    <x-slot name="trigger">
                                        <div class="flex justify-end">
                                            <button class="my-2 items-center -mx-2">
                                                <div> <img src="../../../icon/option.svg" alt="option_button"></div>
                                            </button>
                                        </div>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link href="{{ route('webinar.edit', $webinar) }}">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <!-- Authentication -->
                                        <form action="{{ route('webinar.destroy', $webinar->id) }}" method="post">
                                            @method('Delete')
                                            @csrf
                                            <x-dropdown-link :href="route('webinar.destroy', $webinar->id)"
                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </span>
                        @endcan
                        <div class="flex flex-col md:flex-row">
                            <div class="mr-5">
                                <div class="w-full flex justify-center">
                                    <img src="{{ asset('storage/' . $webinar->image) }}" alt="add_button"
                                        class="lg:h-64 md:h-48 lg:w-44 md:w-44 w-full object-cover object-center">
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl text-black leading-tight mb-2 mt-3 md:mt-0 sm:mt-5">
                                    {{ $webinar->title }}
                                </h3>
                                <div class="flex">
                                    <h5 class="font-thin text-md text-black leading-normal opacity-80 mb-2 flex">
                                        <img src="../../../icon/person.svg" alt="person"
                                            class="-ml-3 px-2 opacity-90">{{ $webinar->speaker }}
                                    </h5>
                                </div>
                                <div class="flex">
                                    <h5 class="font-thin text-sm text-black leading-normal opacity-80 mb-6 flex">
                                        <img src="../../../icon/date_webinar.svg" alt="date"
                                            class="-ml-3 px-2 opacity-90">{{ $webinar->date }}
                                    </h5>
                                </div>
                                <h5
                                    class="font-thin text-md leading-tight bg-black hover:bg-gray-600 text-white w-24 p-3 rounded-md text-center mb-2">
                                    <a href="{{ $webinar->link }}">Enter</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container mx-auto max-w-5xl my-10">
            {{ $webinars->links() }}
        </div>
    </x-slot>
</x-app-layout>
