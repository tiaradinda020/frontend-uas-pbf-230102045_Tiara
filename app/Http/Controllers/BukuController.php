<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BukuController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/buku');
        $buku = $response->json();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        Http::post('http://localhost:8080/buku', [
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
        ]);

        return redirect('/buku')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit($id)
{
    $response = Http::get("http://localhost:8080/buku/{$id}");
    $buku = $response->json(); // Ambil langsung seluruh response
    return view('buku.edit', compact('buku'));
}

    public function update(Request $request, $id)
    {
        Http::put("http://localhost:8080/buku/{$id}", [
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect('/buku')->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/buku/{$id}");
        return redirect('/buku')->with('success', 'Buku berhasil dihapus');
    }
}
