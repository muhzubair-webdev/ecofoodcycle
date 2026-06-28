@extends('layouts.app')

@section('title', 'Input Stok Pupuk')

@section('content')
<div class="max-w-xl mx-auto">
    <!-- Header -->
    <div class="mb-8 flex items-center gap-4">
        <a href="/petugas/dashboard" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Update Stok Pupuk</h1>
            <p class="text-slate-500 text-sm">Catat hasil produksi pupuk kompos dari fasilitas pengolahan.</p>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden relative">
        <!-- Decorative Header -->
        <div class="h-2 bg-gradient-to-r from-blue-500 to-brand-500 w-full absolute top-0 left-0"></div>
        
        <form onsubmit="alert('Stok pupuk berhasil diupdate (dummy)!'); window.location.href='/petugas/dashboard'; return false;" class="p-6 md:p-8 space-y-6 mt-2">
            @csrf
            
            <!-- Jumlah (Kg) -->
            <div>
                <label for="jumlah_kg" class="block text-sm font-semibold text-slate-700 mb-2">Jumlah Pupuk Dihasilkan (Kg)</label>
                <div class="relative">
                    <input type="number" id="jumlah_kg" name="jumlah_kg" step="0.1" min="1" placeholder="Masukkan total berat..." 
                           class="w-full pl-4 pr-12 py-4 text-lg font-bold rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-slate-50 text-slate-800 transition-colors">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400 font-bold">
                        Kg
                    </div>
                </div>
            </div>

            <!-- Tanggal Produksi -->
            <div>
                <label for="tanggal_produksi" class="block text-sm font-semibold text-slate-700 mb-2">Tanggal Selesai Produksi</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400">
                        <i class="ph ph-calendar-blank text-lg"></i>
                    </div>
                    <input type="date" id="tanggal_produksi" name="tanggal_produksi" 
                           class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-slate-50 text-slate-800 transition-colors">
                </div>
            </div>

            <!-- Notes (Optional visually) -->
            <div class="bg-blue-50 rounded-xl p-4 flex gap-3 text-sm text-blue-800">
                <i class="ph-fill ph-info text-blue-500 text-xl flex-shrink-0"></i>
                <p>Data stok ini akan langsung terlihat oleh <strong>Petani</strong> di dashboard mereka untuk diambil.</p>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-blue-500/30 transform transition-all active:scale-95 flex items-center justify-center gap-2">
                    <i class="ph ph-check-circle text-xl"></i>
                    Simpan Stok Pupuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
