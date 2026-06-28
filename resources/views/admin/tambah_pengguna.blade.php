@extends('layouts.admin')

@section('title', 'Tambah Pengguna')

@section('content')
<div class="max-w-xl mx-auto space-y-6">
    <div class="mb-8 flex items-center gap-4">
        <a href="/admin/pengguna" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Tambah Pengguna Baru</h1>
            <p class="text-slate-500 text-sm">Buat akun untuk peran Warga, Petugas, atau Petani.</p>
        </div>
    </div>
    
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-6 md:p-8">
        <form onsubmit="alert('Pengguna berhasil ditambahkan (dummy)!'); window.location.href='/admin/pengguna'; return false;" class="space-y-6">
            
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-slate-50 text-slate-800" placeholder="Masukkan nama" required>
            </div>
            
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-slate-50 text-slate-800" placeholder="Masukkan email" required>
            </div>
            
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Role Akses</label>
                <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-slate-50 text-slate-800" required>
                    <option value="" disabled selected>Pilih Role...</option>
                    <option value="warga">Warga</option>
                    <option value="petugas">Petugas</option>
                    <option value="petani">Petani</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-4 px-6 rounded-xl shadow-lg transition-colors">
                Simpan Pengguna
            </button>
        </form>
    </div>
</div>
@endsection
