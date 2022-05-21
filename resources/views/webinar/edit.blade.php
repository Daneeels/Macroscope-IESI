<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                Edit Webinar
            </h2>
        </div>

        <div class="container mx-auto my-16">
            <div class="p-12">
                <form action="{{ route('webinar.update', $webinar->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title"
                            class="block mt-1 w-full rounded-md border-black border-opacity-20" id="title"
                            placeholder="Insert title here" required value="{{ $webinar->title }}">
                        @error('title')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="speaker" class="form-label">Speaker</label>
                        <input type="text" name="speaker"
                            class="block mt-1 w-full rounded-md border-black border-opacity-20" id="speaker"
                            placeholder="Insert speaker here" required value="{{ $webinar->speaker }}">
                        @error('speaker')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-7 sm:flex mx-auto gap-9">
                        <div class="mb-7">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" class="block mt-1 rounded-md border-black border-opacity-20"
                                id="link" placeholder="Insert link here" required value="{{ $webinar->link }}">
                            @error('link')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" value="{{ $webinar->date }}" required
                                class="block mt-1 rounded-md border-black border-opacity-20">
                            @error('date')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-7">
                        <div class="flex flex-col">
                            <div>
                                <label for="image" class="form-label">Image</label>
                            </div>

                            <div>
                                <input type="file" name="image" id="image" class="text-gray-500">
                            </div>

                            <div>
                                @error('image')
                                    <div class="text-red-500 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
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
