@extends('layouts.admin')

@section('title', 'Hasil Panen')

@section('content')
<div class="space-y-6">
    <div class="flex items-center gap-4">
        <a href="/admin/dashboard" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors md:hidden">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Data Hasil Panen</h1>
            <p class="text-slate-500 text-sm">Riwayat panen sayur dan buah oleh Petani.</p>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 text-center">
        <i class="ph ph-basket text-6xl text-slate-300 mb-4 inline-block"></i>
        <h2 class="text-xl font-bold text-slate-800 mb-2">Tabel Data Kosong</h2>
        <p class="text-slate-500">Halaman ini adalah dummy. Nantinya akan menampilkan tabel riwayat hasil panen.</p>
    </div>
</div>
@endsection
