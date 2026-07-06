<section id="faq" class="max-w-3xl mx-auto px-6 py-20 border-t border-neutral-900">
    <div class="text-center mb-12" data-aos="fade-up">
        <p class="text-[#44d62c] text-xs font-bold tracking-widest uppercase mb-4">PERTANYAAN UMUM</p>
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight tracking-tight">
            Masih ragu? Temukan jawabannya di sini.
        </h2>
    </div>

    <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
        <!-- FAQ Item 1 -->
        <div x-data="{ open: false }" class="bg-[#111111] border border-neutral-800 rounded-2xl overflow-hidden">
            <button @click="open = !open" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none hover:bg-neutral-900 transition">
                <span class="font-bold text-white">Apakah uang saya aman saat menyewa jasa?</span>
                <svg class="w-5 h-5 text-[#44d62c] transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div x-show="open" x-collapse style="display: none;" class="px-6 pb-5 text-sm text-gray-400 leading-relaxed">
                Sangat aman. Sistem kami menggunakan metode rekening bersama (escrow). Uang Anda akan ditahan oleh sistem dan baru diteruskan ke Mitra setelah pekerjaan selesai dan Anda konfirmasi.
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div x-data="{ open: false }" class="bg-[#111111] border border-neutral-800 rounded-2xl overflow-hidden">
            <button @click="open = !open" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none hover:bg-neutral-900 transition">
                <span class="font-bold text-white">Apakah saya bisa menawarkan jasa saya sendiri?</span>
                <svg class="w-5 h-5 text-[#44d62c] transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div x-show="open" x-collapse style="display: none;" class="px-6 pb-5 text-sm text-gray-400 leading-relaxed">
                Tentu saja! PutNow adalah platform dua arah. Anda bisa mencari bantuan, atau mendaftar sebagai Mitra untuk menawarkan keahlian Anda dan mendapatkan penghasilan tambahan.
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div x-data="{ open: false }" class="bg-[#111111] border border-neutral-800 rounded-2xl overflow-hidden">
            <button @click="open = !open" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none hover:bg-neutral-900 transition">
                <span class="font-bold text-white">Berapa potongan biaya admin di PutNow?</span>
                <svg class="w-5 h-5 text-[#44d62c] transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div x-show="open" x-collapse style="display: none;" class="px-6 pb-5 text-sm text-gray-400 leading-relaxed">
                Pendaftaran 100% gratis. Kami hanya mengenakan potongan biaya platform yang sangat kecil dari setiap transaksi yang berhasil selesai, untuk pemeliharaan server dan keamanan transaksi.
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div x-data="{ open: false }" class="bg-[#111111] border border-neutral-800 rounded-2xl overflow-hidden">
            <button @click="open = !open" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none hover:bg-neutral-900 transition">
                <span class="font-bold text-white">Bagaimana jika hasil kerja Mitra tidak sesuai?</span>
                <svg class="w-5 h-5 text-[#44d62c] transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div x-show="open" x-collapse style="display: none;" class="px-6 pb-5 text-sm text-gray-400 leading-relaxed">
                Anda dapat meminta revisi atau mengajukan keluhan sebelum menyetujui penyelesaian tugas. Tim mediasi kami akan membantu meninjau bukti kerja dan menyelesaikan masalah secara adil.
            </div>
        </div>
    </div>
</section>
