<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite('resources/css/app.css') {{-- If using Tailwind --}}
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="w-full max-w-md p-6 bg-white rounded shadow">
        <div class="flex flex-row items-center justify-center mb-4 text-2xl font-bold text-center">
            <img src="{{ asset('logo.png') }}" alt="">
            <div>
                8 Dragon's Heart Login
            </div>
        </div>

        @if (session('success'))
            <div class="p-2 mb-4 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="p-2 mb-4 text-red-700 bg-red-100 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
            @csrf

            <input type="hidden" name='_token' value="{{ csrf_token() }}" />

            <div>
                <label class="block">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div>
                <label class="block">Password</label>
                <input type="password" name="password" class="w-full px-3 py-2 border rounded" required>
            </div>

            <button type="submit" class="w-full py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>

</body>

</html>
