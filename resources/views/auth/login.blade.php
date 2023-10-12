@extends('layouts.app')

@section('title')
    Sign in
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 p-5">
            <p>Imagen</p>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('signin') }}" method="post">
                @csrf

                @if (session('message'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('message') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="border p-4 w-full rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="border p-4 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-sky-500 hover:bg-sky-700 transition-colors w-full cursor-pointer uppercase font-bold p-3 text-white rounded-lg">Sign in</button>
            </form>
        </div>
    </div>
@endsection