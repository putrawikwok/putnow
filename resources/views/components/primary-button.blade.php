<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#44d62c] border border-transparent rounded-lg font-bold text-xs text-black uppercase tracking-widest hover:bg-[#3bc225] focus:bg-[#3bc225] active:bg-[#3bc225] focus:outline-none focus:ring-2 focus:ring-[#44d62c] focus:ring-offset-2 focus:ring-offset-[#111111] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
