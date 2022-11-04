@extends('welcome')

@section('content')

<div class="mx-auto my-10">
    <form action="{{ route('user.register') }}" method="POST">
        @csrf
        <div class="bg-gray-200 flex flex-col space-y-8 mx-auto w-1/3 h-3/4 border-2 rounded-md shadow-lg">
            <h2 class="text-3xl p-2 bg-gray-400 w-full font-extrabold text-center">Register</h2>
            <div class="flex flex-row space-x-11 px-10">
                <label for="name" class="text-lg font-medium">Name:</label>
                <input type="text" name="name" id="name" class="bg-gray-300 py-2 text-black px-3" placeholder="name..." required>
            </div>

            <div class="flex flex-row space-x-11 px-10">
                <label for="email" class="text-lg font-medium">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-300 py-2 text-black px-3" placeholder="email..." required>
            </div>
            
            <div class="flex flex-row space-x-2 px-10">
                <label for="password" class="text-lg font-medium">Password:</label>
                <input type="password" name="password" id="password" class="bg-gray-300 text-black px-3 py-2" placeholder="password...">
            </div>

            <div class="flex flex-row gap-4 mx-auto">
                <button type="submit" class="bg-cyan-600 p-1 text-white rounded-md text-lg font-medium">Register</button>
                <button type="reset" class="bg-red-600 p-1 text-white rounded-md text-lg font-medium">Reset</button>

            </div>
        </div>
    </form>
</div>
    
@endsection