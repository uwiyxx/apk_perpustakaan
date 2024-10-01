<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function utama(){
        $siswa = new Siswa();
        return view('pages.data-siswa', [
            'data_siswa'=>$siswa->all()
        ]);
    }
    public function tambah(){
        return view('pages.tambah-siswa');
    }
    public function simpan(Request $request){
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'max:13',
            'kode_kelas'=>'required'
        ]);
        $siswa = new Siswa();
        $siswa->create( $request->all());
        return redirect('/data-siswa');
    }
    public function tampil($nis){
        $siswa = [
            'siswa' =>Siswa::find($nis)
        ];
        return view('pages.edit_siswa', $siswa);
    }
    public function update(Request $request,$nis){
        $validate =$request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'max:13',
        ]);
        $siswa = Siswa::find($nis);
        if ($siswa) {
            $siswa->update($request->all());
            return redirect('/data-siswa')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->back()->withErrors('Siswa tidak ditemukan');
        }
    }

    public function delete($nis){
        $siswa = new Siswa();
        $siswa->find($nis)->delete();
        return redirect('/data-siswa');
    }
}
