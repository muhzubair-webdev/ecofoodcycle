@extends('layouts.app')

@section('title', 'Setor Sampah Makanan')

@section('content')
<div class="max-w-xl mx-auto">
    <!-- Header -->
    <div class="mb-8 text-center">
        <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="ph ph-recycle text-3xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-slate-800 mb-2">Setor Sampah Makanan</h1>
        <p class="text-slate-500 text-sm">Isi formulir di bawah ini untuk memanggil petugas penjemputan sampah organik Anda.</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <form onsubmit="alert('Pengajuan jemput sampah berhasil dikirim (dummy)!'); window.location.href='/warga/dashboard'; return false;" class="p-6 md:p-8 space-y-6">
            @csrf
            
            <!-- Jenis Sampah -->
            <div>
                <label for="jenis_sampah" class="block text-sm font-semibold text-slate-700 mb-2">Jenis Sampah Organik</label>
                <div class="relative">
                    <select id="jenis_sampah" name="jenis_sampah" class="w-full pl-4 pr-10 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 appearance-none bg-slate-50 text-slate-800 transition-colors">
                        <option value="" disabled selected>Pilih jenis sampah...</option>
                        <option value="Sisa Sayur & Buah">Sisa Sayur & Buah</option>
                        <option value="Ampas Kopi & Teh">Ampas Kopi & Teh</option>
                        <option value="Sisa Makanan Matang">Sisa Makanan Matang</option>
                        <option value="Campuran">Campuran</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-400">
                        <i class="ph ph-caret-down"></i>
                    </div>
                </div>
            </div>

            <!-- Berat -->
            <div>
                <label for="berat_kg" class="block text-sm font-semibold text-slate-700 mb-2">Perkiraan Berat (Kg)</label>
                <div class="relative">
                    <input type="number" id="berat_kg" name="berat_kg" step="0.1" min="0.5" placeholder="Contoh: 2.5" 
                           class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-slate-50 text-slate-800 transition-colors">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400 font-medium">
                        Kg
                    </div>
                </div>
                <p class="text-xs text-slate-500 mt-2"><i class="ph ph-info mr-1"></i>Minimal penjemputan adalah 0.5 Kg.</p>
            </div>

            <!-- Titik Jemput -->
            <div>
                <label for="titik_jemput" class="block text-sm font-semibold text-slate-700 mb-2">Lokasi Penjemputan</label>
                <div class="relative">
                    <textarea id="titik_jemput" name="titik_jemput" rows="3" placeholder="Masukkan alamat lengkap atau detail lokasi..."
                              class="w-full p-4 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-slate-50 text-slate-800 transition-colors resize-none"></textarea>
                </div>
                <div class="mt-2 flex items-center gap-2">
                    <button type="button" class="text-sm text-brand-600 hover:text-brand-700 font-medium flex items-center gap-1 transition-colors">
                        <i class="ph ph-map-pin"></i> Gunakan Lokasi Saat Ini
                    </button>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-brand-500/30 transform transition-all active:scale-95 flex items-center justify-center gap-2">
                    <i class="ph ph-paper-plane-tilt text-xl"></i>
                    Kirim Permintaan Jemput
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
