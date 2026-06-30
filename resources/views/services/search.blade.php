<form action="{{ route('services.index') }}" method="GET">

    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="🔍 Cari jasa..."
        class="w-full p-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">

</form>