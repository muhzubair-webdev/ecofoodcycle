<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecofoodcycle Admin - @yield('title', 'Dashboard')</title>

    <!-- Vite & Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">

    <!-- Sidebar -->
    <aside class="bg-slate-900 text-slate-300 w-64 flex-shrink-0 flex flex-col transition-all duration-300"
           :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}">
        
        <!-- Logo -->
        <div class="h-16 flex items-center justify-center border-b border-slate-800">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold shadow-md shadow-brand-500/30">
                    <i class="ph ph-leaf text-xl"></i>
                </div>
                <span class="font-bold text-xl tracking-tight text-white whitespace-nowrap overflow-hidden transition-all duration-300"
                      x-show="sidebarOpen">Ecofood<span class="text-brand-500">cycle</span></span>
            </div>
        </div>

        <!-- Nav Links -->
        <nav class="flex-1 py-6 px-3 space-y-2 overflow-y-auto">
            <a href="/admin/dashboard" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-brand-600 text-white hover:bg-brand-500 transition-colors group">
                <i class="ph ph-squares-four text-xl flex-shrink-0 group-hover:scale-110 transition-transform"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Dashboard</span>
            </a>
            
            <a href="/admin/pengguna" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition-colors group">
                <i class="ph ph-users text-xl flex-shrink-0 group-hover:scale-110 transition-transform"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Data Pengguna</span>
            </a>

            <a href="/admin/pengajuan-sampah" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition-colors group">
                <i class="ph ph-trash text-xl flex-shrink-0 group-hover:scale-110 transition-transform"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Pengajuan Sampah</span>
            </a>

            <a href="/admin/stok-pupuk" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition-colors group">
                <i class="ph ph-plant text-xl flex-shrink-0 group-hover:scale-110 transition-transform"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Stok Pupuk</span>
            </a>

            <a href="/admin/hasil-panen" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition-colors group">
                <i class="ph ph-basket text-xl flex-shrink-0 group-hover:scale-110 transition-transform"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Hasil Panen</span>
            </a>
        </nav>
        
        <!-- Bottom Logout -->
        <div class="p-4 border-t border-slate-800">
            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-red-400 hover:bg-slate-800 hover:text-red-300 transition-colors">
                <i class="ph ph-sign-out text-xl flex-shrink-0"></i>
                <span class="font-medium whitespace-nowrap overflow-hidden" x-show="sidebarOpen">Keluar</span>
            </a>
        </div>
    </aside>

    <!-- Main Wrapper -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 lg:px-8">
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-lg text-slate-500 hover:bg-slate-100 transition-colors">
                <i class="ph ph-list text-2xl"></i>
            </button>
            
            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-slate-800">Admin Utama</p>
                    <p class="text-xs text-slate-500">Administrator</p>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin&background=020617&color=fff" alt="Admin" class="w-10 h-10 rounded-full border-2 border-slate-200">
            </div>
        </header>

        <!-- Content -->
        <main class="flex-1 overflow-y-auto p-4 lg:p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
