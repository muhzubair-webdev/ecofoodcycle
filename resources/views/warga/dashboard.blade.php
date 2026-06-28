@extends('layouts.app')

@section('title', 'Dashboard Warga')

@section('content')
<div class="space-y-6">
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-brand-600 to-teal-500 rounded-3xl p-6 md:p-8 text-white shadow-xl shadow-brand-500/20 relative overflow-hidden">
        <div class="absolute -right-6 -top-6 text-white/10">
            <i class="ph-fill ph-leaf text-9xl"></i>
        </div>
        
        <div class="relative z-10">
            <h1 class="text-2xl md:text-3xl font-bold mb-2">Halo, John! 👋</h1>
            <p class="text-brand-50 mb-6 max-w-md">Terima kasih telah berkontribusi dalam menjaga lingkungan kita tetap bersih dan hijau.</p>
            
            <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md rounded-2xl p-4 inline-flex border border-white/20">
                <div class="w-12 h-12 bg-white text-brand-600 rounded-xl flex items-center justify-center font-bold text-xl shadow-inner">
                    <i class="ph-fill ph-coin-vertical"></i>
                </div>
                <div>
                    <p class="text-sm text-brand-50 font-medium">Total Poin Kamu</p>
                    <p class="text-2xl font-bold">1,250 <span class="text-sm font-normal">Pts</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Action -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="/warga/form-pengajuan" class="group bg-white rounded-3xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:border-brand-200 transition-all flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl bg-brand-50 text-brand-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="ph ph-trash text-3xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-lg text-slate-800">Setor Sampah</h3>
                <p class="text-sm text-slate-500">Kumpulkan sampah makananmu</p>
            </div>
            <i class="ph ph-caret-right text-slate-300 ml-auto group-hover:text-brand-500 group-hover:translate-x-1 transition-all"></i>
        </a>
        
        <a href="/warga/tukar-poin" class="group bg-white rounded-3xl p-6 border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-200 transition-all flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="ph ph-gift text-3xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-lg text-slate-800">Tukar Poin</h3>
                <p class="text-sm text-slate-500">Dapatkan sayur segar dari petani</p>
            </div>
            <i class="ph ph-caret-right text-slate-300 ml-auto group-hover:text-blue-500 group-hover:translate-x-1 transition-all"></i>
        </a>
    </div>

    <!-- History Section -->
    <div>
        <div class="flex justify-between items-end mb-4">
            <h2 class="text-xl font-bold text-slate-800">Riwayat Setoran</h2>
            <a href="/warga/riwayat" class="text-sm font-medium text-brand-600 hover:text-brand-700">Lihat Semua</a>
        </div>
        
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="divide-y divide-slate-100">
                <!-- Item 1 -->
                <div class="p-4 sm:p-6 hover:bg-slate-50 transition-colors flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-clock text-xl"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-bold text-slate-800 truncate">Sisa Sayuran & Buah</h4>
                        <p class="text-sm text-slate-500">Hari ini, 09:00 WIB • 2.5 Kg</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                            Menunggu Penjemputan
                        </span>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="p-4 sm:p-6 hover:bg-slate-50 transition-colors flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-brand-50 text-brand-500 flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-check-circle text-xl"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-bold text-slate-800 truncate">Ampas Kopi & Teh</h4>
                        <p class="text-sm text-slate-500">25 Jun 2026 • 1.2 Kg</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-brand-100 text-brand-800">
                            Selesai (+12 Pts)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
