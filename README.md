🎓 Alumni Tracker

Alumni Tracker adalah aplikasi web sederhana berbasis PHP dan MySQL yang digunakan untuk melacak data alumni seperti program studi, pekerjaan, dan status verifikasi.

Aplikasi ini dibuat sebagai tugas pengembangan aplikasi web.

🚀 Fitur Aplikasi

Aplikasi ini memiliki beberapa fitur utama:

1️⃣ Dashboard Alumni

Menampilkan informasi ringkas mengenai:

Total alumni

Total alumni yang telah diverifikasi

2️⃣ Tambah Data Alumni

Admin dapat menambahkan data alumni baru ke dalam sistem.

Data yang diinput:

Nama

Program Studi

Tahun Lulus

Pekerjaan

Lokasi

Status

3️⃣ Cari Alumni

Memungkinkan admin untuk mencari alumni berdasarkan nama atau data lainnya.

4️⃣ Verifikasi Alumni

Admin dapat memverifikasi status alumni sehingga status berubah menjadi Terverifikasi.

5️⃣ Edit Data Alumni

Admin dapat memperbarui informasi alumni jika terdapat kesalahan data.

6️⃣ Delete Data Alumni

Admin dapat menghapus data alumni yang tidak diperlukan dari database.

🛠 Teknologi yang Digunakan

Aplikasi ini dibuat menggunakan teknologi berikut:

PHP

MySQL

Bootstrap

HTML

CSS

XAMPP (Local Development)

📂 Struktur Folder

Struktur project:

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
Cara Menjalankan Project

Install XAMPP

Jalankan Apache dan MySQL

Copy folder project ke:

C:\xampp\htdocs

Buka browser dan akses:

http://localhost/alumni-tracker
Database

Buat database dengan nama:

alumni_tracker

Lalu jalankan SQL berikut:

CREATE TABLE alumni(
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
prodi VARCHAR(100),
tahun_lulus INT,
pekerjaan VARCHAR(100),
lokasi VARCHAR(100),
status VARCHAR(30)
);
Pengujian Sistem
No	Fitur	Langkah Pengujian	Hasil
1	Tambah Alumni	Mengisi form tambah alumni	Berhasil
2	Cari Alumni	Mencari alumni berdasarkan nama	Berhasil
3	Verifikasi Alumni	Klik tombol verifikasi	Berhasil
4	Menampilkan Data	Data alumni muncul di dashboard	Berhasil
5	Edit Alumni	Mengubah data alumni	Berhasil
6	Delete Alumni	Menghapus data alumni	Berhasil
Tampilan Sistem
Dashboard

Tambah Alumni

Cari Alumni

Edit Data Alumni

Struktur Project
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
└── database.php

Penjelasan:

assets → berisi file CSS untuk tampilan

components → berisi bagian layout seperti header dan sidebar

index.php → halaman dashboard utama

tambah.php → halaman form tambah alumni

simpan.php → proses menyimpan data ke database

cari.php → fitur pencarian alumni

verifikasi.php → proses verifikasi alumni

edit.php → halaman edit data alumni

update.php → proses update data alumni

delete.php → menghapus data alumni

database.php → koneksi database MySQL

Pengujian Sistem
No	Fitur	Langkah Pengujian	Hasil
1	Dashboard	Membuka halaman utama	Berhasil
2	Tambah Alumni	Mengisi form tambah alumni	Berhasil
3	Cari Alumni	Mencari alumni berdasarkan nama	Berhasil
4	Verifikasi Alumni	Klik tombol verifikasi	Berhasil
5	Edit Alumni	Mengubah data alumni	Berhasil
6	Delete Alumni	Menghapus data alumni	Berhasil
Author

Nama : Nurdiono Ilham Syawal Riyadi
NIM : 202310370311164
Mata Kuliah : Rekayasa Kebutuhan C
Project : Daily Project
