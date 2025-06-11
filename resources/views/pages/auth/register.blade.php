@extends('layouts.auth')

@section('main')
    <section class="w-sm md:w-md h-fit flex flex-col items-center px-10 py-16 bg-white rounded-2xl">
        <h1 class="text-3xl font-bold">Dean Notes</h1>
        <form action="{{ route('login') }}" method="POST" class="w-full h-full flex flex-col mt-10 gap-3">
            @csrf
            <label for="name">Username</label>
            <input id="name" name="name" type="text" autocomplete="on" class="bg-gray-200 rounded-2xl pl-2 h-10"
                placeholder="Username">
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="email">Email</label>
            <input id="email" name="email" type="text" autocomplete="on" class="bg-gray-200 rounded-2xl pl-2 h-10"
                placeholder="Email">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="password">Password</label>
            <input id="password" name="password" type="password" autocomplete="off"
                class="bg-gray-200 rounded-2xl pl-2 h-10 shadow-2xl" placeholder="Password">
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="password_confirmation">Password Confirmation</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="off"
                class="bg-gray-200 rounded-2xl pl-2 h-10 mb-10 shadow-2xl" placeholder="Password Confirmation">
            @error('password_confirmation')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-blue-500 text-white py-3 rounded-2xl">Register</button>
        </form>
    </section>
@endsection
