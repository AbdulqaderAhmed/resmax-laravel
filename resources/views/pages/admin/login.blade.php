@extends('welcome')

@section('content')

<div class="mx-auto my-10">
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <div class="bg-gray-200 flex flex-col space-y-5 mx-auto w-1/3 h-3/4 border-2 rounded-md shadow-lg">
            <h2 class="text-3xl p-2 bg-gray-400 w-full font-extrabold text-center ">Login</h2>
            <div class="flex flex-row space-x-11 px-10">
                <label for="email" class="text-lg font-bolder">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-300 text-black px-3" placeholder="email..." required>
            </div>
    
            <div class="flex flex-row space-x-2 px-10">
                <label for="password" class="text-lg font-medium">Password:</label>
                <input type="password" name="password" id="password" class="bg-gray-300 text-black px-3" placeholder="password...">
            </div>
            <button type="submit" class="bg-cyan-600 p-1 mx-auto rounded-md text-lg font-medium">Subimt</button>
        </div>
    </form>
</div>
    
@endsection