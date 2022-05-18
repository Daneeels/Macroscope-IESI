<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Article
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('artikel.update', $artikel->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Edit title here" value="{{$artikel->title}}">
                            @error('title')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Edit author here" value="{{$artikel->author}}">
                            @error('author')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" placeholder="Insert content here" id="content" name="content"></textarea value="{{$artikel->content}}">
                            @error('content')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
    
                            <button type="submit" class="btn btn-dark">Edit</button>
                    </form>

                    <hr>
                    <h1>Delete Article</h1>
                    <h6>Once you delete it, there is no going back. Are you sure?</h6>

                    <form action="{{route('artikel.destroy', $artikel->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-flex flex-column">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>