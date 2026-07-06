<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PutNow - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex flex-col" x-data="{ sidebarOpen: false }">

    <!-- Admin Top Navbar (Minimalist) -->
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="px-4 md:px-6 flex justify-between items-center h-12">
            
            <div class="flex items-center gap-3">
                <!-- Mobile Hamburger Toggle -->
                <button @click="sidebarOpen = !sidebarOpen" type="button" class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="/" class="text-lg font-extrabold text-blue-600 tracking-tight">
                    PutNow
                </a>
            </div>

            <!-- User Profile Dropdown -->
            <div class="relative" x-data="{ profileOpen: false }">
                <button @click="profileOpen = !profileOpen" @click.away="profileOpen = false" class="flex items-center gap-2 px-2 py-1 rounded-full hover:bg-gray-100 transition focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="text-xs font-semibold text-gray-700 hidden sm:block">{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180': profileOpen }" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                
                <div x-show="profileOpen" style="display: none;" class="absolute right-0 mt-1 w-40 bg-white rounded-md shadow-lg py-1 border border-gray-100 z-50">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-1.5 text-xs text-red-600 hover:bg-red-50 transition font-medium">Sign out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Sidebar Backdrop -->
    <div x-show="sidebarOpen" style="display: none;" class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 md:hidden" @click="sidebarOpen = false"></div>

    <div class="flex flex-1 mx-auto w-full max-w-7xl px-4 md:px-6 py-6 gap-6 relative">
        
        <!-- Sidebar (Ultra Compact) -->
        <aside class="fixed inset-y-0 left-0 z-50 w-64 transform transition-transform duration-300 ease-in-out md:static md:w-48 md:translate-x-0 md:flex-shrink-0"
               :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
            
            <div class="h-full bg-white md:rounded-lg shadow-xl md:shadow-sm border-r md:border border-gray-200 p-3 md:p-2.5 md:sticky md:top-16 overflow-y-auto">
                
                <!-- Close Button on Mobile Sidebar -->
                <div class="flex justify-between items-center md:hidden mb-4 px-2">
                    <span class="font-bold text-gray-700">Menu</span>
                    <button @click="sidebarOpen = false" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="px-3 pb-2 mb-2 border-b border-gray-100 hidden md:block">
                    <h3 class="text-[10px] uppercase font-bold text-gray-400 tracking-wider">Admin Menu</h3>
                </div>

                <nav class="space-y-1 md:space-y-0.5 text-sm md:text-xs font-medium">
                    
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center gap-2 px-3 py-2 md:py-1.5 rounded-md transition {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}" 
                       wire:navigate>
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-3.5 md:h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <rect x="3" y="3" width="7" height="9"></rect>
                           <rect x="14" y="3" width="7" height="5"></rect>
                           <rect x="14" y="12" width="7" height="9"></rect>
                           <rect x="3" y="16" width="7" height="5"></rect>
                       </svg>
                       Dashboard
                    </a>

                    <a href="{{ route('users.index') }}" 
                       class="flex items-center gap-2 px-3 py-2 md:py-1.5 rounded-md transition {{ request()->routeIs('users.*') ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}" 
                       wire:navigate>
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-3.5 md:h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                           <circle cx="9" cy="7" r="4"></circle>
                           <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                           <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                       </svg>
                       User Manager
                    </a>

                    <a href="{{ route('services.index') }}" 
                       class="flex items-center gap-2 px-3 py-2 md:py-1.5 rounded-md transition text-gray-600 hover:bg-gray-50 hover:text-blue-600" 
                       wire:navigate>
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-3.5 md:h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                           <polyline points="2 17 12 22 22 17"></polyline>
                           <polyline points="2 12 17 22 12"></polyline>
                       </svg>
                       Layanan Publik
                    </a>

                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 w-full bg-white rounded-lg shadow-sm border border-gray-200 p-4 md:p-6 overflow-x-hidden min-w-0">
            @yield('admin-content')
        </main>

    </div>

    @include('partials.alerts')
</body>
</html>
