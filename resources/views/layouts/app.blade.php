<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecofoodcycle - @yield('title', 'Dashboard')</title>

    <!-- Vite & Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AlpineJS for interactivity (Dropdowns, modals) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Phosphor Icons for beautiful modern icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased pb-20 md:pb-0">

    <!-- Top Navbar -->
    <nav class="sticky top-0 z-40 w-full backdrop-blur-lg bg-white/80 border-b border-slate-200 transition-all">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold shadow-md shadow-brand-500/30">
                        <i class="ph ph-leaf text-xl"></i>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">Ecofood<span class="text-brand-500">cycle</span></span>
                </div>

                <!-- User Dropdown & Notifications -->
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-slate-500 hover:text-brand-500 transition-colors rounded-full hover:bg-slate-100">
                        <i class="ph ph-bell text-2xl"></i>
                        <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></span>
                    </button>
                    
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-full border border-slate-200 hover:border-brand-500 transition-all bg-white shadow-sm">
                            <img src="https://ui-avatars.com/api/?name=User&background=10b981&color=fff" alt="User" class="w-8 h-8 rounded-full">
                        </button>
                        
                        <div x-show="open" @click.away="open = false" x-transition.opacity
                            class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-100 py-1 z-50 hidden"
                            :class="{'hidden': !open}">
                            <div class="px-4 py-2 border-b border-slate-100">
                                <p class="text-sm font-semibold text-slate-800">Nama Pengguna</p>
                                <p class="text-xs text-slate-500">Role Pengguna</p>
                            </div>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brand-500">Pengaturan Profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full min-h-[calc(100vh-4rem)]">
        @yield('content')
    </main>

    <!-- Bottom Navigation Bar (Mobile Only) -->
    <!-- The active state would normally be controlled by route name -->
    <div class="md:hidden fixed bottom-0 w-full bg-white border-t border-slate-200 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] z-50 pb-safe">
        <div class="flex justify-around items-center h-16">
            <a href="#" class="flex flex-col items-center justify-center w-full h-full text-brand-600">
                <i class="ph-fill ph-house text-2xl mb-1"></i>
                <span class="text-[10px] font-medium">Beranda</span>
            </a>
            
            <a href="#" class="flex flex-col items-center justify-center w-full h-full text-slate-400 hover:text-brand-500 transition-colors relative">
                <div class="absolute -top-6 w-12 h-12 bg-brand-500 text-white rounded-full flex items-center justify-center shadow-lg shadow-brand-500/40 border-4 border-slate-50">
                    <i class="ph ph-plus text-xl"></i>
                </div>
                <span class="text-[10px] font-medium mt-6">Aksi</span>
            </a>
            
            <a href="#" class="flex flex-col items-center justify-center w-full h-full text-slate-400 hover:text-brand-500 transition-colors">
                <i class="ph ph-user text-2xl mb-1"></i>
                <span class="text-[10px] font-medium">Profil</span>
            </a>
        </div>
    </div>

</body>
</html>
