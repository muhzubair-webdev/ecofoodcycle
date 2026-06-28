@extends('layouts.app')

@section('title', 'Riwayat Setoran')

@section('content')
<div class="max-w-xl mx-auto space-y-6">
    <div class="mb-8 flex items-center gap-4">
        <a href="/warga/dashboard" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Riwayat Setoran</h1>
            <p class="text-slate-500 text-sm">Semua histori setoran sampah organik Anda.</p>
        </div>
    </div>
    
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 text-center">
        <i class="ph ph-clock text-6xl text-slate-300 mb-4 inline-block"></i>
        <h2 class="text-xl font-bold text-slate-800 mb-2">Tidak ada data lebih lanjut</h2>
        <p class="text-slate-500">Ini adalah data dummy riwayat Anda.</p>
    </div>
</div>
@endsection
