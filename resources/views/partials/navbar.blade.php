@php
    $isHome = request()->is('/');
    // Navbar fixed, glassmorphism on home page
    $navBgClass = $isHome ? 'bg-[#0a0a0a]/80 backdrop-blur-md fixed top-0 w-full z-50 border-b border-neutral-800' : 'bg-white shadow-sm relative border-b border-gray-100';
    $logoTextClass = $isHome ? 'text-white' : 'text-gray-900';
    $logoXClass = $isHome ? 'text-[#44d62c]' : 'text-blue-600';
    $linkClass = $isHome ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-gray-900';
    $btnClass = $isHome ? 'bg-[#44d62c] text-black hover:bg-[#3bc225] shadow-[0_0_15px_rgba(68,214,44,0.3)]' : 'bg-gray-900 text-white hover:bg-gray-800';
    $loginLinkClass = $isHome ? 'text-gray-300 hover:text-white' : 'text-gray-700 hover:text-gray-900';
    $iconClass = $isHome ? 'text-gray-300' : 'text-gray-500';
    $dropdownBgClass = $isHome ? 'bg-[#111111] border border-neutral-800' : 'bg-white border border-gray-100';
    $dropdownTextClass = $isHome ? 'text-gray-300 hover:bg-neutral-900 hover:text-white' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900';
@endphp

<nav class="{{ $navBgClass }}" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">

            <!-- Left: Logo & Links -->
            <div class="flex items-center gap-10">
                <!-- Logo -->
                <a href="/" class="text-2xl font-extrabold {{ $logoTextClass }} tracking-tight">
                    PutNow<span class="{{ $logoXClass }}">.</span>
                </a>
                
                <!-- Desktop Links -->
                <div class="hidden md:flex space-x-8 text-sm font-bold {{ $linkClass }}">
                    <a href="{{ $isHome ? '#cara-kerja' : url('/#cara-kerja') }}" class="transition" wire:navigate>Cara Kerja</a>
                    <a href="{{ $isHome ? '#testimoni' : url('/#testimoni') }}" class="transition" wire:navigate>Kata Mereka</a>
                    <a href="{{ $isHome ? '#kenapa-putnow' : url('/#kenapa-putnow') }}" class="transition" wire:navigate>Keunggulan</a>
                    @if($isHome)
                        <a href="{{ url('/jasa') }}" class="transition text-[#44d62c]">Jelajahi Jasa</a>
                    @endif
                </div>
            </div>

            <!-- Right: Actions -->
            <div class="hidden md:flex items-center gap-6">
                @guest
                    <a href="{{ route('login') }}" class="text-sm font-bold transition {{ $loginLinkClass }}">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full transition text-sm font-extrabold {{ $btnClass }}">
                        Buka App
                    </a>
                @else
                    <div class="relative" x-data="{ profileOpen: false }">
                        <button @click="profileOpen = !profileOpen" @click.away="profileOpen = false" class="flex items-center gap-2 px-3 py-1.5 rounded-full transition focus:outline-none">
                            <div class="h-8 w-8 rounded-full bg-neutral-800 flex items-center justify-center text-xs font-bold text-white border border-neutral-700">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <span class="text-sm font-bold max-w-[120px] truncate {{ $logoTextClass }}">{{ Auth::user()->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-200 {{ $iconClass }}" :class="{ 'rotate-180': profileOpen }" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div x-show="profileOpen" style="display: none;" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 mt-3 w-48 rounded-xl shadow-2xl py-2 {{ $dropdownBgClass }} z-50">
                             
                            <div class="px-4 py-3 border-b {{ $isHome ? 'border-neutral-800' : 'border-gray-100' }}">
                                <p class="text-xs {{ $isHome ? 'text-gray-500' : 'text-gray-500' }}">Masuk sebagai</p>
                                <p class="text-sm font-bold truncate {{ $isHome ? 'text-white' : 'text-gray-900' }}">{{ Auth::user()->name }}</p>
                            </div>
                            
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2.5 text-sm transition {{ $dropdownTextClass }}" wire:navigate>Dashboard</a>
                            
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2.5 text-sm transition {{ $dropdownTextClass }}">Sign out</button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="{{ $logoTextClass }} focus:outline-none" aria-label="toggle menu">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>
                    <svg x-show="open" style="display: none;" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" style="display: none;" class="md:hidden {{ $isHome ? 'bg-[#0a0a0a] border-t border-neutral-800' : 'bg-white border-t border-gray-100' }} py-4 px-6 shadow-lg absolute w-full left-0 z-50">
        <div class="flex flex-col space-y-4 text-sm font-bold {{ $linkClass }}">
            <a href="{{ $isHome ? '#cara-kerja' : url('/#cara-kerja') }}" @click="open = false" wire:navigate>Cara Kerja</a>
            <a href="{{ $isHome ? '#testimoni' : url('/#testimoni') }}" @click="open = false" wire:navigate>Kata Mereka</a>
            <a href="{{ $isHome ? '#kenapa-putnow' : url('/#kenapa-putnow') }}" @click="open = false" wire:navigate>Keunggulan</a>
        </div>

        <div class="mt-6 pt-6 {{ $isHome ? 'border-t border-neutral-800' : 'border-t border-gray-100' }} flex flex-col space-y-3">
            @guest
                <a href="{{ route('login') }}" class="text-center px-3 py-3 border {{ $isHome ? 'border-neutral-700 text-white hover:bg-neutral-800' : 'border-gray-300 text-gray-700 hover:bg-gray-50' }} rounded-xl transition text-sm font-bold">Masuk</a>
                <a href="{{ route('register') }}" class="text-center px-3 py-3 rounded-xl transition text-sm font-extrabold {{ $btnClass }}">Buka App</a>
            @else
                <span class="font-extrabold text-sm mb-2 text-center {{ $logoTextClass }}">Halo, {{ Auth::user()->name }}</span>
                <a href="{{ route('dashboard') }}" class="text-center px-3 py-3 border {{ $isHome ? 'border-neutral-700 text-white hover:bg-neutral-800' : 'border-gray-300 text-gray-700 hover:bg-gray-50' }} rounded-xl transition text-sm font-bold">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="flex">
                    @csrf
                    <button type="submit" class="w-full text-center px-3 py-3 bg-red-600 text-white rounded-xl hover:bg-red-700 transition text-sm font-bold">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>