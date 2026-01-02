<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MenuGO - Digitalkan UMKM Ketintang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900">

    <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-green-600">Menu<span class="text-gray-800">GO</span></span>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#beranda" class="text-gray-600 hover:text-green-600 font-semibold transition">Beranda</a>
                    <a href="#jelajahi" class="text-gray-600 hover:text-green-600 font-semibold transition">Jelajahi Menu</a>
                    <a href="#daftar-umkm" class="text-gray-600 hover:text-green-600 font-semibold transition">Daftar UMKM</a>

                    <div class="h-6 w-[1px] bg-gray-300 mx-2"></div>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="bg-green-600 text-white px-6 py-2.5 rounded-full font-bold hover:bg-green-700 transition shadow-lg shadow-green-200">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 font-bold hover:text-green-600">Masuk</a>
                            <a href="{{ route('register') }}" class="bg-green-600 text-white px-6 py-2.5 rounded-full font-bold hover:bg-green-700 transition shadow-lg shadow-green-200">Mulai Sekarang</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <section id="beranda" class="min-h-[calc(100vh-80px)] flex items-center bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl font-black leading-tight text-gray-800">
                        Digitalkan <span class="text-green-600">UMKM</span><br>
                        <span class="text-green-600">Kuliner</span> Anda<br>
                        Bersama MenuGO
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                        Kelola menu, pantau penjualan, dan jangkau lebih banyak pelanggan hanya dalam satu aplikasi yang mudah dan responsif.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="{{ route('register') }}" class="bg-green-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-green-700 transition transform hover:-translate-y-1 shadow-xl shadow-green-200">
                            Mulai Sekarang
                        </a>
                        <a href="#jelajahi" class="border-2 border-green-600 text-green-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-green-50 transition">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div class="absolute -top-10 -right-10 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse"></div>
                        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-orange-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse delay-700"></div>

                        <img src="https://i.ibb.co/LhYdMnd/image-b3474b.jpg" alt="MenuGO Promo" class="relative rounded-[2rem] shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500 border-8 border-white">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jelajahi" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Jelajahi Menu Terpopuler</h2>
                <p class="text-gray-600">Temukan hidangan favoritmu dari berbagai kategori</p>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mb-12 text-center">
                @foreach(['Semua', 'Makanan', 'Minuman', 'Cemilan', 'Kopi'] as $cat)
                    <button class="px-6 py-2 rounded-full font-semibold border-2 border-green-600 {{ $cat == 'Semua' ? 'bg-green-600 text-white' : 'text-green-600 hover:bg-green-50' }} transition">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="h-40 bg-gray-200 rounded-xl mb-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&q=80&w=300" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-lg">Menu Spesial {{ $i }}</h4>
                    <p class="text-green-600 font-bold">Rp 25.000</p>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="daftar-umkm" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-2 text-gray-800">Daftar UMKM Ketintang</h2>
                    <p class="text-gray-600">Mitra kuliner terpercaya di sekitar kampus.</p>
                </div>
                <a href="#" class="text-green-600 font-bold hover:underline">Lihat Semua Mitra &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="group bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-500">
                    <div class="relative h-56">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&q=80&w=500" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span class="absolute bottom-4 left-4 bg-white text-green-600 text-xs font-black px-3 py-1 rounded-lg">TERVERIFIKASI</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Resto Ketintang Jaya {{ $i }}</h3>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>📍 0.5 km dari Kampus</span>
                            <span class="mx-2">•</span>
                            <span class="text-orange-500 font-bold">★ 4.8</span>
                        </div>
                        <button class="w-full py-3 rounded-xl bg-gray-50 font-bold text-gray-700 group-hover:bg-green-600 group-hover:text-white transition">Lihat Toko</button>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-3xl font-bold text-green-500 mb-4">Menu<span class="text-white">GO</span></p>
            <p class="text-gray-400 mb-8 max-w-md mx-auto">Solusi digitalisasi UMKM kuliner di Ketintang, Surabaya. Mudah, Cepat, dan Terintegrasi.</p>
            <div class="border-t border-gray-800 pt-8 text-sm text-gray-500">
                &copy; 2026 MenuGO Project - Built with Laravel & Tailwind.
            </div>
        </div>
    </footer>

</body>
</html>
