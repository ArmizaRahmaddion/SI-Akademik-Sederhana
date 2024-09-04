<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prodicontroller extends Controller
{
    public function index()
    {
        return view('prodi.list')->with('judul', 'Daftar prodi');
    }

    public function create()
    {
        return view('prodi.form')->with('judul', 'Form prodi');
    }

    public function store(Request $r)
    {
        $x = array(
            'nama' => $r->nama,
            'kode' => $r->kode,
            'tglsk' => $r->tglsk,
            'akreditasi' => $r->akreditasi,
            'id_fakultas' => $r->id_fakultas,
            'id_jenjang' => $r->id_jenjang,
        );

        DB::table('tbprodi')
            ->insert($x);

        return view('prodi.list');
    }

    public function show($id)
    {
        return view('prodi.formedit')
            ->with('judul', 'Form edit prodi')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('prodi.edit');
    }

    public function update(Request $r)
    {
        $x = array(
            'nama' => $r->nama,
            'kode' => $r->kode,
            'tglsk' => $r->tglsk,
            'akreditasi' => $r->akreditasi,
            'id_fakultas' => $r->id_fakultas,
            'id_jenjang' => $r->id_jenjang,
        );
        DB::table('tbprodi')
            ->where('id', $r->id)
            ->update($x);

        return view('prodi.list')
            ->with('judul', 'daftar mahasiswa');
    }

    public function deleteprodi(Request $r)
    {
        DB::table('tbprodi')
            ->where('id', $r->id)
            ->delete();

        return view('prodi.list')
            ->with('judul', 'Daftar prodi');
    }



    public function destroy(Request $r)
    {
        DB::table('tbprodi')
            ->where('id', $r->id)
            ->delete();

        return view('prodi.list')
            ->with('judul', 'Daftar prodi');
    }
}
