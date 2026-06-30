<div class="text-7xl">
    {{ $service->icon }}
</div>

<h1 class="text-5xl font-bold mt-6">
    {{ $service->title }}
</h1>

<p class="mt-6 text-lg text-gray-600">
    {{ $service->description }}
</p>

<a
    href="{{ route('services.edit', $service) }}"
    class="inline-block mt-8 bg-yellow-500 text-white px-6 py-3 rounded-xl hover:bg-yellow-600">

    Edit Jasa

</a>

<form
    action="{{ route('services.destroy', $service) }}"
    method="POST"
    class="inline">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        onclick="return confirm('Yakin ingin menghapus jasa ini?')"
        class="bg-red-600 text-white px-6 py-3 rounded-xl hover:bg-red-700">

        Hapus Jasa

    </button>

</form>