@extends('layouts.app')

@section('title', 'Antrean Jemput (Petugas)')

@section('content')
  <div class="space-y-6 max-w-3xl mx-auto">
    <!-- Header Summary -->
    <div class="flex items-center justify-between">
      <div>
        <h1 class="text-2xl font-bold text-slate-800">Antrean Jemput</h1>
        <p class="text-slate-500 text-sm">Ada 12 lokasi yang menunggu dijemput hari ini.</p>
      </div>
      <div
        class="bg-brand-50 text-brand-600 px-4 py-2 rounded-xl font-bold border border-brand-100 flex items-center gap-2 shadow-sm">
        <i class="ph-fill ph-map-pin"></i> Area: Kolaka
      </div>
    </div>

    <!-- Active Tasks Tab -->
    <div class="flex gap-2 p-1 bg-slate-100 rounded-xl">
      <button class="flex-1 py-2 text-sm font-bold bg-white text-brand-600 rounded-lg shadow-sm">Menunggu (8)</button>
      <button class="flex-1 py-2 text-sm font-medium text-slate-500 hover:text-slate-700">Di Jalan (4)</button>
    </div>

    <!-- Task List -->
    <div class="space-y-4">

      <!-- Task Card 1 -->
      <div
        class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:border-brand-300 transition-all">
        <!-- Priority Badge -->
        <div
          class="absolute top-0 right-0 bg-red-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">
          Prioritas
        </div>

        <div class="flex gap-4">
          <div
            class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-500 flex flex-col items-center justify-center flex-shrink-0">
            <span class="font-bold text-lg leading-tight">5.2</span>
            <span class="text-[10px] font-medium uppercase tracking-wider">Kg</span>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="font-bold text-slate-800 text-lg mb-1 truncate">Ibu Sarah (Sisa Sayur & Buah)</h3>
            <p class="text-sm text-slate-500 flex items-start gap-1 mb-2">
              <i class="ph-fill ph-map-pin text-brand-500 mt-0.5"></i>
              Jl. Pemuda No. 12, Tahoa, Kolaka
            </p>
            <div class="flex gap-2">
              <span
                class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                <i class="ph ph-clock"></i> 10 Menit lalu
              </span>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="mt-4 pt-4 border-t border-slate-100 flex gap-2">
          <button onclick="alert('Membuka aplikasi peta untuk rute jemput (dummy).')"
            class="flex-1 bg-white border-2 border-brand-100 text-brand-600 hover:bg-brand-50 font-bold py-3 px-4 rounded-xl transition-colors flex items-center justify-center gap-2">
            <i class="ph ph-map-trifold text-lg"></i> Rute
          </button>
          <button onclick="alert('Status berhasil diupdate menjadi Di Jalan (dummy)!')"
            class="flex-1 bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 px-4 rounded-xl shadow-md shadow-brand-500/20 transition-all flex items-center justify-center gap-2">
            <i class="ph ph-truck text-lg"></i> Jemput
          </button>
        </div>
      </div>

      <!-- Task Card 2 -->
      <div
        class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm relative overflow-hidden group hover:border-brand-300 transition-all">
        <div class="flex gap-4">
          <div
            class="w-14 h-14 rounded-2xl bg-slate-50 text-slate-600 flex flex-col items-center justify-center flex-shrink-0">
            <span class="font-bold text-lg leading-tight">1.5</span>
            <span class="text-[10px] font-medium uppercase tracking-wider">Kg</span>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="font-bold text-slate-800 text-lg mb-1 truncate">Bpk. Budi (Ampas Kopi)</h3>
            <p class="text-sm text-slate-500 flex items-start gap-1 mb-2">
              <i class="ph-fill ph-map-pin text-brand-500 mt-0.5"></i>
              Jl. Khairil Anwar no. 4, Lamokato, Kolaka
            </p>
            <div class="flex gap-2">
              <span
                class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                <i class="ph ph-clock"></i> 45 Menit lalu
              </span>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="mt-4 pt-4 border-t border-slate-100 flex gap-2">
          <button onclick="alert('Membuka aplikasi peta untuk rute jemput (dummy).')"
            class="flex-1 bg-white border-2 border-brand-100 text-brand-600 hover:bg-brand-50 font-bold py-3 px-4 rounded-xl transition-colors flex items-center justify-center gap-2">
            <i class="ph ph-map-trifold text-lg"></i> Rute
          </button>
          <button onclick="alert('Status berhasil diupdate menjadi Di Jalan (dummy)!')"
            class="flex-1 bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 px-4 rounded-xl shadow-md shadow-brand-500/20 transition-all flex items-center justify-center gap-2">
            <i class="ph ph-truck text-lg"></i> Jemput
          </button>
        </div>
      </div>

    </div>

    <!-- Floating Action Button for updating logistic / stock -->
    <a href="/petugas/form-pupuk"
      class="fixed bottom-20 md:bottom-8 right-4 md:right-8 w-14 h-14 bg-blue-600 text-white rounded-2xl shadow-lg shadow-blue-500/40 flex items-center justify-center hover:scale-110 transition-transform z-40">
      <i class="ph ph-package text-2xl"></i>
    </a>
  </div>
@endsection
