@extends('layouts.auth')

@section('main')
    <section class="w-96 h-fit flex flex-col items-center p-3">
        <h1 class="text-3xl font-bold">Dean Notes</h1>
        <form action="{{ route('register') }}" method="POST" class="w-full h-full flex flex-col mt-10 gap-3">
            @csrf
            <label for="name">Username</label>
            <input id="name" name="name" type="text" autocomplete="off" class="bg-gray-400 rounded-2xl pl-2 h-10"
                placeholder="Username">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <label for="email">Email</label>
            <input id="email" name="email" type="text" autocomplete="on" class="bg-gray-400 rounded-2xl pl-2 h-10"
                placeholder="Email">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <label for="password">Password</label>
            <input id="password" name="password" type="password" autocomplete="off"
                class="bg-gray-400 rounded-2xl pl-2 h-10" placeholder="Password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="off"
                class="bg-gray-400 rounded-2xl pl-2 h-10 mb-10" placeholder="Confirm Password">
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">Register</button>
        </form>
    </section>
@endsection
