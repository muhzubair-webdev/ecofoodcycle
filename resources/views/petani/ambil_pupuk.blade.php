@extends('layouts.app')

@section('title', 'Ambil Pupuk')

@section('content')
<div class="max-w-xl mx-auto space-y-6">
    <div class="mb-8 flex items-center gap-4">
        <a href="/petani/dashboard" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-500 hover:text-brand-600 transition-colors">
            <i class="ph ph-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Ambil Pupuk Kompos</h1>
            <p class="text-slate-500 text-sm">Ambil pupuk kompos dari fasilitas pengolahan.</p>
        </div>
    </div>
    
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 text-center">
        <i class="ph ph-hand-coins text-6xl text-slate-300 mb-4 inline-block"></i>
        <h2 class="text-xl font-bold text-slate-800 mb-2">Formulir Pengambilan</h2>
        <p class="text-slate-500 mb-4">Fitur ini masih dalam tahap simulasi data dummy.</p>
        <button onclick="alert('Pupuk berhasil diambil (dummy)!'); window.location.href='/petani/dashboard';" class="bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 px-6 rounded-xl shadow-lg transition-colors">
            Simulasi Ambil Pupuk
        </button>
    </div>
</div>
@endsection
