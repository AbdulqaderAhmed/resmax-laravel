<nav class="bg-black flex flex-row justify-between p-5 shadow-md">
    <h1 class="text-4xl text-white font-bold">Resmax</h1>
    <ul class="flex flex-row justify-between space-x-2 text-white">
        @if(Route::has('login'))
            @auth
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
                
            @else
                <li class="m-2">
                    <a href="{{ route('login') }}" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-3 font-medium">Login</a>
                </li>
                @if(Route::has('register'))
                    <li class="m-2">
                        <a href="{{ route('register') }}" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-3 font-medium">Register</a>
                    </li>
                @endif

                @if(Route::has('logout'))
                <li class="m-2">
                        <form action="{{ route('logout') }}" method="Get">
                            @csrf
                    <button type="submit" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-3 font-medium">Logout</button>
                </form>
                </li>
                
                @endif
            @endauth
        @endif
    </ul>
</nav>