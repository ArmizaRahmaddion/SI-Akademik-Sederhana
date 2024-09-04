<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbkelas;

class kelasController extends Controller
{
    public function index()
    {
        return view('kelas.list')->with('judul', 'Daftar kelas');
    }
    public function create()
    {
        return view('kelas.form')->with('judul', 'form kelas');
    }

    public function store(Request $r)
    {
        $x = array(
            'kode_kelas' => $r->kode_kelas,
            'nama_kelas' => $r->nama_kelas,
            'id_tahunakademik' => $r->id_tahunakademik,
        );


        $pesan = '';
        $rec = DB::table('tbkelas')
            ->where('kode_kelas', $r->kode_kelas)
            ->first();
        if ($rec == null) {
            DB::table('tbkelas')->insertgetId($x);
        } else {
            $pesan = "kode_kelas Sudah Terdaftar";
        }
        return view('kelas.list')
            ->with('judul', 'Daftar kelas')
            ->with('pesan', $pesan);;
    }

    public function show($id)
    {
        return view('kelas.formedit')
            ->with('judul', 'Form Edit kelas')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('kelas.edit');
    }

    public function update(Request $r)
    {
        $x = array(
            'kode_kelas' => $r->kode_kelas,
            'nama_kelas' => $r->nama_kelas,
            'id_tahunakademik' => $r->id_tahunakademik,
        );
        DB::table('tbkelas')
            ->where('id', $r->id)
            ->update($x);

        return view('kelas.list')
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', '');
    }
    public function destroy(Request $r)
    {
        DB::table('tbkelas')
            ->where('id', $r->id)
            ->delete();

        return view('kelas.list')
            ->with('judul', 'Daftar kelas');
    }
}
