@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Ringkasan Sistem</h1>
            <p class="text-slate-500 text-sm">Statistik keseluruhan platform Ecofoodcycle.</p>
        </div>
        
        <!-- Date Range Filter Mock -->
        <div class="bg-white border border-slate-200 rounded-lg px-4 py-2 flex items-center gap-2 text-sm text-slate-600 shadow-sm cursor-pointer hover:bg-slate-50">
            <i class="ph ph-calendar"></i>
            <span>Bulan Ini (Jun 2026)</span>
            <i class="ph ph-caret-down ml-2 text-slate-400"></i>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Stat Card 1 -->
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
            <div class="absolute -right-4 -bottom-4 text-brand-50 group-hover:scale-110 transition-transform">
                <i class="ph-fill ph-users text-8xl"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-brand-50 text-brand-600 rounded-xl flex items-center justify-center">
                        <i class="ph ph-users text-2xl"></i>
                    </div>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-brand-600 bg-brand-50 px-2 py-1 rounded-full">
                        <i class="ph-bold ph-trend-up"></i> +12%
                    </span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium mb-1">Total Pengguna</h3>
                <p class="text-3xl font-bold text-slate-800">1,248</p>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
            <div class="absolute -right-4 -bottom-4 text-amber-50 group-hover:scale-110 transition-transform">
                <i class="ph-fill ph-trash text-8xl"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center">
                        <i class="ph ph-trash text-2xl"></i>
                    </div>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-brand-600 bg-brand-50 px-2 py-1 rounded-full">
                        <i class="ph-bold ph-trend-up"></i> +5.4%
                    </span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium mb-1">Sampah Terkumpul</h3>
                <div class="flex items-baseline gap-1">
                    <p class="text-3xl font-bold text-slate-800">4,520</p>
                    <span class="text-slate-500 font-medium">Kg</span>
                </div>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
            <div class="absolute -right-4 -bottom-4 text-blue-50 group-hover:scale-110 transition-transform">
                <i class="ph-fill ph-plant text-8xl"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                        <i class="ph ph-plant text-2xl"></i>
                    </div>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-brand-600 bg-brand-50 px-2 py-1 rounded-full">
                        <i class="ph-bold ph-trend-up"></i> +8.1%
                    </span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium mb-1">Pupuk Diproduksi</h3>
                <div class="flex items-baseline gap-1">
                    <p class="text-3xl font-bold text-slate-800">2,150</p>
                    <span class="text-slate-500 font-medium">Kg</span>
                </div>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
            <div class="absolute -right-4 -bottom-4 text-orange-50 group-hover:scale-110 transition-transform">
                <i class="ph-fill ph-basket text-8xl"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="flex justify-between items-start mb-4">
                    <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center">
                        <i class="ph ph-basket text-2xl"></i>
                    </div>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-brand-600 bg-brand-50 px-2 py-1 rounded-full">
                        <i class="ph-bold ph-trend-up"></i> +15.2%
                    </span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium mb-1">Hasil Panen</h3>
                <div class="flex items-baseline gap-1">
                    <p class="text-3xl font-bold text-slate-800">845</p>
                    <span class="text-slate-500 font-medium">Kg</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Charts / Tables Section Mock -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Chart Placeholder -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col h-96">
            <h3 class="text-lg font-bold text-slate-800 mb-4">Tren Pengumpulan Sampah</h3>
            <div class="flex-1 bg-slate-50 border border-slate-100 rounded-xl flex flex-col items-center justify-center text-slate-400">
                <i class="ph ph-chart-line-up text-4xl mb-2 text-slate-300"></i>
                <p>Area Grafik (Chart.js / ApexCharts)</p>
            </div>
        </div>
        
        <!-- Recent Activities -->
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col h-96">
            <h3 class="text-lg font-bold text-slate-800 mb-4">Aktivitas Terbaru</h3>
            <div class="flex-1 overflow-y-auto pr-2 space-y-4">
                
                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-amber-500 flex-shrink-0"></div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Budi</span> menyetor 2.5kg sampah organik.</p>
                        <p class="text-xs text-slate-500">10 Menit lalu</p>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-blue-500 flex-shrink-0"></div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Petugas A</span> memproduksi 50kg pupuk kompos.</p>
                        <p class="text-xs text-slate-500">1 Jam lalu</p>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-orange-500 flex-shrink-0"></div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Petani Yanto</span> menginput 15kg Kangkung.</p>
                        <p class="text-xs text-slate-500">3 Jam lalu</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-brand-500 flex-shrink-0"></div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Warga Baru</span> mendaftar ke sistem.</p>
                        <p class="text-xs text-slate-500">5 Jam lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
