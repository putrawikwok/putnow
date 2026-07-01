<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div>
                <a href="/" class="text-2xl font-bold text-blue-600">
                    PutNow
                </a>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-blue-600">Beranda</a>
                <a href="#kategori" class="hover:text-blue-600">Kategori</a>
                <a href="#footer" class="hover:text-blue-600">Tentang</a>
            </div>

            <!-- Tombol -->
            <div class="space-x-3">

    @guest

        <a href="{{ route('login') }}"
           class="px-4 py-2 border border-blue-600 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white transition">
            Masuk
        </a>

        <a href="{{ route('register') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Daftar
        </a>

    @else

        <span class="font-semibold text-gray-700">
            Halo, {{ Auth::user()->name }}
        </span>

        <a href="{{ route('dashboard') }}"
           class="px-4 py-2 border border-blue-600 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white transition">
            Dashboard
        </a>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf

            <button
                type="submit"
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">

                Logout

            </button>

        </form>

    @endguest

</div>

        </div>
    </div>
</nav>