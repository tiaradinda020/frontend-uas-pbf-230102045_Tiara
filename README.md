# 📚 UAS Praktikum PBF - Frontend Laravel

**Nama:** Tiara Dinda  
**NIM:** 230102045  
**Repository Backend:** [uas_pbf_soal_b (CodeIgniter)](https://github.com/abdau88/uas_pbf_soal_b.git)  
**Repository Frontend Ini:** `frontend-uas-pbf-230102045`

---

## 🛠️ 1. Cara Instalasi dan Menjalankan Project Backend

### 📦 Langkah-langkah:

1. **Clone Repo backend**:
   ```bash 
   git clone https://github.com/[USERNAME]/frontend-uas-pbf-230102045.git
   cd frontend-uas-pbf-230102045

2. **Buat Database**:
   - Masuk ke phpMyAdmin atau MySQL CLI
   - Buat new database lalu salin sql 
   ```bash
   git clone https://github.com/[USERNAME]/frontend-uas-pbf-230102045.git
   cd frontend-uas-pbf-230102045

3. **Buat Group Collection Postman**:
   ***Koleksi uas_buku***
     1. GET/buku
     2. POST/ buku
     3. PUT/buku{id}
     4. DELETE/buku{id}
    ***Koleksi uas_peminjaman***
    1. GET /peminjaman
    2. POST /peminjaman
    3. PUT /peminjaman{id}
    4. DELETE /peminjaman{id}
   
## 🛠️ 2. Cara Instalasi dan Menjalankan Project Laravel

### 📦 Langkah-langkah:

1. **Clone Repo Ini**:
   ```bash
   git clone https://github.com/[USERNAME]/frontend-uas-pbf-230102045.git
   cd frontend-uas-pbf-230102045
   
2. **Tambahkan route dan controller di Laravel**:
   ```bash
   php artisan make:controller BukuController
   php artisan make:controller PeminjamanController

3. **Mengambil Data dari Backend**
   ***contohnya saya ambil dari index***

   ***Gunakan Laravel HTTP Client:***
   
   ```bash
   use Illuminate\Support\Facades\Http;
    ```

   ```bash
   public function index()
    {
        $response = Http::get('http://localhost:8080/buku');
        $buku = $response->json();
        return view('buku.index', compact('buku'));
    }
    ```
   
5. **Membuat CRUD**:
   - resources/views/buku/index.blade.php
   - resources/views/buku/create.blade.php
   - resources/views/buku/edit.blade.php
     
6. **Upload ke GitHub**
   ***Langkah:***

   ```bash
    git init
    git add .
    git commit -m "UAS PBF - Frontend Laravel Tiara Dinda"
    git remote add origin https://github.com/[username]/frontend-uas-230102045.git
    git push -u origin main
