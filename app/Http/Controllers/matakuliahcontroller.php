<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class matakuliahcontroller extends Controller
{
    public function index()
    {
        return view('matakuliah.list')->with('judul', 'Daftar matakuliah');
    }

    public function create()
    {
        return view('matakuliah.form')->with('judul', 'Form matakuliah');
    }

    public function store(Request $r)
    {
        $x = array(
            'sks' => $r->sks,
            'jam' => $r->jam,
            'nama' => $r->nama,
            'kode' => $r->kode,
            'ruangan' => $r->ruangan,
            'hari' => $r->hari,
        );

        DB::table('tbmatakuliah')->insert($x);

        return view('matakuliah.list')
            ->with('sks', $r->sks)
            ->with('jam', $r->jam)
            ->with('kode', $r->kode)
            ->with('ruangan', $r->ruangan)
            ->with('hari', $r->hari);
    }

    public function show($id)
    {
        return view('matakuliah.formedit')
            ->with('judul', 'Form edit matakuliah')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('matakuliah.edit');
    }

    public function update(Request $r)
    {
        $x = array(
            'sks' => $r->sks,
            'jam' => $r->jam,
            'kode' => $r->kode,
            'ruangan' => $r->ruangan,
            'hari' => $r->hari,
        );
        DB::table('tbmatakuliah')
            ->where('id', $r->id)
            ->update($x);

        return view('matakuliah.list')
            ->with('judul', 'daftar mahasiswa');
    }

    public function deletematakuliah(Request $r)
    {
        DB::table('tbmatakuliah')
            ->where('id', $r->id)
            ->delete();

        return view('matakuliah.list')
            ->with('judul', 'Daftar matakuliah');
    }



    public function destroy(Request $r)
    {
        DB::table('tbmatakuliah')
            ->where('id', $r->id)
            ->delete();

        return view('matakuliah.list')
            ->with('judul', 'Daftar matakuliah');
    }
}