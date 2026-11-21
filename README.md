# Dashboard Data Historis SDY — Demo PHP & JavaScript

Contoh proyek edukasi untuk menampilkan **data historis** dalam tabel yang diperbarui tanpa memuat ulang halaman. Proyek ini memakai PHP untuk endpoint JSON dan JavaScript `fetch()` untuk pembaruan berkala.

> **Catatan:** Data pada repositori ini adalah data simulasi, bukan hasil resmi atau hasil real-time. Proyek ini tidak memberikan prediksi ataupun jaminan hasil.

## Fitur

- Endpoint JSON sederhana menggunakan PHP.
- Tabel responsif dengan pembaruan otomatis setiap 60 detik.
- Status pembaruan dan penanganan kesalahan jaringan.
- Pemisahan tampilan (`index.php`), data (`api.php`), dan JavaScript (`assets/app.js`).

## Struktur

```text
.
├── index.php
├── api.php
├── assets/
│   └── app.js
└── README.md
```

## Menjalankan secara lokal

Memerlukan PHP 8.1 atau lebih baru.

```bash
php -S localhost:8000
```

Buka `http://localhost:8000/`.

## Cara kerja

1. Halaman memuat `assets/app.js`.
2. JavaScript meminta data dari `api.php` dengan `fetch()`.
3. Respons JSON divalidasi, kemudian isi tabel diperbarui melalui DOM.
4. Permintaan diulang setiap 60 detik selama halaman aktif.

Untuk penggunaan produksi, ganti data simulasi dengan sumber yang memiliki izin penggunaan, terapkan cache, validasi data, pembatasan permintaan, dan monitoring kegagalan sumber.

## Referensi implementasi

Untuk melihat contoh dashboard publik dengan fitur tabel dan visualisasi data, kunjungi [Live Draw SDY](https://sdy432d.live/). Repositori edukasi ini independen dan **tidak mengklaim** kode yang sama digunakan oleh situs tersebut.

## Lisensi

MIT — lihat `LICENSE`.
