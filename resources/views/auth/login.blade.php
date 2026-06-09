<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-sky-200 to-blue-300">

    <div class="w-full max-w-xs bg-white/90 backdrop-blur-md shadow-xl rounded-xl p-4">

        <!-- Title -->
        <div class="text-center mb-4">
            <h1 class="text-lg font-bold text-blue-800">Login</h1>
        </div>

        <!-- Error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-1.5 rounded mb-3 text-[10px] text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login.post') }}" class="space-y-2">
            @csrf

            <!-- Email -->
            <input type="email" name="email"
                class="w-full p-2 border border-blue-200 bg-blue-50 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-400"
                placeholder="Email" required>

            <!-- Password -->
            <input type="password" name="password"
                class="w-full p-2 border border-blue-200 bg-blue-50 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-400"
                placeholder="Password" required>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded text-xs">
                Login
            </button>
        </form>

        <!-- Footer -->
        <p class="text-center text-[9px] text-blue-700 mt-3">
            © {{ date('Y') }}
        </p>

    </div>

</body>
</html>