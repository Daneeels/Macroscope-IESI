<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Webinar') }}
        </h2>

        @can('admin')
        <a href="{{route('webinar.create')}}">Insert</a>
        @endcan
    </x-slot>

    @foreach($webinars as $webinar)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <h3 class="font-semibold text-lg text-black-400 leading-tight">
                            {{$webinar->title}}
                        </h3>

                        @can('admin')
                        <h3 class="font-semibold text-lg text-black-400 leading-tight">
                            <a href="{{route('webinar.edit', $webinar)}}">Edit</a>
                        </h3>
                        @endcan

                        <h5 class="font-thin text-sm text-black-100 leading-tight">
                            {{$webinar->speaker}}
                        </h5>

                        <h5 class="font-thin text-base text-black-200 leading-tight">
                            {{$webinar->date}}
                        </h5>

                        <h5 class="font-thin text-base text-black-200 leading-tight">
                            <a href="{{$webinar->link}}">Enter</a>
                            
                        </h5>
                        
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>