<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel') }}
        </h2>

        @can('admin')
        <a href="{{route('artikel.create')}}">Insert</a>
        @endcan
    </x-slot>

    @foreach($artikels as $artikel)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
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
                        </div>  --}}

                        {{-- <div class="md:container md:mx-auto">

                        </div> --}}
                        <h3 class="font-semibold text-lg text-black-400 leading-tight">
                            <a href="{{route('artikel.show', $artikel)}}">{{$artikel->title}}</a>
                        </h3>

                        @can('admin')
                        <h3 class="font-semibold text-lg text-black-400 leading-tight">
                            <a href="{{route('artikel.edit', $artikel)}}">Edit</a>
                        </h3>
                        @endcan

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
    @endforeach
</x-app-layout>