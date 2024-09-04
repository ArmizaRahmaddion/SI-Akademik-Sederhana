<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// useDB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.list')
            ->with('judul', 'Daftar mahasiswa');
    }

    public function create()
    {
        return view('mahasiswa.form')
            ->with('judul', 'Form mahasiswa');
    }

    public function store(Request $r)
    {
        $x = array(
            'nim' => $r->nim,
            'nama' => $r->nama,
            'jeniskelamin' => $r->jeniskelamin,
            'nohp' => $r->nohp,
            'alamat' => $r->alamat,
            'id_pa' => $r->id_pa,
            'id_prodi' => $r->id_prodi,
            'id_fakultas' => $r->id_fakultas,
        );

        $pesan = '';
        $rec = DB::table('tbmahasiswa')
            ->where('nim', $r->nim)
            ->first();

        if ($rec == null) {
            DB::table('tbmahasiswa')->insertGetId($x);
        } else {
            $pesan = "Nim Anda sudah terdaftar";
        }
        return view('mahasiswa.list');
    }

    public function show($id)
    {
        return view('mahasiswa.formedit')
            ->with('judul', 'Form Edit Mahasiswa')
            ->with('id', $id);
    }

    public function edit()
    {

        return view('mahasiswa.edit');
    }

    public function update(Request $r)
    {
        $x = array(
            'nim' => $r->nim,
            'nama' => $r->nama,
            'jeniskelamin' => $r->jeniskelamin,
            'nohp' => $r->nohp,
            'alamat' => $r->alamat,
            'id_pa' => $r->id_pa,
            'id_prodi' => $r->id_prodi,
            'id_fakultas' => $r->id_fakultas,
        );
        DB::table('tbmahasiswa')
            ->where('id', $r->id)
            ->update($x);

        return view('mahasiswa.list')
            ->with('judul', 'Daftar Mahasiswa');
    }


    public function deletemahasiswa(Request $r)
    {
        DB::table('tbmahasiswa')
            ->where('id', $r->id)
            ->delete();

        return view('mahasiswa.list')
            ->with('judul', 'Daftar mahasiswa');
    }



    public function destroy(Request $r)
    {
        DB::table('tbmahasiswa')
            ->where('id', $r->id)
            ->delete();

        return view('mahasiswa.list')
            ->with('judul', 'Daftar mahasiswa');
    }
}