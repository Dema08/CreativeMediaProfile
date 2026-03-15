<p align="center"><a href="https://github.com/Dema08/CreativeMediaProfile" target="_blank"><img src="https://raw.githubusercontent.com/Dema08/CreativeMediaProfile/main/public/user_assets/images/logo.png" width="200" alt="Creative Media Logo"></a></p>

<p align="center">
<a href="https://github.com/Dema08/CreativeMediaProfile/actions"><img src="https://github.com/Dema08/CreativeMediaProfile/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://github.com/Dema08/CreativeMediaProfile"><img src="https://img.shields.io/badge/PHP-8.2+-777BB4.svg?logo=php&logoColor=white" alt="PHP Version"></a>
<a href="https://github.com/Dema08/CreativeMediaProfile"><img src="https://img.shields.io/badge/Laravel-12.x-FF2D20.svg?logo=laravel&logoColor=white" alt="Laravel Version"></a>
<a href="https://github.com/Dema08/CreativeMediaProfile"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License"></a>
</p>

## Tentang Creative Media Profile

Creative Media Profile adalah aplikasi web berbasis Laravel yang dirancang untuk **Creative Media**, sebuah Digital Agency & IT Training Center di Surabaya. Aplikasi ini menyediakan platform profesional untuk memperkenalkan layanan perusahaan, menampilkan portofolio, dan mengelola konten secara efisien melalui admin panel.

### Fitur Utama

- **Frontend User-Friendly**: Tampilan profesional dengan informasi perusahaan, layanan, dan portofolio
- **Admin Panel**: Sistem manajemen konten (CMS) untuk mengelola semua aspek website
- **Manajemen Konten**: Artikel, karya siswa, testimoni, dan informasi kontak
- **Galeri & Portofolio**: Menampilkan bidang studi, layanan jasa, dan karya siswa
- **Testimonial System**: Fitur penilaian dan tanggapan dari pelanggan
- **Responsive Design**: Tampilan yang optimal di berbagai perangkat

### Teknologi yang Digunakan

- **Backend**: Laravel 12.x
- **Frontend**: Tailwind CSS, Bootstrap, JavaScript
- **Database**: MySQL
- **Authentication**: Laravel Fortify (Admin)
- **File Upload**: Intervention Image

## Instalasi

### Prasyarat
- PHP 8.2+
- Composer
- Node.js & npm
- Database (MySQL)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/Dema08/CreativeMediaProfile.git
   cd CreativeMediaProfile
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup Database**
   ```bash
   php artisan migrate --seed
   ```

5. **Build Assets**
   ```bash
   npm run build
   ```

6. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

### Admin Login
- **Username**: `admin`
- **Password**: `admin123`

## Struktur Proyek

```
CreativeMediaProfile/
├── app/
│   ├── Models/              # Model Eloquent
│   │   ├── Admin.php
│   │   ├── Artikel.php
│   │   ├── BidangStudi.php
│   │   ├── KaryaSiswa.php
│   │   ├── LayananJasa.php
│   │   ├── Testimonial.php
│   │   └── ...
│   └── Http/Controllers/    # Controller aplikasi
├── resources/
│   ├── views/users/         # Template frontend
│   └── views/admin/         # Template admin panel
├── public/
│   ├── user_assets/         # Asset frontend
│   └── admin_assets/        # Asset admin panel
└── routes/
    └── web.php              # Routing aplikasi
```

## Fitur Admin Panel

### Manajemen Konten
- **Artikel**: Buat, edit, dan publikasikan artikel
- **Karya Siswa**: Kelola portofolio karya siswa
- **Testimonial**: Review dan kelola testimonial pelanggan
- **Bidang Studi**: Manajemen program pelatihan
- **Layanan Jasa**: Kelola layanan yang ditawarkan
- **Komentar**: Moderasi komentar artikel

### Manajemen Website
- **Hero Image**: Kelola gambar hero di homepage
- **Our Team**: Manajemen tim kreatif
- **Our Partner**: Kelola mitra perusahaan
- **Contact Info**: Informasi kontak perusahaan
- **YouTube Video**: Embed video promosi

## Fitur Frontend

### Halaman Utama
- Hero section dengan slider gambar
- Informasi layanan perusahaan
- Tentang perusahaan dan tim
- Testimonial pelanggan
- Galeri mitra

### Halaman Layanan
- **Bidang Studi**: Program pelatihan IT & Multimedia
- **Layanan Jasa**: Digital Agency services
- **Karya Siswa**: Portofolio hasil karya siswa
- **Artikel**: Berita dan informasi terkini

### Interaksi Pengguna
- **Testimonial**: Pengguna dapat memberikan penilaian dan testimoni
- **Komentar**: Fitur komentar pada artikel (moderasi admin)
- **Kontak**: Formulir kontak untuk komunikasi

## Kontribusi

Kami menerima kontribusi dari komunitas developer. Untuk berkontribusi:

1. Fork repository ini
2. Buat branch baru: `git checkout -b fitur-baru`
3. Commit perubahan: `git commit -m 'Tambah fitur baru'`
4. Push ke branch: `git push origin fitur-baru`
5. Buat Pull Request

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Untuk informasi lebih lanjut tentang Creative Media:
- **Website**: [creativemedia.com](https://creativemedia.com)
- **Email**: info@creativemedia.com
