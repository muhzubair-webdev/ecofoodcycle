ecofoodcycle/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php (Mengatur Login 4 Role)
│   │   │   ├── WargaController.php (Dashboard & Lapor Sampah)
│   │   │   ├── PetugasController.php (Dashboard & Update Logistik)
│   │   │   ├── PetaniController.php (Dashboard & Input Panen)
│   │   │   └── AdminController.php (Dashboard Analitik Keseluruhan)
│   │   │
│   │   └── Middleware/
│   │       └── CheckRole.php (Membatasi akses antar pengguna)
│   │
│   └── Models/
│       ├── User.php
│       ├── PengajuanSampah.php
│       ├── StokPupuk.php
│       └── HasilPanen.php
│
├── database/
│   └── migrations/
│       ├── 2026_01_01_create_users_table.php (Tambah kolom 'role')
│       ├── 2026_01_02_create_pengajuan_sampahs_table.php
│       ├── 2026_01_03_create_stok_pupuks_table.php
│       └── 2026_01_04_create_hasil_panens_table.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php (Template utama Warga/Petugas/Petani)
│       │   └── admin.blade.php (Template khusus Sidebar Admin)
│       │
│       ├── warga/
│       │   ├── dashboard.blade.php
│       │   └── form_pengajuan.blade.php
│       │
│       ├── petugas/
│       │   ├── dashboard.blade.php (Menampilkan antrean live)
│       │   └── form_pupuk.blade.php
│       │
│       ├── petani/
│       │   ├── dashboard.blade.php
│       │   └── form_panen.blade.php
│       │
│       └── admin/
│           ├── dashboard.blade.php
│           └── pengguna.blade.php
│
└── routes/
    └── web.php (Berisi Grouping Route berdasarkan Middleware Role)



Tugas:
Anda adalah Senior Full-Stack Developer. Buatkan saya kerangka (boilerplate) kode untuk aplikasi web bernama "Ecofoodcycle" yang berfokus pada ekonomi sirkular pengelolaan sampah makanan.

Tumpukan Teknologi (Tech Stack):

Framework: Laravel 12 (MVC Architecture)

Frontend: Blade Templates + Tailwind CSS (Mobile-first responsive design)

Database: MySQL

Kebutuhan Sistem (User Roles):
Aplikasi ini memiliki 4 peran pengguna (roles) yang diatur menggunakan satu tabel users dengan kolom role (enum: 'warga', 'petugas', 'petani', 'admin'). Buatkan Middleware CheckRole untuk melindungi routes.

Struktur Database (Migration & Models):
Buatkan file Migration dan Eloquent Models untuk tabel berikut beserta relasinya:

users: id, name, email, password, role, phone, address.

pengajuan_sampahs: id, user_id (Warga), jenis_sampah, berat_kg, status (enum: 'pending', 'on_the_way', 'completed'), titik_jemput, created_at.

stok_pupuks: id, petugas_id, jumlah_kg, tanggal_produksi.

hasil_panens: id, petani_id, nama_sayur, jumlah_kg, harga_per_kg.

Kebutuhan Controller & Routing (web.php):
Buatkan Route Groups berdasarkan middleware role yang mengarah ke Controller masing-masing:

WargaController: Method index (Dashboard Tampilan Mobile untuk melihat poin & form), storePengajuan (Submit sampah).

PetugasController: Method index (Menampilkan daftar pengajuan_sampahs yang statusnya 'pending' & 'on_the_way' dengan tampilan kartu yang besar). Method updateStatus (Ubah status pengajuan).

PetaniController: Method index (Dashboard melihat ketersediaan pupuk dan list panen). Method storePanen.

AdminController: Method index (Dashboard Desktop dengan ringkasan statistik COUNT dan SUM dari semua tabel).

Kebutuhan Frontend (Blade + Tailwind):
Tolong buatkan layout dasar resources/views/layouts/app.blade.php dengan implementasi CDN Tailwind CSS. Layout ini harus memiliki Navbar sederhana dan Bottom Navigation Bar (khusus tampilan mobile).

Aturan Kode:
Berikan kode yang terstruktur dengan baik. Sertakan komentar dalam bahasa Indonesia pada setiap bagian penting. Mulai dari Migration, lalu Model, Middleware, Route, Controller, dan diakhiri dengan contoh layout View Blade-nya.
