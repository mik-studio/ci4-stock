# CodeIgniter 4 Stock Barang

## Apakah ini?

Aplikasi stock barang menggunakan CodeIgniter 4. Repo ini saya gunakan untuk belajar CodeIgniter 4.

## Setup

Sesuaikan konfigurasi yang ada di App\Config\Database.php dan App\Config\App.php

## Install

Jalankan perintah ini di root folder aplikasi ini
- `composer install`
- kalau ada error minimum-stability jalankan perintah ini
    - `composer config minimum-stability dev`
    - `composer config prefer-stable true`
    - Kemudian jalankan perintah `composer install` kembali
- `php spark migrate --all`
- Jalankan aplikasi kemudian register akun baru

## Dibuat Menggunakan

CodeIgniter 4, CodeIgniter 4 Shield, codeigniter4-datatables, Select2, SB-Admin 2