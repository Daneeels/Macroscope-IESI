<x-app-layout>
    <x-slot name="header">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <h2 class="font-extrabold text-3xl mx-auto my-2">
            {{ __('Our Articles') }}
        </h2>
        @can('admin')
            <div class="flex justify-end">
                <div class="mt-7 mb-3 opacity-50 hover:opacity-100 hover:cursor-pointer">
                    <a href="{{ route('artikel.create') }}" class="flex">Add
                        <img src="../../../icon/add_circle.svg" alt="add_button" class="px-2"></a>
                </div>
            </div>
        @endcan
        <div class="container mx-auto px-2 mt-2 sm:flex sm:flex-wrap sm:justify-center gap-6">
            @foreach ($artikels as $artikel)
                <div class="overflow-hidden shadow-lg rounded-md mb-4 sm:w-64 md:w-80">
                    <div class="px-6 py-3 bg-white border-b border-gray-200">
                        @can('admin')
                            <h3 class="font-semibold text-lg text-black-400 leading-tight">
                                <a href="{{ route('artikel.edit', $artikel) }}"></a>

                                <span class="font-semibold text-lg text-black-400 leading-tight">
                                    {{-- <a href="{{route('webinar.edit', $webinar)}}">Edit</a> --}}
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
                                            {{-- <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form> --}}

                                            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <x-dropdown-link :href="route('artikel.destroy', $artikel->id)"
                                                    onclick="event.preventDefault();
                                                                                                                                                                                                                                                    this.closest('form').submit();">
                                                    {{ __('Delete') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </span>
                            </h3>
                        @endcan
                        {{-- <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                <h5 class="card-title"><a href="artikel/{{$artikel->id}}" style="text-decoration: none; color: black" class="fs-4">{{$artikel->title}}</a></h5>
                                    @can('admin')
                                    <div>
                                        <a class="btn btn-primary" href="artikel/edit/{{$artikel->id}}" role="button">Edit</a>
                                    </div>
                                    @endcan
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted">By {{$artikel->author}}</h6>
                                {{-- PROBLEM!!! --}}
                        {{-- <p class="card-text">{{$artikel->content}}</p>
                                <a href="artikel/{{$artikel->id}}" class="card-link">Read more</a>
                            </div>
                        </div> --}}

                        {{-- <div class="md:container md:mx-auto">

                        </div> --}}
                        <div class="w-full mb-5">
                            <img src="../../../img/img_dummy.png" alt="add_button" class="w-full">
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
        <div class="container mx-auto max-w-5xl my-10">
            {{ $artikels->links() }}
        </div>
    </x-slot>
</x-app-layout>
