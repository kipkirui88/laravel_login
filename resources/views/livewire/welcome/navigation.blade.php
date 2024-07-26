<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-row items-center justify-between">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">g-Gas</span>
        </a>
        <button class="md:hidden text-gray-900 focus:outline-none" id="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <nav id="menu" class="hidden md:flex md:items-center md:w-auto w-full">
            <ul class="md:flex md:space-x-8 space-y-6 md:space-y-0 md:mt-0 mt-2 text-base justify-center">
                <li><a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Home</a></li>
                <li><a href="{{ url('/about') }}" class="mr-5 hover:text-gray-900">About</a></li>
                <li><a class="mr-5 hover:text-gray-900">Contact</a></li>
                @auth
                <li>
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                        Dashboard
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                        Login
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                        Register
                    </a>
                </li>
                @endif
                @endauth
            </ul>
        </nav>
    </div>
</header>

<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>