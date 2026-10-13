# Portfolio Ahmad Raihan

Website portfolio pribadi untuk menampilkan project, skill, dan pengalaman. Dibuat sebagai bahan belajar Laravel sekaligus media personal branding.

🔗 **Live:** (isi kalau sudah deploy)

## Tech Stack

- Laravel 13
- MySQL
- Tailwind CSS
- Blade

## Fitur

- Halaman Home, Projects, Skills, Experience, dan Contact
- Data project dan pengalaman dikelola lewat database (seeder)
- Filter berdasarkan kategori
- Tampilan responsif, dioptimalkan untuk mobile

## Cara Menjalankan

1. Clone repo

```bash
   git clone https://github.com/jawachitam/Portofolio_Website.git
   cd Portofolio_Website
```

2. Install dependency

```bash
   composer install
   npm install
```

3. Salin file environment dan generate key

```bash
   cp .env.example .env
   php artisan key:generate
```

4. Atur koneksi database di file `.env`, lalu jalankan migrasi dan seeder

```bash
   php artisan migrate --seed
```

5. Jalankan project

```bash
   npm run dev
   php artisan serve
```

   Buka `http://127.0.0.1:8000`.

## Kontak

- Instagram: [@_gxgca](https://instagram.com/_gxgca)
- LinkedIn: [Ahmad Raihan](https://linkedin.com/in/Ahmad-Raihan)
