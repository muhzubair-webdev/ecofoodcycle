<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecofoodcycle - Ekonomi Sirkular Sampah Makanan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans selection:bg-brand-500 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200 transition-all">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold shadow-lg shadow-brand-500/30">
                        <i class="ph-fill ph-leaf text-2xl"></i>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-slate-900">Ecofood<span class="text-brand-500">cycle</span></span>
                </div>
                
                <div class="hidden md:flex items-center gap-8">
                    <a href="#tentang" class="text-sm font-medium text-slate-600 hover:text-brand-500 transition-colors">Tentang Kami</a>
                    <a href="#cara-kerja" class="text-sm font-medium text-slate-600 hover:text-brand-500 transition-colors">Cara Kerja</a>
                    <a href="#dampak" class="text-sm font-medium text-slate-600 hover:text-brand-500 transition-colors">Dampak</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="/login" class="bg-brand-600 hover:bg-brand-500 text-white font-bold px-6 py-2.5 rounded-full shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-0.5">
                        Masuk / Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Decorative blobs -->
            <div class="absolute top-20 right-10 w-72 h-72 bg-brand-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-40 left-10 w-72 h-72 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-40 w-72 h-72 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Ubah Sampah Makanan <br class="hidden md:block" /> Menjadi <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500">Berkah</span>
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-slate-600 mx-auto mb-10 leading-relaxed">
                Platform ekonomi sirkular yang menghubungkan warga, petugas pengelola, dan petani untuk mengubah sampah organik menjadi pupuk dan pangan segar.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/login" class="bg-brand-600 hover:bg-brand-500 text-white font-bold text-lg px-8 py-4 rounded-full shadow-xl shadow-brand-500/30 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2">
                    Mulai Sekarang <i class="ph-bold ph-arrow-right"></i>
                </a>
                <a href="#cara-kerja" class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 font-bold text-lg px-8 py-4 rounded-full shadow-sm transition-all flex items-center justify-center gap-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section id="cara-kerja" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-2">Ekonomi Sirkular</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900">Bagaimana Sistem Ini Bekerja?</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Connecting Line for Desktop -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-100 -z-10 transform -translate-y-1/2"></div>
                
                <!-- Step 1 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/40 relative z-10 text-center transform transition-transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-inner">
                        <i class="ph-fill ph-trash"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">1. Warga Menyetor</h4>
                    <p class="text-slate-500 leading-relaxed">
                        Kumpulkan sisa makanan organik di rumah Anda, lalu gunakan aplikasi untuk memanggil petugas penjemputan. Dapatkan poin untuk setiap kilogram sampah.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/40 relative z-10 text-center transform transition-transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-inner">
                        <i class="ph-fill ph-recycle"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">2. Petugas Mengolah</h4>
                    <p class="text-slate-500 leading-relaxed">
                        Sampah organik dibawa ke fasilitas pengolahan untuk dijadikan pupuk kompos berkualitas tinggi yang kaya akan nutrisi untuk tanaman.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/40 relative z-10 text-center transform transition-transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-inner">
                        <i class="ph-fill ph-plant"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">3. Petani Memanen</h4>
                    <p class="text-slate-500 leading-relaxed">
                        Petani lokal menggunakan kompos untuk menyuburkan lahan mereka. Hasil panen kemudian dapat ditukarkan dengan poin oleh warga.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 text-center border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-center gap-2 mb-6 opacity-50">
                <i class="ph-fill ph-leaf text-2xl text-white"></i>
                <span class="font-bold text-2xl tracking-tight text-white">Ecofoodcycle</span>
            </div>
            <p>&copy; 2026 Ecofoodcycle. Menjaga bumi, satu langkah pada satu waktu.</p>
        </div>
    </footer>

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</body>
</html>
