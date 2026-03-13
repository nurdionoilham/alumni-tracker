🎓 Alumni Tracker

Alumni Tracker adalah aplikasi web sederhana berbasis PHP dan MySQL yang digunakan untuk mengelola dan melacak data alumni seperti program studi, pekerjaan, lokasi, serta status verifikasi.

Aplikasi ini dibuat sebagai bagian dari tugas pengembangan aplikasi web pada mata kuliah Rekayasa Kebutuhan.

🚀 Fitur Aplikasi

Aplikasi Alumni Tracker memiliki beberapa fitur utama:

1️⃣ Dashboard Alumni

Menampilkan ringkasan informasi data alumni seperti:

Total jumlah alumni

Total alumni yang telah diverifikasi

Tabel daftar alumni

2️⃣ Tambah Data Alumni

Admin dapat menambahkan data alumni baru ke dalam sistem.

Data yang dapat diinput:

Nama

Program Studi

Tahun Lulus

Pekerjaan

Lokasi

Status

3️⃣ Cari Alumni

Fitur pencarian digunakan untuk menemukan data alumni dengan lebih cepat berdasarkan nama atau informasi lainnya.

4️⃣ Verifikasi Alumni

Admin dapat melakukan verifikasi terhadap alumni sehingga status berubah menjadi:

Terverifikasi
5️⃣ Edit Data Alumni

Admin dapat memperbarui atau mengubah data alumni jika terdapat kesalahan atau perubahan informasi.

6️⃣ Delete Data Alumni

Admin dapat menghapus data alumni yang tidak diperlukan dari database.

🛠 Teknologi yang Digunakan

Aplikasi ini dikembangkan menggunakan teknologi berikut:

PHP

MySQL

Bootstrap

HTML

CSS

XAMPP (Local Development Server)

📂 Struktur Folder Project

Berikut struktur folder pada project:

alumni-tracker
│
├── assets
│   └── style.css
│
├── components
│   ├── header.php
│   └── sidebar.php
│
├── index.php
├── tambah.php
├── simpan.php
├── cari.php
├── verifikasi.php
├── edit.php
├── update.php
├── delete.php
├── database.php
└── README.md
Penjelasan Struktur
Folder / File	Keterangan
assets	Berisi file CSS untuk styling
components	Berisi komponen layout seperti header dan sidebar
index.php	Halaman dashboard utama
tambah.php	Form untuk menambah data alumni
simpan.php	Proses menyimpan data alumni ke database
cari.php	Fitur pencarian data alumni
verifikasi.php	Proses verifikasi alumni
edit.php	Halaman edit data alumni
update.php	Proses update data alumni
delete.php	Menghapus data alumni
database.php	File koneksi database
⚙️ Cara Menjalankan Project

Ikuti langkah berikut untuk menjalankan aplikasi secara lokal:

1️⃣ Install XAMPP

Download dan install XAMPP

https://www.apachefriends.org

2️⃣ Jalankan Server

Buka XAMPP Control Panel lalu jalankan:

Apache
MySQL
3️⃣ Copy Project

Copy folder project ke:

C:\xampp\htdocs
4️⃣ Jalankan Project

Buka browser lalu akses:

http://localhost/alumni-tracker
🗄 Database

Buat database baru dengan nama:

alumni_tracker

Kemudian jalankan SQL berikut di phpMyAdmin:

CREATE TABLE alumni(
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
prodi VARCHAR(100),
tahun_lulus INT,
pekerjaan VARCHAR(100),
lokasi VARCHAR(100),
status VARCHAR(30)
);
🧪 Pengujian Sistem
No	Fitur	Langkah Pengujian	Hasil
1	Dashboard	Membuka halaman utama	Berhasil
2	Tambah Alumni	Mengisi form tambah alumni	Berhasil
3	Cari Alumni	Mencari alumni berdasarkan nama	Berhasil
4	Verifikasi Alumni	Klik tombol verifikasi	Berhasil
5	Edit Alumni	Mengubah data alumni	Berhasil
6	Delete Alumni	Menghapus data alumni	Berhasil
🖥 Tampilan Sistem
Dashboard

Tambah Alumni

Cari Alumni

Edit Data Alumni

## Author
Nama : Nurdiono Ilham Syawal Riyadi
NIM   : 202310370311164
Mata Kuliah : Rekayasa Kebutuhan C
Project : Daily Project

Project:
Daily Project
