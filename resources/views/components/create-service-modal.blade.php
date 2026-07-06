<x-modal name="create-service" maxWidth="md" :show="$errors->any()">
    <div class="p-6">
        <div class="flex items-center justify-between mb-5 border-b border-gray-100 pb-4">
            <h2 class="text-lg font-bold text-gray-800">✨ Tambah Jasa Baru</h2>
            <button x-on:click="$dispatch('close')" class="text-gray-400 hover:text-gray-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Icon -->
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1.5">Ikon (Emoji)</label>
                <input type="text" name="icon" value="{{ old('icon') }}" placeholder="Contoh: 🧹, 🚗, 💻" class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                @error('icon') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Title -->
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1.5">Nama Jasa</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Contoh: Jasa Bersih Rumah" class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                @error('title') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1.5">Deskripsi Singkat</label>
                <textarea name="description" rows="3" placeholder="Jelaskan detail jasa yang ditawarkan..." class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition resize-none">{{ old('description') }}</textarea>
                @error('description') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Image Upload (Modern Style) -->
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1.5">Gambar Jasa (Opsional)</label>
                <div class="relative w-full border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center hover:bg-gray-50 transition cursor-pointer" 
                     x-data="{ fileName: '', fileError: '' }">
                    <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" 
                           @change="
                               let file = $event.target.files[0];
                               if (file) {
                                   if (file.size > 2 * 1024 * 1024) {
                                       fileError = 'Ukuran file terlalu besar! Maksimal 2MB.';
                                       fileName = '';
                                       $event.target.value = '';
                                   } else {
                                       fileError = '';
                                       fileName = file.name;
                                   }
                               } else {
                                   fileName = '';
                                   fileError = '';
                               }
                           ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <p class="text-xs text-gray-500 font-medium" x-text="fileName === '' ? 'Klik atau seret file ke sini' : fileName"></p>
                    <p class="text-[10px] text-gray-400 mt-1" x-show="fileName === ''">Maks. ukuran 2MB (JPG, PNG)</p>
                    <p class="text-[10px] text-red-500 font-bold mt-2" x-show="fileError !== ''" x-text="fileError" style="display: none;"></p>
                </div>
                @error('image') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="px-4 py-2 text-xs font-bold text-gray-500 hover:text-gray-700 transition">
                    Batal
                </button>
                <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 text-xs font-bold transition flex items-center gap-2">
                    Simpan Jasa
                </button>
            </div>
        </form>
    </div>
</x-modal>
