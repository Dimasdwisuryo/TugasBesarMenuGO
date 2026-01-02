<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - MenuGO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col justify-center items-center p-4">

        <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-12 border border-gray-100">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-black text-gray-800 tracking-tight">
                    <span class="text-green-600">Menu</span>GO
                </h2>
                <p class="mt-2 text-sm text-gray-500 font-medium px-4 leading-relaxed">
                    Daftar akun untuk mulai mendigitalkan UMKM Anda
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-bold text-gray-700 mb-1.5 ml-1">Nama Lengkap</label>
                    <input id="name"
                           class="block w-full px-5 py-3.5 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition"
                           type="text" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required />
                    @error('name') <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-1.5 ml-1">Alamat Email</label>
                    <input id="email"
                           class="block w-full px-5 py-3.5 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition"
                           type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                    @error('email') <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-1.5 ml-1">Password</label>
                    <input id="password"
                           class="block w-full px-5 py-3.5 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition"
                           type="password" name="password" placeholder="Minimal 8 karakter" required />
                    @error('password') <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-bold text-gray-700 mb-1.5 ml-1">Konfirmasi Password</label>
                    <input id="password_confirmation"
                           class="block w-full px-5 py-3.5 rounded-2xl border-gray-200 bg-gray-50 focus:border-green-500 focus:ring-green-500 transition"
                           type="password" name="password_confirmation" placeholder="Ulangi password" required />
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full py-4 rounded-full shadow-lg shadow-green-200 text-sm font-extrabold text-white bg-green-600 hover:bg-green-700 transition transform hover:-translate-y-1">
                        Daftar Sekarang
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-bold text-green-600 hover:text-green-700 transition">
                        Masuk di sini
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
