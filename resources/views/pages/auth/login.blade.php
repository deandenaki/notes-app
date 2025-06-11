@extends('layouts.auth')

@section('main')
    <section class="w-sm md:w-md h-fit flex flex-col items-center px-10 py-16 bg-white rounded-2xl">
        <h1 class="text-3xl font-bold">Dean Notes</h1>
        <form action="{{ route('login') }}" method="POST" class="w-full h-full flex flex-col mt-10 mb-10 gap-3">
            @csrf
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
            <button type="submit" class="bg-blue-500 text-white py-3 mt-10 rounded-2xl">Login</button>
        </form>
        <p>You don't have account yet? <a class="text-blue-500" href="{{ url('register') }}">Create one</a></p>
    </section>
@endsection
