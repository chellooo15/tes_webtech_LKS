# Sistem Informasi Koperasi Sekolah

Aplikasi PHP Native + PDO + MySQL untuk latihan CRUD LKS SMK Kristen Immanuel. UI menggunakan gaya BukuKita (navbar, hero, feature cards, sidebar, topbar, form dan tabel).

## Fitur
- Login dan register. Registrasi publik selalu membuat role `user`.
- User dapat melihat data suppliers, products, dan employees.
- Admin dapat menambah, mengubah, dan menghapus ketiga data tersebut.
- Validasi server-side, prepared statements, password hashing, dan konfirmasi penghapusan.
- `product_types` disimpan sebagai JSON dalam kolom VARCHAR.
- Transaksi database pada proses tambah, ubah, dan hapus.

## Instalasi
1. Buat database dengan mengimpor `database_structure.sql` melalui phpMyAdmin atau MariaDB.
2. Sesuaikan host, username, dan password database pada `config/database.php`.
3. Jalankan dari folder proyek: `php -S localhost:8000`.
4. Buka `http://localhost:8000`, lalu daftar akun.
5. Jadikan akun pertama sebagai admin melalui SQL: `UPDATE users SET role='admin' WHERE email='email-anda';`.
6. Login kembali. Akun baru berikutnya otomatis ber-role `user`.

## Catatan
Tiga tabel master (`products`, `suppliers`, `employees`) berdiri sendiri dan tidak memiliki relasi foreign key, sesuai panduan.
