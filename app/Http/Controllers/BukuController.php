<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function tambah(){
        return view('pages.tambah-data');
    }

    public function simpan(Request $request) {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);
        $buku = new buku();

        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return redirect('/master-data');
    }

    public function edit($buku){
        $buku = [
            'buku' => buku::find($buku)
        ];
        return view('pages.edit_buku', $buku);
    }

    public function update(Request $request, $buku){
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]
        );
        $buku = buku::find($buku);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();
        return redirect('/master-data');
    }

    public function delete($buku){
        $buku = buku::find($buku);
        $buku->delete();
        return redirect('/master-data');
    }
}

