<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                Edit Article
            </h2>
        </div>

        <div class="container mx-auto my-16">
            <div class="p-12">
                <form action="{{ route('artikel.update', $artikel->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-7">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title"
                            class="block mt-1 w-full rounded-md border-black border-opacity-20" id="title"
                            placeholder="Edit title here" value="{{ $artikel->title }}">
                        @error('title')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-7">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author"
                            class="block mt-1 w-full rounded-md border-black border-opacity-20" id="author"
                            placeholder="Edit author here" value="{{ $artikel->author }}">
                        @error('author')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-7">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="block mt-1 w-full rounded-md h-64 border-black border-opacity-20" placeholder="Insert content here"
                            id="content" name="content">{{ $artikel->content }}</textarea>
                        @error('content')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="btn btn-dark w-100 bg-black hover:bg-gray-600 text-white px-4 py-2 rounded-md">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>

</x-app-layout>
