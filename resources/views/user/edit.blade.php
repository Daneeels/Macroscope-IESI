<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('user.update')}}" method="post">
                        @method('put')
                        @csrf
                                <!-- Name -->
                            <div class="mb-4 d-flex flex-column">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" required value="{{$user->name}}" autofocus>
                                @error('name')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                    
                                <!-- Username -->
                            <div class="mb-4 d-flex flex-column">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" required value="{{$user->username}}" autofocus>
                                @error('username')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mb-4 d-flex flex-column">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required value="{{$user->email}}">
                                @error('email')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                    
                            <!-- Password -->
                            <div class="mb-4 d-flex flex-column">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required autocomplete="new-password" value="{{$user->password}}">
                                @error('password')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="mb-4 d-flex flex-column">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required>
                                @error('password_confirmation')
                                    <div class="text-danger mt-2">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                    
                            <button type="submit" class="btn btn-dark">Edit profile</button>
                    </form>
                        <hr>
                        <h1 class="fs-4 fw-bold w-100 text-danger">Delete Account</h1>
                        <h6 class="text-muted mb-4">Once you delete it, there is no going back. Are you sure?</h6>
                    
                    <form action="{{route('user.destroy')}}" method="post">
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