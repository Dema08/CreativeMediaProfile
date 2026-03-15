<p align="center">
<a href="https://github.com/Dema08/CreativeMediaProfile" target="_blank">
<img src="https://raw.githubusercontent.com/Dema08/CreativeMediaProfile/main/public/user_assets/images/logo.png" width="200" alt="Creative Media Logo">
</a>
</p>

<h1 align="center">Creative Media Company Profile</h1>

<p align="center">
Website Company Profile & Content Management System untuk <b>Creative Media</b><br>
Digital Agency & IT Training Center di Surabaya
</p>

<p align="center">

<a href="https://github.com/Dema08/CreativeMediaProfile/actions">
<img src="https://github.com/Dema08/CreativeMediaProfile/workflows/tests/badge.svg" alt="Build Status">
</a>

<a href="https://github.com/Dema08/CreativeMediaProfile">
<img src="https://img.shields.io/badge/PHP-8.2+-777BB4.svg?logo=php&logoColor=white">
</a>

<a href="https://github.com/Dema08/CreativeMediaProfile">
<img src="https://img.shields.io/badge/Laravel-12.x-FF2D20.svg?logo=laravel&logoColor=white">
</a>

<a href="https://github.com/Dema08/CreativeMediaProfile">
<img src="https://img.shields.io/badge/license-MIT-blue.svg">
</a>

</p>

---

# 📖 Tentang Project

**Creative Media Profile** adalah aplikasi **Website Company Profile** yang dibangun menggunakan **Laravel 12**.
Website ini digunakan oleh **Creative Media – Digital Agency & IT Training Center di Surabaya** untuk menampilkan informasi perusahaan, layanan, portofolio karya siswa, serta artikel terbaru.

Selain website frontend, aplikasi ini juga dilengkapi dengan **Admin Panel (CMS)** yang memungkinkan admin mengelola seluruh konten website secara mudah.

---

# ✨ Fitur Utama

### 🌐 Frontend Website

* Tampilan modern & responsive
* Hero slider pada halaman utama
* Informasi layanan dan bidang studi
* Galeri portofolio karya siswa
* Artikel & berita terbaru
* Testimoni pelanggan
* Halaman kontak

### ⚙️ Admin Panel (CMS)

Admin dapat mengelola seluruh konten website melalui dashboard.

* Manajemen Artikel
* Manajemen Karya Siswa
* Manajemen Testimoni
* Manajemen Bidang Studi
* Manajemen Layanan Jasa
* Moderasi Komentar Artikel
* Manajemen Hero Homepage
* Manajemen Tim Kreatif
* Manajemen Partner / Mitra
* Manajemen Video YouTube
* Pengaturan Informasi Kontak

---

# 🛠️ Teknologi yang Digunakan

| Teknologi              | Keterangan                |
| ---------------------- | ------------------------- |
| **Laravel 12**         | Framework Backend         |
| **PHP 8.2+**           | Bahasa pemrograman        |
| **MySQL**              | Database                  |
| **Tailwind CSS**       | Styling frontend          |
| **Bootstrap**          | UI Framework              |
| **JavaScript**         | Interaktivitas website    |
| **Laravel Fortify**    | Authentication admin      |
| **Intervention Image** | Image upload & processing |

---

# ⚙️ Instalasi Project

### 1️⃣ Clone Repository

```bash
git clone https://github.com/Dema08/CreativeMediaProfile.git
cd CreativeMediaProfile
```

### 2️⃣ Install Dependencies

```bash
composer install
npm install
```

### 3️⃣ Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Setup Database

Edit konfigurasi database di file `.env`

```
DB_DATABASE=creativemedia
DB_USERNAME=root
DB_PASSWORD=
```

Lalu jalankan:

```bash
php artisan migrate --seed
```

### 5️⃣ Build Asset Frontend

```bash
npm run build
```

### 6️⃣ Jalankan Server

```bash
php artisan serve
```

Website dapat diakses di:

```
http://127.0.0.1:8000
```

---

# 🔑 Login Admin

Gunakan akun berikut untuk mengakses **Admin Panel**

```
Username : admin
Password : admin123
```

Akses halaman admin melalui:

```
http://127.0.0.1:8000/admin
```

---

# 📁 Struktur Project

```
CreativeMediaProfile
│
├── app
│   ├── Models
│   │   ├── Admin.php
│   │   ├── Artikel.php
│   │   ├── BidangStudi.php
│   │   ├── KaryaSiswa.php
│   │   ├── LayananJasa.php
│   │   ├── Testimonial.php
│   │
│   └── Http/Controllers
│
├── resources
│   ├── views
│   │   ├── users      # Template Frontend
│   │   └── admin      # Template Admin Panel
│
├── public
│   ├── user_assets
│   └── admin_assets
│
└── routes
    └── web.php
```

---

# 💬 Interaksi Pengguna

Website ini juga menyediakan beberapa fitur interaktif:

* Pengguna dapat memberikan **testimoni**
* Pengguna dapat memberikan **komentar pada artikel**
* Admin dapat melakukan **moderasi komentar**
* Pengunjung dapat mengirim **pesan melalui halaman kontak**

---

# 🤝 Kontribusi

Kontribusi dari developer sangat terbuka.

Langkah kontribusi:

1. Fork repository ini
2. Buat branch baru

```
git checkout -b fitur-baru
```

3. Commit perubahan

```
git commit -m "Menambahkan fitur baru"
```

4. Push ke repository

```
git push origin fitur-baru
```

5. Buat **Pull Request**

---

# 📄 Lisensi

Project ini menggunakan lisensi **MIT License**.

Silakan gunakan dan modifikasi project ini sesuai kebutuhan.

---

# 📞 Kontak

Informasi lebih lanjut mengenai **Creative Media**

🌐 Website : https://creativemedia.com
📧 Email : [info@creativemedia.com](mailto:info@creativemedia.com)
