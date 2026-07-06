<section class="max-w-7xl mx-auto px-6 py-20 lg:py-32">
    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
        <!-- Bagian Kiri -->
        <div data-aos="fade-right">
            <p class="text-[#44d62c] text-xs font-bold tracking-widest uppercase mb-4">BUTUH JASA. PILIH AHLINYA. TUNTASKAN MASALAH.</p>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-8">
                Lagi butuh <br>
                <span class="text-[#44d62c]">bantuan mendadak</span> <br>
                hari ini ?
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-lg">
                Posting pekerjaanmu, puluhan penyedia jasa siap membantu dalam hitungan menit. Cepat, praktis, tanpa ribet.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/jasa') }}" class="px-8 py-4 bg-[#44d62c] text-black font-bold rounded-xl hover:bg-[#3bc225] transition shadow-[0_0_20px_rgba(68,214,44,0.3)]">
                    Jelajahi Jasa
                </a>
                @guest
                    <a href="{{ route('login') }}" class="px-8 py-4 bg-neutral-900 border border-neutral-700 text-white font-bold rounded-xl hover:bg-neutral-800 transition">
                        Daftar Sekarang
                    </a>
                @endguest
            </div>
            <div class="mt-8 flex gap-6 text-xs text-gray-500">
                <span class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#44d62c]"></span> Langsung mulai</span>
                <span class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#44d62c]"></span> Verifikasi aman</span>
            </div>
        </div>

        <!-- Bagian Kanan (Floating Card) -->
        <div class="mt-16 lg:mt-0 relative" data-aos="fade-left" data-aos-delay="200">
            <div class="absolute inset-0 bg-[#44d62c] opacity-20 blur-3xl rounded-full transform -translate-x-10 translate-y-10"></div>
            
            <div class="bg-[#111111] border border-neutral-800 rounded-3xl p-8 relative shadow-2xl transform rotate-1 hover:rotate-0 transition duration-500">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1">CONTOH JASA</p>
                        <h3 class="text-2xl font-extrabold text-white">Yang bisa kamu temuin</h3>
                    </div>
                    <span class="bg-[#44d62c]/10 text-[#44d62c] text-xs font-bold px-3 py-1 rounded-full border border-[#44d62c]/30">Aktif</span>
                </div>

                <!-- Gig Items -->
                <div class="space-y-4">
                    <div class="bg-black border border-neutral-800 p-5 rounded-2xl flex justify-between items-start hover:border-[#44d62c]/50 transition cursor-pointer">
                        <div>
                            <h4 class="font-bold text-white mb-1">Butuh 20 orang bersihin area event</h4>
                            <p class="text-xs text-gray-500">On-site / Tenaga Fisik</p>
                        </div>
                        <span class="bg-neutral-900 text-[#44d62c] text-xs font-bold px-3 py-1.5 rounded-lg border border-neutral-800">Rp 50.000 / org</span>
                    </div>

                    <div class="bg-black border border-neutral-800 p-5 rounded-2xl flex justify-between items-start hover:border-[#44d62c]/50 transition cursor-pointer">
                        <div>
                            <h4 class="font-bold text-white mb-1">Cari vendor cetak banner murah</h4>
                            <p class="text-xs text-gray-500">Riset Cepat / Online</p>
                        </div>
                        <span class="bg-neutral-900 text-[#44d62c] text-xs font-bold px-3 py-1.5 rounded-lg border border-neutral-800">Rp 35.000</span>
                    </div>

                    <div class="bg-black border border-neutral-800 p-5 rounded-2xl flex justify-between items-start hover:border-[#44d62c]/50 transition cursor-pointer">
                        <div>
                            <h4 class="font-bold text-white mb-1">Antriin restoran ramen viral</h4>
                            <p class="text-xs text-gray-500">Bantuan Harian / On-site</p>
                        </div>
                        <span class="bg-neutral-900 text-[#44d62c] text-xs font-bold px-3 py-1.5 rounded-lg border border-neutral-800">Rp 75.000</span>
                    </div>
                </div>

                <div class="mt-6 bg-[#0a0a0a] p-4 rounded-xl border border-neutral-800">
                    <p class="text-xs text-gray-300 font-bold mb-1">Detail jelas, kerjaan beres.</p>
                    <p class="text-[10px] text-gray-500">Tulis tugas, budget, dan tenggat waktu dengan jelas agar penyedia jasa langsung paham sebelum mengambil tugas.</p>
                </div>
            </div>
        </div>
    </div>
</section>