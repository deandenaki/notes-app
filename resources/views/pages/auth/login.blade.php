@extends('layouts.auth')

@section('main')
<section class="w-96 h-fit flex flex-col items-center p-3">
    <h1 class="text-3xl font-bold">Dean Notes</h1>
    <form action="{{ route('login') }}" method="POST" class="w-full h-full flex flex-col mt-10 gap-3">
        @csrf
        <label for="name">Email</label>
        <input id="email" name="email" type="text" autocomplete="on"
        class="bg-gray-400 rounded-2xl pl-2 h-10" placeholder="Email">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" autocomplete="off"
        class="bg-gray-400 rounded-2xl pl-2 h-10 mb-10" placeholder="Password">
        <button type="submit" class="bg-white py-3 rounded-2xl">Login</button>
    </form>
</section>
@endsection
