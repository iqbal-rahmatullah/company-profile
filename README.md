# Dokumentasi Proyek

## Deskripsi Proyek

Proyek ini adalah sebuah website perusahaan yang mencakup beberapa halaman utama seperti Beranda, Produk, Artikel/Blog,
Tentang Kami, dan Kontak. Proyek ini menggunakan Laravel dan Laravel Filament untuk panel admin.

### Teknologi yang Digunakan

- Laravel 11

- Laravel Filament

- MySQL

- TailwindCSS

## Instalasi Proyek

### Persyaratan Sistem

- PHP >= 8.1

- Composer

- Node.js & NPM

- MySQL

### Langkah Instalasi

1. **Install Dependencies**
   `composer install npm install npm run dev`

2. **Konfigurasi Environment**

    - Salin file  `.env.example`  menjadi  `.env`:
      `cp .env.example .env`

    - Atur konfigurasi database di file  `.env`
3. **Generate Application Key**
   `php artisan key:generate`

4. **Migrasi dan Seed Database**   
   `php artisan migrate --seed`

5. **Storage Link**
   `php artisan storage:link`

6. **Menjalankan Server**
   `php artisan serve`

## Fitur-Fitur

### 1. Beranda (Home)

- Menampilkan headline perusahaan
- Menampilkan kelebihan perusahaan
- Menampilkan client perusaahaan
- Menampilkan alasan mengapa memilih perusahaan ini
- Menampilkan testimoni

### 2. Produk (Products)

- Menampilkan seluruh product perusahaan =

### 3. Artikel/Blog

- Menampilkan seluruh blog/article dari perusahaan
- Melihat detail lengkap dari artikel

### 4. Tentang Kami (About Us)

- Menampilkan informasi lengkap perusahaan, serta visi dan misi

### 5. Kontak (Contact)

- Menampilkan formulir kontak
- Menampilkan notifikasi sukses setelah formulir dikirim.

## Panel Admin Laravel Filament

### Fitur Panel Admin

- **Dashbord** : Statistic product, article, pesan dan graphic ticket yang diterima sistem

- **Produk**: Tambah, lihat, edit, dan hapus produk.

- **Artikel**: Tambah, lihat, edit, dan hapus artikel.

- **Pesan Kontak**: Lihat daftar pesan yang dikirim oleh pengguna.

## Kredensial Login

- **Admin Panel**:

    - URL:  `/admin`

    - Email:  `admin@gmail.com`

    - Password:  `admin`

## Penutup

Proyek ini adalah company profile yang user friendly, serta kemudahan pengelolaan konten melalui panel admin berbasis
Laravel Filament.
