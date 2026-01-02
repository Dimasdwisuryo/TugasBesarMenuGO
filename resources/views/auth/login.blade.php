<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - MenuGO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col justify-center items-center p-4">

        <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-12 border border-gray-100">

            <div class="text-center mb-10">
                <h2 class="text-3xl font-black text-gray-800 tracking-tight">
                    <span class="text-green-600">Menu</span>GO
                </h2>
                <p class="mt-2 text-sm text-gray-500 font-medium">
                    Silakan masuk ke akun Anda
                </p>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2 ml-1">Alamat Email</label>
                    <input id="email"
                           class="block w-full px-5 py-4 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition duration-200 shadow-sm"
                           type="email"
                           name="email"
                           placeholder="name@example.com"
                           value="{{ old('email') }}"
                           required autofocus />
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2 ml-1">Password</label>
                    <input id="password"
                           class="block w-full px-5 py-4 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition duration-200 shadow-sm"
                           type="password"
                           name="password"
                           placeholder="Masukkan password"
                           required />
                    @error('password')
                        <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full py-4 rounded-2xl shadow-lg shadow-green-200 text-sm font-bold text-white bg-green-600 hover:bg-green-700 transition duration-300 transform hover:-translate-y-1">
                        Masuk Sekarang
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-bold text-green-600 hover:text-green-700 transition">
                        Daftar di sini
                    </a>
                </p>
            </div>
        </div>

        <div class="mt-8 text-center text-xs text-gray-400 font-medium">
            © 2025 MenuGO Project - Tugas Besar
        </div>
    </div>
</body>
</html>
