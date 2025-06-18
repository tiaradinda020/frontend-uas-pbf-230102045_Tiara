<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <!-- Tambahkan Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">📚 Daftar Buku</h2>

    <!-- Tombol Tambah -->
    <a href="/buku/create" class="btn btn-primary mb-3">➕ Tambah Buku</a>

    <!-- Tabel Buku -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['pengarang'] ?? '-' }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/buku/{{ $item['id'] }}/edit" class="btn btn-sm btn-warning">Edit</a>

                        <!-- Tombol Hapus -->
                        <form action="/buku/{{ $item['id'] }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data buku</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
