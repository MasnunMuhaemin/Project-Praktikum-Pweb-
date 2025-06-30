<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form method="POST" action="{{ route('admin.login') }}" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center">Login Admin</h2>

        @error('email')
            <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
        @enderror

        <div class="mb-4">
            <label class="block mb-1 text-sm font-medium">Email</label>
            <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-sm font-medium">Password</label>
            <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
    </form>
</body>
</html>
