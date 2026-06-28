@extends('layouts.app')

@section('title', 'Dashboard Petani')

@section('content')
<div class="space-y-8">
    
    <!-- Fertilizer Availability Highlight -->
    <div class="bg-gradient-to-br from-emerald-600 to-brand-700 rounded-3xl p-6 md:p-8 text-white shadow-xl shadow-brand-500/20 relative overflow-hidden flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="absolute -right-10 -bottom-10 text-white/10">
            <i class="ph-fill ph-plant text-9xl"></i>
        </div>
        
        <div class="relative z-10">
            <h2 class="text-brand-100 font-medium mb-1">Ketersediaan Pupuk Kompos</h2>
            <div class="flex items-end gap-2 mb-2">
                <span class="text-5xl font-bold">125.5</span>
                <span class="text-xl font-medium mb-1">Kg</span>
            </div>
            <p class="text-sm text-brand-50 bg-white/20 inline-flex px-3 py-1 rounded-full backdrop-blur-md">
                <i class="ph ph-clock mr-1"></i> Diperbarui 2 jam yang lalu
            </p>
        </div>
        
        <div class="relative z-10 flex-shrink-0">
            <a href="/petani/ambil-pupuk" class="w-full md:w-auto bg-white text-brand-700 hover:bg-brand-50 font-bold py-4 px-6 rounded-2xl shadow-lg transition-colors flex items-center justify-center gap-2">
                <i class="ph ph-hand-coins text-xl"></i> Ambil Pupuk
            </a>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-sm">
            <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center mb-3">
                <i class="ph-fill ph-carrot text-2xl"></i>
            </div>
            <p class="text-sm text-slate-500 font-medium mb-1">Total Panen</p>
            <p class="text-2xl font-bold text-slate-800">42 <span class="text-sm font-normal text-slate-500">Kg</span></p>
        </div>
        <div class="bg-white rounded-3xl p-5 border border-slate-100 shadow-sm">
            <div class="w-12 h-12 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-3">
                <i class="ph-fill ph-money text-2xl"></i>
            </div>
            <p class="text-sm text-slate-500 font-medium mb-1">Estimasi Nilai</p>
            <p class="text-2xl font-bold text-slate-800">Rp 450<span class="text-sm font-normal text-slate-500">rb</span></p>
        </div>
    </div>

    <!-- Harvest List Section -->
    <div>
        <div class="flex justify-between items-end mb-4">
            <h2 class="text-xl font-bold text-slate-800">Daftar Hasil Panen</h2>
            <a href="/petani/form-panen" class="bg-brand-100 text-brand-700 hover:bg-brand-200 font-medium text-sm px-4 py-2 rounded-lg transition-colors flex items-center gap-1">
                <i class="ph ph-plus-circle"></i> Input Panen
            </a>
        </div>
        
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="p-4 font-semibold text-slate-600 text-sm">Sayur/Buah</th>
                            <th class="p-4 font-semibold text-slate-600 text-sm text-right">Jumlah</th>
                            <th class="p-4 font-semibold text-slate-600 text-sm text-right">Harga/Kg</th>
                            <th class="p-4 font-semibold text-slate-600 text-sm text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-800">Bayam Merah</div>
                                <div class="text-xs text-slate-500">24 Jun 2026</div>
                            </td>
                            <td class="p-4 text-right font-medium text-slate-700">12 Kg</td>
                            <td class="p-4 text-right text-slate-500">Rp 8.000</td>
                            <td class="p-4 text-right font-bold text-brand-600">Rp 96.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-800">Kangkung Hidroponik</div>
                                <div class="text-xs text-slate-500">20 Jun 2026</div>
                            </td>
                            <td class="p-4 text-right font-medium text-slate-700">8.5 Kg</td>
                            <td class="p-4 text-right text-slate-500">Rp 10.000</td>
                            <td class="p-4 text-right font-bold text-brand-600">Rp 85.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4">
                                <div class="font-bold text-slate-800">Tomat Ceri</div>
                                <div class="text-xs text-slate-500">15 Jun 2026</div>
                            </td>
                            <td class="p-4 text-right font-medium text-slate-700">5 Kg</td>
                            <td class="p-4 text-right text-slate-500">Rp 15.000</td>
                            <td class="p-4 text-right font-bold text-brand-600">Rp 75.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-slate-100 text-center">
                <button class="text-sm font-medium text-slate-500 hover:text-brand-600 transition-colors">Muat Lebih Banyak</button>
            </div>
        </div>
    </div>
</div>
@endsection
