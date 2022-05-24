<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="font-extrabold text-3xl leading-tight mx-auto my-2">
                {{ __('Edit Profile') }}
            </h2>
        </div>

        <div class="container mx-auto my-16">
            <div class="p-12">
                {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200"> --}}
    
                            <form action="{{route('user.update')}}" method="post">
                                @method('put')
                                @csrf
                                        <!-- Name -->
                                    <div class="mb-7">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="text" name="name" id="name" required value="{{$user->name}}" autofocus>
                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                            
                                        <!-- Username -->
                                    <div class="mb-7">
                                        <label for="username" class="form-label">Username</label>
                                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="text" name="username" id="username" required value="{{$user->username}}" autofocus>
                                        @error('username')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                            
                                    <!-- Email Address -->
                                    <div class="mb-7">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="email" name="email" id="email" required value="{{$user->email}}">
                                        @error('email')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                            
                                    <!-- Password -->
                                    <div class="mb-7">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="password" name="password" id="password" required autocomplete="new-password">
                                        @error('password')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                            
                                    <!-- Confirm Password -->
                                    <div class="mb-7">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input class="block mt-1 w-full rounded-md border-black border-opacity-20" type="password" name="password_confirmation" id="password_confirmation" required>
                                        @error('password_confirmation')
                                            <div class="text-danger mt-2">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                            
                                    <button type="submit" class="btn btn-dark w-100 bg-black hover:bg-gray-600 text-white px-4 py-2 rounded-md">Edit profile</button>
                            </form>
                                <hr class="mt-5 mb-5">
                                <h1 class="font-extrabold text-3xl leading-tight text-red-500">Delete Account</h1>
                                <h6 class="text-muted mb-4">Once you delete it, there is no going back. Are you sure?</h6>
                            
                            <form action="{{route('user.destroy')}}" method="post">
                                @method('delete')
                                @csrf
                                <div class="d-flex flex-column">
                                    <button type="submit" class="btn btn-dark w-100 bg-white hover:bg-red-500 hover:text-white text-red-500 border border-red-500 px-4 py-2 rounded-md">Delete Account</button>
                                </div>
                            </form>
                        {{-- </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </x-slot>

    
    
</x-app-layout>