# 🚀 PutNow - Panduan Menjalankan Project

Proyek **PutNow** adalah aplikasi layanan jasa (Service Marketplace) berbasis Laravel, Tailwind CSS, Alpine.js, dan MySQL. Dokumen ini berisi panduan lengkap untuk menjalankan proyek ini di komputer lokal (Localhost).

---

## 🛠️ Persyaratan Sistem (System Requirements)
Sebelum menjalankan proyek, pastikan komputer Anda telah terinstal:
1. **PHP 8.2 / 8.3+** (Disediakan oleh Laravel Herd).
2. **Composer** (Manajer paket PHP).
3. **Node.js & npm** (Untuk memproses Tailwind CSS & Vite).
4. **Laragon / XAMPP** (Hanya untuk menjalankan Database MySQL).
5. **Laravel Herd** (Disarankan untuk menjalankan server PHP lokal dengan cepat).

---

## 🏃‍♂️ Cara Menjalankan Project (Langkah-demi-Langkah)

### 1. Jalankan Database (MySQL)
Proyek ini menggunakan MySQL sebagai database utamanya.
- Buka aplikasi **Laragon**.
- Klik tombol **Start All** (pastikan MySQL berjalan).
- Database proyek ini bernama: `skillbridge` (pastikan database ini sudah ada).

### 2. Buka Proyek di Terminal (VS Code)
Buka folder proyek ini di VS Code (`E:\Project\putnow`).
Buka dua buah terminal (tekan `Ctrl` + `~`). Kita butuh dua terminal agar Backend dan Frontend bisa berjalan bersamaan.

### 3. Jalankan Frontend Server (Vite & Tailwind CSS)
Pada terminal PERTAMA, jalankan perintah berikut untuk mengaktifkan kompilasi desain (Tailwind & Alpine) secara *real-time*:
```bash
npm run dev
```
> **Penting:** Biarkan terminal pertama ini terus menyala dan jangan ditutup. Jika ini mati, tampilan website akan hancur / styling tidak bekerja.

### 4. Jalankan Backend Server (Laravel / PHP)
Pada terminal KEDUA, jalankan perintah berikut untuk menyalakan server aplikasi Laravel:
```bash
php artisan serve
```
> Server akan berjalan di alamat `http://127.0.0.1:8000`. Biarkan terminal ini juga tetap menyala.

### 5. Mengaktifkan Folder Gambar (Storage Link)
Jika Anda baru pertama kali menjalankan proyek ini atau gambar dari *upload* tidak muncul, jalankan perintah berikut di terminal KETIGA (atau matikan terminal kedua sebentar, jalankan ini, lalu nyalakan lagi):
```bash
php artisan storage:link
```
> Ini berfungsi untuk membuat jalan pintas (Symlink) agar gambar rahasia di dalam folder `storage` bisa ditampilkan di website publik.

---

## 🚨 Catatan Penting / Solusi Error yang Sering Terjadi

### 1. Error "The image failed to upload" (Atau PHP Content-Length Error)
Jika Anda menjumpai masalah gagal *upload* file karena keterbatasan folder Temporary:
- Jika Anda menggunakan **Laravel Herd**: Pastikan Herd memiliki akses ke folder Temp Windows. Anda bisa memperbaiki ini dengan membuat folder khusus `C:\Users\[NAMA_USER]\.config\herd\tmp` dan mengaturnya di `php.ini` Herd Anda. *(Catatan: Ini sudah diselesaikan untuk proyek saat ini)*.
- Selalu batasi *upload* gambar tidak lebih dari 2 MB untuk keamanan dan kestabilan.

### 2. Desain Website Berantakan (CSS Hilang)
Jika desain tiba-tiba hilang atau ikon hilang:
- Pastikan Terminal 1 (`npm run dev`) dalam status menyala.
- Jika ada *error* kompilasi, coba matikan lalu hapus folder `node_modules` dan jalankan `npm install` ulang, disusul `npm run dev`.

### 3. Error Koneksi Database
Jika muncul tulisan `SQLSTATE[HY000] [1045] Access denied` atau koneksi gagal:
- Pastikan Laragon/MySQL Anda sudah dalam status "Start".
- Cek file `.env` di dalam proyek, pastikan:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=skillbridge
  DB_USERNAME=root
  DB_PASSWORD=
  ```

---

## 💡 Fitur yang Telah Dibangun
- **Desain Modern:** Memanfaatkan Tailwind CSS dengan gaya *glassmorphism*, minimalis, dan responsif.
- **Interaktif:** Menggunakan Alpine.js untuk Modal, *dropdown*, dan validasi gambar langsung dari *browser* tanpa memuat ulang (refresh) halaman.
- **Roles:** Dibagi menjadi akses Super Admin, Seller, dan Customer.
- **Sistem Upload:** Pengunggahan gambar dengan penanganan keamanan (maksimal 2MB, filter format) dan pengamanan error level server.

Selamat mengembangkan proyek **PutNow**! 🚀
