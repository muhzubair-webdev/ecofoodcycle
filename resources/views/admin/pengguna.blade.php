@extends('layouts.admin')

@section('title', 'Manajemen Pengguna')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Manajemen Pengguna</h1>
            <p class="text-slate-500 text-sm">Kelola akses akun warga, petugas, dan petani.</p>
        </div>
        
        <a href="/admin/tambah-pengguna" class="bg-brand-600 hover:bg-brand-500 text-white px-4 py-2 rounded-lg font-medium shadow-sm flex items-center gap-2 transition-colors">
            <i class="ph ph-plus"></i> Tambah Pengguna
        </a>
    </div>

    <!-- Filters & Search -->
    <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex flex-col md:flex-row gap-4 justify-between">
        <div class="relative w-full md:w-96">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                <i class="ph ph-magnifying-glass"></i>
            </div>
            <input type="text" class="bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-lg focus:ring-brand-500 focus:border-brand-500 block w-full pl-10 p-2.5" placeholder="Cari nama atau email...">
        </div>

        <div class="flex gap-2">
            <select class="bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-lg focus:ring-brand-500 focus:border-brand-500 block p-2.5">
                <option value="">Semua Role</option>
                <option value="warga">Warga</option>
                <option value="petugas">Petugas</option>
                <option value="petani">Petani</option>
                <option value="admin">Admin</option>
            </select>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm">
                        <th class="px-6 py-4 font-semibold">Pengguna</th>
                        <th class="px-6 py-4 font-semibold">Kontak</th>
                        <th class="px-6 py-4 font-semibold">Role</th>
                        <th class="px-6 py-4 font-semibold">Bergabung</th>
                        <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=f8fafc" alt="Avatar" class="w-10 h-10 rounded-full border border-slate-200">
                                <div>
                                    <p class="font-bold text-slate-800">John Doe</p>
                                    <p class="text-slate-500 text-xs">john@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-600">0812-3456-7890</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 border border-emerald-200">
                                Warga
                            </span>
                        </td>
                        <td class="px-6 py-4 text-slate-500">12 Jan 2026</td>
                        <td class="px-6 py-4 text-right">
                            <button onclick="alert('Buka modal edit pengguna (dummy)')" class="text-slate-400 hover:text-brand-600 p-1 transition-colors"><i class="ph ph-pencil-simple text-lg"></i></button>
                            <button onclick="if(confirm('Yakin ingin menghapus pengguna ini? (dummy)')) alert('Berhasil dihapus!')" class="text-slate-400 hover:text-red-600 p-1 transition-colors"><i class="ph ph-trash text-lg"></i></button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=f8fafc" alt="Avatar" class="w-10 h-10 rounded-full border border-slate-200">
                                <div>
                                    <p class="font-bold text-slate-800">Sarah Smith</p>
                                    <p class="text-slate-500 text-xs">sarah.s@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-600">0812-9876-5432</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                                Petugas
                            </span>
                        </td>
                        <td class="px-6 py-4 text-slate-500">15 Jan 2026</td>
                        <td class="px-6 py-4 text-right">
                            <button onclick="alert('Buka modal edit pengguna (dummy)')" class="text-slate-400 hover:text-brand-600 p-1 transition-colors"><i class="ph ph-pencil-simple text-lg"></i></button>
                            <button onclick="if(confirm('Yakin ingin menghapus pengguna ini? (dummy)')) alert('Berhasil dihapus!')" class="text-slate-400 hover:text-red-600 p-1 transition-colors"><i class="ph ph-trash text-lg"></i></button>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=f8fafc" alt="Avatar" class="w-10 h-10 rounded-full border border-slate-200">
                                <div>
                                    <p class="font-bold text-slate-800">Budi Santoso</p>
                                    <p class="text-slate-500 text-xs">budi.tani@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-600">0813-1122-3344</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800 border border-orange-200">
                                Petani
                            </span>
                        </td>
                        <td class="px-6 py-4 text-slate-500">20 Jan 2026</td>
                        <td class="px-6 py-4 text-right">
                            <button onclick="alert('Buka modal edit pengguna (dummy)')" class="text-slate-400 hover:text-brand-600 p-1 transition-colors"><i class="ph ph-pencil-simple text-lg"></i></button>
                            <button onclick="if(confirm('Yakin ingin menghapus pengguna ini? (dummy)')) alert('Berhasil dihapus!')" class="text-slate-400 hover:text-red-600 p-1 transition-colors"><i class="ph ph-trash text-lg"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination Mock -->
        <div class="p-4 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
            <div>Menampilkan 1-3 dari 1,248 pengguna</div>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-slate-200 rounded-lg hover:bg-slate-50 disabled:opacity-50" disabled>Sebelumnya</button>
                <button class="px-3 py-1 bg-brand-600 text-white rounded-lg">1</button>
                <button class="px-3 py-1 border border-slate-200 rounded-lg hover:bg-slate-50">2</button>
                <button class="px-3 py-1 border border-slate-200 rounded-lg hover:bg-slate-50">3</button>
                <span class="px-2">...</span>
                <button class="px-3 py-1 border border-slate-200 rounded-lg hover:bg-slate-50">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
@endsection
