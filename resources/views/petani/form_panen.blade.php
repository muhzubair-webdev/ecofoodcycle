@extends('layouts.app')

@section('title', 'Input Hasil Panen')

@section('content')
<div class="max-w-xl mx-auto">
    <!-- Header -->
    <div class="mb-8 flex items-center gap-4">
        <a href="/petani/dashboard" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Input Hasil Panen</h1>
            <p class="text-slate-500 text-sm">Catat sayur atau buah yang berhasil dipanen hari ini.</p>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden relative">
        <!-- Decorative Header -->
        <div class="h-2 bg-gradient-to-r from-orange-400 to-red-500 w-full absolute top-0 left-0"></div>
        
        <form onsubmit="alert('Data hasil panen berhasil disimpan (dummy)!'); window.location.href='/petani/dashboard'; return false;" class="p-6 md:p-8 space-y-6 mt-2">
            @csrf
            
            <!-- Nama Sayur -->
            <div>
                <label for="nama_sayur" class="block text-sm font-semibold text-slate-700 mb-2">Nama Sayur / Buah</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400">
                        <i class="ph ph-leaf text-lg"></i>
                    </div>
                    <input type="text" id="nama_sayur" name="nama_sayur" placeholder="Contoh: Bayam Merah, Kangkung..." 
                           class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 bg-slate-50 text-slate-800 transition-colors">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Jumlah (Kg) -->
                <div>
                    <label for="jumlah_kg" class="block text-sm font-semibold text-slate-700 mb-2">Berat Panen</label>
                    <div class="relative">
                        <input type="number" id="jumlah_kg" name="jumlah_kg" step="0.1" min="0.1" placeholder="0.0" 
                               class="w-full pl-4 pr-10 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 bg-slate-50 text-slate-800 transition-colors">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400 font-medium text-sm">
                            Kg
                        </div>
                    </div>
                </div>

                <!-- Harga per Kg -->
                <div>
                    <label for="harga_per_kg" class="block text-sm font-semibold text-slate-700 mb-2">Harga Jual / Kg</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400 font-medium text-sm">
                            Rp
                        </div>
                        <input type="number" id="harga_per_kg" name="harga_per_kg" min="0" placeholder="0" 
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 bg-slate-50 text-slate-800 transition-colors">
                    </div>
                </div>
            </div>

            <!-- Notes -->
            <div class="bg-orange-50 rounded-xl p-4 flex gap-3 text-sm text-orange-800 border border-orange-100">
                <i class="ph-fill ph-info text-orange-500 text-xl flex-shrink-0"></i>
                <p>Data panen ini akan tersedia di pasar aplikasi untuk dapat ditukarkan dengan poin oleh <strong>Warga</strong>.</p>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-orange-500/30 transform transition-all active:scale-95 flex items-center justify-center gap-2">
                    <i class="ph ph-floppy-disk text-xl"></i>
                    Simpan Data Panen
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
