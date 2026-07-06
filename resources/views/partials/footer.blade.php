@php
    $isHome = request()->is('/');
    $footerBg = $isHome ? 'bg-[#0a0a0a] border-t border-neutral-900' : 'bg-gray-900 mt-20';
    $logoText = $isHome ? 'text-white' : 'text-white';
    $logoXClass = $isHome ? 'text-[#44d62c]' : 'text-blue-500';
    $linkColor = $isHome ? 'hover:text-[#44d62c]' : 'hover:text-white';
@endphp

<footer class="{{ $footerBg }} text-gray-500">
    <div class="max-w-7xl mx-auto px-6 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Brand -->
            <div class="flex items-center gap-6">
                <a href="/" class="text-xl font-extrabold {{ $logoText }} tracking-tight">
                    PutNow<span class="{{ $logoXClass }}">.</span>
                </a>
                <span class="hidden md:block h-4 w-px bg-neutral-800"></span>
                <p class="text-xs max-w-xs">Platform pencarian jasa terpercaya.</p>
            </div>

            <!-- Menu -->
            <ul class="flex flex-wrap items-center gap-6 text-xs font-bold">
                <li><a href="{{ $isHome ? '#cara-kerja' : url('/#cara-kerja') }}" class="{{ $linkColor }} transition" wire:navigate>Cara Kerja</a></li>
                <li><a href="{{ $isHome ? '#kenapa-putnow' : url('/#kenapa-putnow') }}" class="{{ $linkColor }} transition" wire:navigate>Keunggulan</a></li>
                <li><a href="mailto:support@putnow.id" class="{{ $linkColor }} transition">Bantuan</a></li>
            </ul>
        </div>

        <div class="mt-8 pt-6 border-t {{ $isHome ? 'border-neutral-900' : 'border-gray-800' }} flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs">
                © {{ date('Y') }} PutNow. Hak Cipta Dilindungi.
            </p>
            <div class="flex gap-4">
                <a href="#" class="text-gray-600 {{ $linkColor }} transition"><span class="sr-only">Instagram</span><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg></a>
            </div>
        </div>
    </div>
</footer>