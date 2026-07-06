<form
    action="{{ isset($service) ? route('services.update', $service) : route('services.store') }}"
    method="POST"
    enctype="multipart/form-data"
    class="mt-10 space-y-6">

    @csrf

    @isset($service)
        @method('PUT')
    @endisset

    <div>

    <label class="block font-semibold mb-2">
        Gambar Jasa
    </label>

    <input
        type="file"
        name="image"
        class="w-full border rounded-lg p-3">
    
    @error('image')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror

</div>

    <div>

        <label class="block font-semibold mb-2">
            Icon
        </label>

        <input
            type="text"
            name="icon"
            value="{{ old('icon', $service->icon ?? '') }}"
            class="w-full border rounded-lg p-3">

        @error('icon')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    <div>

        <label class="block font-semibold mb-2">
            Nama Jasa
        </label>

        <input
            type="text"
            name="title"
            value="{{ old('title', $service->title ?? '') }}"
            class="w-full border rounded-lg p-3">

        @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    <div>

        <label class="block font-semibold mb-2">
            Deskripsi
        </label>

        <textarea
            name="description"
            rows="5"
            class="w-full border rounded-lg p-3">{{ old('description', $service->description ?? '') }}</textarea>

        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">

        {{ isset($service) ? 'Update Jasa' : 'Simpan Jasa' }}

    </button>

</form>