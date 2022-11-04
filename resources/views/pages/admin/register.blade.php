@extends('welcome')

@section('content')

<div class="mx-auto my-10">
    <form action="{{ route('user.register') }}" method="POST">
        @csrf
        <div class="bg-gray-400 flex flex-col space-y-4 border-2 rounded-md shadow-lg">
            <h2 class="text-xl font-medium text-center">Register</h2>
            <div class="flex flex-row space-x-2">
                <label for="name" class="text-lg font-medium">Name:</label>
                <input type="text" name="name" id="name" class="bg-gray-300 text-black px-3" placeholder="name..." required>
            </div>

            <div class="flex flex-row space-x-2">
                <label for="email" class="text-lg font-medium">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-300 text-black px-3" placeholder="email..." required>
            </div>
            
            <div class="flex flex-row space-x-2">
                <label for="password" class="text-lg font-medium">Password</label>
                <input type="password" name="password" id="password" class="bg-gray-300 text-black px-3" placeholder="password...">
            </div>
            <button type="submit" class="bg-cyan-600 p-5 mx-auto rounded-md text-lg font-medium">Register</button>
            <button type="reset" class="bg-cyan-600 p-5 mx-auto rounded-md text-lg font-medium">Reset</button>
        </div>
    </form>
</div>
    
@endsection