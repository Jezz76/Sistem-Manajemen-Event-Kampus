# 🎓 Sistem Manajemen Event Kampus

Aplikasi berbasis web menggunakan **CodeIgniter 3** untuk pengelolaan event kampus. Admin dapat membuat dan mengelola event, sedangkan mahasiswa dapat mendaftar dan mengikuti event yang tersedia.

---

## 🚀 Fitur Utama

- ✅ **CRUD Event** (khusus admin)
- ✅ **Registrasi & Login Mahasiswa**
- ✅ **Pendaftaran dan Pembatalan Event oleh Mahasiswa**
- ✅ **Laporan Peserta Tiap Event** (khusus admin)
- ✅ **Role-based Access** (admin dan mahasiswa)
- ✅ **Validasi Form & Autentikasi**
- ✅ **Relasi Many-to-Many** antara User dan Event

---

## 👤 Role Pengguna

### Admin:
- Login dan kelola event (create, edit, delete)
- Melihat daftar peserta event beserta username, email, dan nomor telepon

### Mahasiswa:
- Registrasi dan login
- Melihat daftar event
- Mendaftar dan batal dari event

---

## 🗃️ Struktur Database (Tabel Utama)

- `users` – Data akun admin dan mahasiswa
- `events` – Data event kampus
- `event_user` – Relasi many-to-many antara user dan event (user_id, event_id)

---

## 📦 Teknologi

- PHP 7+
- CodeIgniter 3
- MySQL
- Bootstrap 4

---
## ⚙️ Cara Menjalankan

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/Jezz76/Sistem-Manajemen-Event-Kampus.git
   ```

2. **Import file SQL ke database MySQL:**
   - Buka **phpMyAdmin**
   - Buat database baru, misalnya: `event_kampus`
   - Import file `.sql` yang tersedia di repo ke dalam database tersebut

3. **Atur konfigurasi database di `application/config/database.php`:**
   ```php
   'username' => 'root',
   'password' => '',
   'database' => 'event_kampus',
   ```

4. **Jalankan project menggunakan XAMPP atau Laragon**, lalu akses di browser:
   ```
   http://localhost/Sistem-Manajemen-Event-Kampus/
   ```

## 🎥 Video Presentasi

YouTube: [https://youtu.be/VOCDdXeNiys](https://youtu.be/VOCDdXeNiys)

## 🧑‍💻 Author

Nama: Jeskris Oktovianus Silahooy
NIM: (H1D023003)

---

Terima kasih telah melihat proyek ini! 
