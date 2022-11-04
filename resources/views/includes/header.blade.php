<nav class="bg-black flex flex-row justify-between p-3 px-12 shadow-md">
    <a href="{{ url('/') }}" class="text-4xl text-white pt-2 font-bold">Resmax</a>
    <ul class="flex flex-row justify-between space-x-3 text-white">
            @if(Auth::guest())
                <li class="m-2">
                    <a href="{{ route('login') }}" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-3 font-medium">Login</a>
                </li>
                @if(Route::has('register'))
                    <li class="m-2">
                        <a href="{{ route('register') }}" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-3 font-medium">Register</a>
                    </li>
                @endif
            @endif

            @if(Auth::check())
                <li class="p-3">Home</li>
                <li class="p-3">About</li>
                <li class="p-3">Contact</li>

                @if(Route::has('logout'))
                <li class="m-2">
                        <form action="{{ route('logout') }}" method="Get">
                            @csrf
                    <button type="submit" class="bg-gradient-to-tr rounded-md from-indigo-700 to-pink-700 p-2 font-medium">Logout</button>
                </form>
                </li>
                
                @endif
            @endif
    </ul>
</nav>