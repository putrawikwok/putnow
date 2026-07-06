@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-[#0a0a0a] border-neutral-700 text-white focus:border-[#44d62c] focus:ring-[#44d62c] rounded-lg shadow-sm']) }}>
