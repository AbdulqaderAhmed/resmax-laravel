@extends('welcome')

@section('content')

<div class="bg-gray-300 mx-auto w-3/4">
    <h1 class="bg-gray-500 px-10 py-3  text-2xl text-white font-medium">Dashboard</h1>
    <p class="px-10 py-4 text-xl">Welcome <span class="font-extrabold">{{ Auth::user()->name }}</span> !!!</p>
</div>
    
@endsection