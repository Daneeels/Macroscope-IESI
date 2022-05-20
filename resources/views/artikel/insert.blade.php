<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                Add Article
            </h2>
            <h4 class="text-md-center opacity-50">"You can make anything by writing."</h4>
        </div>

        <div class="container mx-auto my-16">
            <div class="p-12">
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-7">
                        <label for="title" class="form-label">Title</label>
                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="text"
                            name="title" id="title" placeholder="Insert title here" required
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-7">
                        <label for="author" class="form-label">Author</label>
                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="text"
                            name="author" id="author" placeholder="Insert author here" required
                            value="{{ old('author') }}">
                        @error('author')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-7">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="block mt-1 w-full rounded-md h-64 border-black border-opacity-20"
                            placeholder="Insert content here" id="content" name="content" required>{{ old('content') }}</textarea>
                        @error('content')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-7">
                        <div class="flex flex-col">
                            <div>
                                <label for="image" class="form-label">Image</label>
                            </div>

                            <div>
                                <input type="file" name="image" id="image">
                            </div>

                            <div>
                                @error('image')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-dark w-100 bg-black hover:bg-gray-600 text-white p-3 rounded-md">Insert</button>
                    </div>
                    </form>
                </div>
            </div>
</x-slot>
</x-app-layout>
