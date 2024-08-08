<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <livewire:layout.navigation/>

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-black text-white min-h-screen p-6 hidden lg:block">
            <ul>
                <li>
                    <a href="{{ route('tasks') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                        {{ __('Tasks') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('tasks.create') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                        {{ __('Create Task') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('tasks.completed') }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                        {{ __('Completed Tasks') }}
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Hamburger Menu for smaller screens -->
            <button id="hamburger" class="lg:hidden text-black mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>

            {{ $slot }}
        </main>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('hamburger').addEventListener('click', function () {
        let sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });
</script>
</body>
</html>
