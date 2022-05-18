<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Insert Article
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('webinar.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Insert title here" required value="{{old('title')}}">
                            @error('title')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="speaker" class="form-label">Speaker</label>
                            <input type="text" name="speaker" class="form-control" id="speaker" placeholder="Insert speaker here" required value="{{old('speaker')}}">
                            @error('speaker')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between gap-3">
    
                            <div class="w-50">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" id="link" placeholder="Insert link here" required value="{{old('link')}}">
                                @error('link')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="w-50">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" id="date" value="{{old('link')}} required" class="form-control">
                                @error('date')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            
                            
                        </div>
    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-dark w-100">Insert</button>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>