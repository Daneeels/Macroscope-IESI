{{-- perubahan --}}

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    @if(session()->has('success'))
            <div class="alert alert-success bg-lime-100 text-green-600 rounded-md p-5" role="alert">
                {{session()->get('success')}}
            </div>
    @endif
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                    Macroscope
                    </h2>
                    <div class="flex-auto px-4 py-4 bg-white border-b border-gray-200">
                        <div class="flex justify-between items-cente my-6">
                            <div class="w-2/5 text-justify">PT Macroscope Berdikari Nusantara adalah sebuah usaha apparel yang berbasis di Kota Malang. PT Macroscope sendiri memiliki dua jenama yang berada dibawah naungannya, yaitu Macroscope dan Leapitup. Macroscope didirikan pada 17 Desember 2016 oleh empat orang pelajar SMP yang berniat membantu teman-temannya untuk mendapatkan vendor konveksi yang terjangkau dan berkualitas. Berawal dari situlah, Macroscope terus berkembang hingga sekarang.</div>
                            <div class="mr-20"><a href="#"><img class="lg:h-48 md:h-32 w-48 object-cover shadow-lg rounded-full" src="../../../img/logo.png" alt="logo"
                                class="px-1 "></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                        Last Articles
                    </h2>
                    <a href="{{route('artikel.index')}}">See more</a>
                    <div class="flex justify-around">
                            @foreach($artikels as $artikel)
                            <div class="overflow-hidden shadow-lg rounded-md mb-4 sm:w-64 md:w-80">
                                <div class="px-6 py-3 bg-white border-b border-gray-200">   
                                    @can('admin')
                                        <h3 class="font-semibold text-lg text-black-400 leading-tight">
                                            <a href="{{ route('artikel.edit', $artikel) }}"></a>
            
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
                                                        <x-dropdown-link href="{{ route('artikel.edit', $artikel) }}">
                                                            {{ __('Edit') }}
                                                        </x-dropdown-link>
                                                        <!-- Authentication -->
                                                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <x-dropdown-link :href="route('artikel.destroy', $artikel->id)"
                                                                onclick="event.preventDefault();this.closest('form').submit();">
                                                                {{ __('Delete') }}
                                                            </x-dropdown-link>
                                                        </form>
                                                    </x-slot>
                                                </x-dropdown>
                                            </span>
                                        </h3>
                                    @endcan
                                    <div class="w-full mb-5">
                                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="add_button"
                                            class="lg:h-72 md:h-48 w-full object-cover object-center p-1.5">
                                    </div>
                                    <h3 class="font-bold text-xl text-black leading-tight">
                                        <a href="{{ route('artikel.show', $artikel) }}">{{ $artikel->title }}</a>
                                    </h3>
                                    <h5 class="font-thin text-sm text-black leading-normal opacity-80 mt-1 mb-3">
                                        By {{ $artikel->author }}
                                    </h5>
                                    <h5 class="font-thin text-base text-gray-700 leading-normal max-h-5 truncate">
                                        {{ $artikel->content }}
                                    </h5>
            
                                </div>
                                <div class="mx-1 my-2 opacity-80 hover:opacity-100 hover:cursor-pointer flex float-right">
                                    <a href="{{ route('artikel.show', $artikel) }}" class="flex float-right my-2">Read more
                                        <img src="../../../icon/arrow_right.svg" alt="option_button" class="px-2"></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                        Latest Webinar
                    </h2>
                    <a href="{{route('webinar.index')}}">See more</a>
                    @foreach($webinars as $webinar)
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
                                            class="lg:h-40 md:h-36 lg:w-44 md:w-44 w-full object-cover object-center">
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
            </div>
        </div>
    </div>
</x-app-layout>
