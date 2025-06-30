<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body class="bg-gray-100 min-h-screen flex">

    <aside class="w-64 bg-white shadow-lg min-h-screen p-6">
        <h2 class="text-xl font-bold mb-6 text-blue-600">Admin Panel</h2>
        <nav class="space-y-4">
            <a href="#" class="block text-gray-700 hover:text-blue-500">Dashboard</a>
            <a href="{{ route('products.index') }}" class="block text-gray-700 hover:text-blue-500">Product</a>
            <a href="#" class="block text-gray-700 hover:text-blue-500">Settings</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                @csrf
            </form>

            <a href="#" class="block text-gray-700 hover:text-red-500"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <h1 class="text-3xl font-semibold mb-4">@yield('page-title', 'Dashboard')</h1>
        <div>
            @yield('content')
        </div>
    </main>

</body>
</html>
