# Dokumentasi Proyek

## Deskripsi Proyek

Proyek ini adalah sebuah website perusahaan yang mencakup beberapa halaman utama seperti Beranda, Produk, Artikel/Blog,
Tentang Kami, dan Kontak. Proyek ini menggunakan Laravel untuk pengembangan backend dan Laravel Filament untuk panel
admin.

### Fitur Utama

1. **Beranda (Home)**

    - Menampilkan informasi umum tentang perusahaan.

    - Tampilan user-friendly dengan banner atau carousel.

2. **Produk (Products)**

    - Halaman untuk menampilkan daftar produk perusahaan.

    - Setiap produk memiliki:

        - Nama produk

        - Deskripsi

        - Harga

        - Gambar produk

    - Fitur CRUD (Create, Read, Update, Delete) untuk produk melalui panel admin.

3. **Artikel/Blog (Articles/Blog)**

    - Halaman untuk menampilkan daftar artikel atau blog.

    - Setiap artikel memiliki:

        - Judul

        - Konten

        - Penulis

        - Tanggal publikasi

    - Fitur untuk membaca artikel secara penuh.

4. **Tentang Kami (About Us)**

    - Halaman yang menjelaskan tentang perusahaan, visi, misi, dan tim.

5. **Kontak (Contact)**

    - Formulir kontak dengan input:

        - Nama

        - Email

        - Pesan

    - Data formulir tersimpan di database.

    - Notifikasi sukses setelah pengiriman.

### Teknologi yang Digunakan

- Laravel 10

- Laravel Filament

- MySQL

- TailwindCSS

- Livewire

## Instalasi Proyek

### Persyaratan Sistem

- PHP >= 8.1

- Composer

- Node.js & NPM

- MySQL

### Langkah Instalasi

1. **Clone Repository**

   ```
   git clone https://github.com/username/project-name.git
   cd project-name
   ```

2. **Install Dependencies**

   ```
   composer install
   npm install
   npm run dev
   ```

3. **Konfigurasi Environment**

    - Salin file `.env.example` menjadi `.env`:

      ```
      cp .env.example .env
      ```

    - Atur konfigurasi database di file `.env`:

      ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=nama_database
      DB_USERNAME=root
      DB_PASSWORD=password
      ```

4. **Generate Application Key**

   ```
   php artisan key:generate
   ```

5. **Migrasi dan Seed Database**

   ```
   php artisan migrate --seed
   ```

6. **Menjalankan Server**

   ```
   php artisan serve
   ```

## Fitur-Fitur

### 1. Beranda (Home)

- Menampilkan banner atau carousel.

- Informasi umum perusahaan.

### 2. Produk (Products)

- List produk ditampilkan di halaman utama.

- Detail produk berisi deskripsi, harga, dan gambar.

- CRUD melalui admin panel Laravel Filament:

    - **Create**: Tambahkan produk baru.

    - **Read**: Lihat daftar produk.

    - **Update**: Edit produk yang ada.

    - **Delete**: Hapus produk.

### 3. Artikel/Blog

- List artikel ditampilkan di halaman blog.

- Detail artikel mencakup konten lengkap, penulis, dan tanggal publikasi.

- CRUD artikel melalui admin panel Laravel Filament.

### 4. Tentang Kami (About Us)

- Halaman statis yang menjelaskan:

    - Visi dan misi perusahaan.

    - Informasi tim.

### 5. Kontak (Contact)

- Formulir kontak dengan input:

    - Nama

    - Email

    - Pesan

- Data tersimpan di database.

- Menampilkan notifikasi sukses setelah formulir dikirim.

## Panel Admin Laravel Filament

### Instalasi Filament

Filament telah dikonfigurasi di proyek ini. Untuk mengakses admin panel:

1. Jalankan perintah berikut untuk membuat admin user:

   ```
   php artisan make:filament-user
   ```

2. Ikuti langkah-langkah untuk membuat user admin.

### Fitur Panel Admin

- **Produk**: Tambah, lihat, edit, dan hapus produk.

- **Artikel**: Tambah, lihat, edit, dan hapus artikel.

- **Pesan Kontak**: Lihat daftar pesan yang dikirim oleh pengguna.

## Kredensial Login

- **Admin Panel**:

    - URL: `/admin`

    - Email: `admin@gmail.com`

    - Password: `admin`

## Penutup

Proyek ini dirancang untuk memberikan pengalaman pengguna yang optimal serta kemudahan pengelolaan konten melalui panel
admin berbasis Laravel Filament.
