# 📌 Proyek Portofolio Laravel — Analisis & Penjelasan

Repository ini berisi proyek **Website Portofolio** yang dibangun menggunakan **Laravel**, **Blade Template**, dan **Tailwind CSS**.  
Proyek ini merupakan tugas untuk menampilkan halaman:

- Home (Beranda)
- Tentang Saya
- Kontak
- Projects (opsional)

Tujuan dari proyek ini adalah untuk memahami penerapan konsep **MVC**, routing, controller, dan view pada Laravel.

---

## 📖 1. Tujuan Proyek

1. Menerapkan struktur MVC (Model–View–Controller) pada Laravel.  
2. Membuat halaman web statis dan dinamis menggunakan Blade Template.  
3. Menggunakan Tailwind CSS untuk styling.  
4. Mengelola routing serta pengiriman data dari controller ke view.  
5. Menyusun portofolio pribadi secara profesional.

---

## 🧠 2. Analisis Sistem

### ✔ Model  
Proyek ini tidak menggunakan database (untuk versi awal), sehingga **Model belum diperlukan**.

### ✔ View  
Folder view berada di:

resources/views/portofolio/


Halaman yang dibuat:

- `index.blade.php` — halaman utama  
- `about.blade.php` — tentang saya  
- `contact.blade.php` — form kontak  
- `projects.blade.php` (jika ada)

### ✔ Controller  
Menggunakan **PortofolioController** untuk mengatur alur data.

Method yang disediakan:

- `index()` → halaman utama  
- `about()` → halaman tentang saya  
- `contact()` → halaman kontak  

### ✔ Routing  
Semua route diatur dalam `routes/web.php`, contoh:

```php
Route::get('/', [PortofolioController::class, 'index']);
Route::get('/tentang-saya', [PortofolioController::class, 'about']);
Route::get('/kontak', [PortofolioController::class, 'contact']);
