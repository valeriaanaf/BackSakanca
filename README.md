# Sakanca — Backend (BackSakanca)

REST API dan panel admin untuk website company profile **Sakanca Alliance** — sebuah ekosistem yang menaungi enam sub-brand: Sakanca Visual, Auto, Escape, Tech, Dev, dan Pet.

Project ini dibangun sebagai final project mata kuliah Rekayasa Web, dengan standar clean architecture dan best practice yang layak dijadikan portofolio profesional.

---

## Tech Stack

| Layer | Teknologi |
|---|---|
| Framework | Laravel 13 |
| Bahasa | PHP 8.3 |
| Database | PostgreSQL 18 |
| Autentikasi | Laravel Sanctum (token-based) |
| Admin Panel | Filament v5.6 |
| API Testing | Postman |
| Version Control | Git + GitHub |

---

## Fitur Utama

- REST API publik untuk konsumsi frontend (Next.js) — tanpa autentikasi
- REST API admin (CRUD penuh) — dilindungi Sanctum Bearer Token
- Panel admin berbasis browser (Filament) untuk kelola seluruh konten tanpa perlu Postman
- Dukungan multi-bahasa (ID/EN/JPN) untuk seluruh konten dinamis, disimpan sebagai JSONB
- Format response API konsisten (`ApiResponse` trait) di seluruh endpoint

---

## Setup Lokal

### 1. Clone repository

```bash
git clone https://github.com/valeriaanaf/BackSakanca.git
cd BackSakanca
```

### 2. Install dependency

```bash
composer install
```

### 3. Salin dan konfigurasi environment

```bash
cp .env.example .env
```

Sesuaikan bagian berikut di `.env`:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=sakanca
DB_USERNAME=postgres
DB_PASSWORD=

FILESYSTEM_DISK=public
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Jalankan migration & seeder

```bash
php artisan migrate
php artisan db:seed
```

### 6. Buat symbolic link storage

```bash
php artisan storage:link
```

Wajib dijalankan agar gambar yang di-upload admin lewat Filament bisa diakses publik lewat browser.

### 7. Jalankan server lokal

```bash
php artisan serve
```

API akan berjalan di `http://127.0.0.1:8000`, panel admin di `http://127.0.0.1:8000/admin`.

### 8. (Opsional) Rapikan format kode sebelum commit

```bash
./vendor/bin/pint
```

---

## Daftar Endpoint API

Base URL: `/api/v1`

### Autentikasi

| Method | Endpoint | Auth | Keterangan |
|---|---|---|---|
| POST | `/auth/login` | Publik | Login admin, mengembalikan Bearer token |
| POST | `/auth/logout` | Sanctum | Hapus token yang sedang dipakai |

### Publik (Read-Only, Dikonsumsi Frontend)

| Method | Endpoint | Keterangan |
|---|---|---|
| GET | `/ping` | Health check |
| GET | `/hero` | Konten section Hero (singleton, aktif) |
| GET | `/about` | Konten section About (singleton) |
| GET | `/services` | Daftar sub-brand (grid menu) |
| GET | `/detailed-services` | Detail tiap sub-brand (slider) |
| GET | `/projects` | Daftar portofolio project |
| GET | `/team-members` | Daftar anggota tim |
| GET | `/team-members/{id}` | Detail satu anggota tim |
| GET | `/testimonials` | Daftar testimoni klien |
| GET | `/gallery-items` | Daftar item galeri |
| GET | `/settings` | Pengaturan situs (sosmed, footer, background section) |
| POST | `/contact` | Kirim pesan kontak *(belum dipakai FE — dormant)* |

### Admin (Wajib Header `Authorization: Bearer {token}`)

| Method | Endpoint | Keterangan |
|---|---|---|
| PUT | `/admin/hero/{hero}` | Update Hero |
| PUT | `/admin/about/{about}` | Update About |
| PUT | `/admin/settings` | Update pengaturan situs (bulk, banyak key sekaligus) |
| POST / PUT / DELETE | `/admin/services/{service}` | CRUD Service |
| POST / PUT / DELETE | `/admin/detailed-services/{detailed_service}` | CRUD Detailed Service |
| POST / PUT / DELETE | `/admin/projects/{project}` | CRUD Project |
| POST / PUT / DELETE | `/admin/team-members/{team_member}` | Store/Update/Destroy Team Member |
| POST / PUT / DELETE | `/admin/testimonials/{testimonial}` | CRUD Testimonial |
| POST / PUT / DELETE | `/admin/gallery-items/{gallery_item}` | CRUD Gallery Item |
| GET | `/admin/contact-messages` | Baca pesan kontak masuk *(dormant)* |
| PATCH | `/admin/contact-messages/{id}/read` | Tandai pesan sudah dibaca *(dormant)* |

Format response seluruh endpoint konsisten:

```json
{
  "success": true,
  "message": "Pesan opsional",
  "data": { }
}
```

---

## Dokumentasi Tambahan

- **ERD**: lihat `docs/ERD_SAKANCA_FINAL.drawio` *(buka dengan [draw.io](https://app.diagrams.net/))*
- **Postman Collection**: tersedia di folder `postman/collections/` pada repo ini — import langsung ke Postman untuk mencoba seluruh endpoint

---

## Deployment

| Environment | URL |
|---|---|
| Production | `https://backsakanca-production.up.railway.app` |

> Backend saat ini di-host di Railway sebagai solusi sementara, dengan rencana migrasi ke VPS (Hostinger) untuk penggunaan jangka panjang.

---

## Struktur Arsitektur Singkat

```
migration → model ($fillable + $casts) → FormRequest (extends BaseRequest)
→ controller (pakai ApiResponse trait) → routes (public vs admin)
→ Filament Resource (Form + Table) → seeder
```

Konten multi-bahasa disimpan sebagai kolom `jsonb` dengan struktur:

```json
{ "ID": "teks bahasa Indonesia", "EN": "English text", "JPN": "日本語のテキスト" }
```
