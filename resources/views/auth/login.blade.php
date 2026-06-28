<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Ecofoodcycle</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center relative overflow-hidden">
    
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-brand-200/50 mix-blend-multiply blur-3xl"></div>
        <div class="absolute top-[60%] -right-[10%] w-[40%] h-[40%] rounded-full bg-teal-200/50 mix-blend-multiply blur-3xl"></div>
    </div>

    <div class="w-full max-w-md px-4 relative z-10">
        
        <!-- Logo -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-2">
                <div class="w-12 h-12 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold shadow-lg shadow-brand-500/30">
                    <i class="ph-fill ph-leaf text-3xl"></i>
                </div>
                <span class="font-bold text-3xl tracking-tight text-slate-900">Ecofood<span class="text-brand-500">cycle</span></span>
            </a>
            <p class="text-slate-500 mt-2">Selamat datang kembali! Silakan masuk ke akun Anda.</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl shadow-slate-200/50 border border-white p-8">
            
            <form id="loginForm" class="space-y-6">
                
                <!-- Email Field (Dummy) -->
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400">
                            <i class="ph ph-envelope-simple text-lg"></i>
                        </div>
                        <input type="email" value="demo@ecofoodcycle.id" class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-white text-slate-800 transition-colors" required>
                    </div>
                </div>

                <!-- Password Field (Dummy) -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-semibold text-slate-700">Kata Sandi</label>
                        <a href="#" class="text-xs font-medium text-brand-600 hover:text-brand-700">Lupa sandi?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400">
                            <i class="ph ph-lock-key text-lg"></i>
                        </div>
                        <input type="password" value="password123" class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-white text-slate-800 transition-colors" required>
                    </div>
                </div>

                <!-- Role Selection (For Mock Routing) -->
                <div class="bg-brand-50 border border-brand-100 rounded-xl p-4 mt-6 relative overflow-hidden">
                    <div class="absolute -right-4 -top-4 text-brand-100">
                        <i class="ph-fill ph-magic-wand text-6xl"></i>
                    </div>
                    <label class="block text-sm font-bold text-brand-800 mb-2 relative z-10">
                        <i class="ph ph-info mr-1"></i> Pilih Akses (Simulasi Login)
                    </label>
                    <select id="roleSelect" class="w-full px-4 py-3 rounded-xl border border-brand-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 bg-white text-brand-800 font-medium relative z-10 shadow-sm cursor-pointer" required>
                        <option value="warga">Warga (Masyarakat)</option>
                        <option value="petugas">Petugas (Pengelola Kompos)</option>
                        <option value="petani">Petani (Lokal)</option>
                        <option value="admin">Admin (Administrator)</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-brand-500/30 transform transition-all active:scale-95 flex items-center justify-center gap-2 mt-4">
                    Masuk <i class="ph ph-sign-in text-xl"></i>
                </button>
                
            </form>

            <div class="mt-8 text-center text-sm text-slate-500">
                Belum punya akun? <a href="#" class="font-bold text-brand-600 hover:text-brand-700">Daftar sekarang</a>
            </div>
        </div>
    </div>

    <!-- Login Logic Script -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get selected role
            const role = document.getElementById('roleSelect').value;
            
            // Simple visual feedback before redirect
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="ph ph-spinner animate-spin text-xl"></i> Memproses...';
            btn.classList.add('opacity-80', 'cursor-not-allowed');
            
            // Route based on role
            setTimeout(() => {
                let targetUrl = '';
                
                switch(role) {
                    case 'warga':
                        targetUrl = '/warga/dashboard';
                        break;
                    case 'petugas':
                        targetUrl = '/petugas/dashboard';
                        break;
                    case 'petani':
                        targetUrl = '/petani/dashboard';
                        break;
                    case 'admin':
                        targetUrl = '/admin/dashboard';
                        break;
                    default:
                        targetUrl = '/warga/dashboard';
                }
                
                window.location.href = targetUrl;
            }, 800); // 800ms delay for realism
        });
    </script>
</body>
</html>
