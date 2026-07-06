<form action="{{ route('services.index') }}" method="GET" x-data @submit.prevent>
    <div class="relative max-w-xl mx-auto mb-10">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Ketik untuk mencari jasa..."
            @input.debounce.350ms="
                fetch('{{ route('services.index') }}?search=' + encodeURIComponent($event.target.value))
                    .then(res => res.text())
                    .then(html => {
                        let doc = new DOMParser().parseFromString(html, 'text/html');
                        document.getElementById('services-container').innerHTML = doc.getElementById('services-container').innerHTML;
                        window.history.pushState({}, '', '?search=' + encodeURIComponent($event.target.value));
                    })
            "
            class="w-full pl-11 pr-4 py-3.5 rounded-full border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm transition-all hover:shadow-md">
    </div>
</form>