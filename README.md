# testprintsoft

# 🖨️ CodeIgniter Printsoft

Aplikasi manajemen produk sederhana berbasis **CodeIgniter 3**, dengan fitur hitung otomatis harga berdasarkan tipe produk (_unit_ atau _area_).

---

## 📁 Struktur Proyek

- `application/` – Folder utama CodeIgniter 3
- `test_printsoft.sql` – File database MySQL untuk aplikasi ini
- `screen_capture/` – Folder berisi tangkapan layar (screenshot) tampilan aplikasi

---

## 🧪 Cara Menjalankan

### 1. Clone Repository

git clone https://github.com/xxrfid/testprintsoft.git

### 2. Tempatkan di Web Server

Letakkan folder hasil clone ke direktori web server lokal:
XAMPP: htdocs/CodeIgniterPrintsoft

### 3. Import Database

Buka phpMyAdmin
Buat database baru: test_printsoft
Import file: test_printsoft.sql

### 4. Konfigurasi Koneksi Database

Edit file: application/config/database.php
sesuaikan bagian 'database' => 'test_printsoft'

### 5. Akses Aplikasi

Setelah semua selesai, buka di browser:
http://localhost/CodeIgniterPrintsoft/product

### Fitur Aplikasi:

- Tambah produk
- Edit produk
- Hapus produk
- Hitung otomatis harga:
  ~ Jika tipe unit: quantity x price
  ~ Jika tipe area: quantity x panjang x lebar x price

Pastikan server lokal (Apache dan MySQL) aktif
Gunakan browser modern (Chrome/Edge/Firefox)
Jika error muncul, periksa kembali koneksi database dan URL base_url di config.php serta .htaccess
