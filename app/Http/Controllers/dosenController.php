<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbdosen;

class dosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dosen.list')->with('judul', 'Daftar dosen');
    }
    public function create()
    {
        return view('dosen.form')->with('judul', 'form dosen');
    }

    public function store(Request $r)
    {
        $x = array(
            'nip' => $r->nip,
            'nama' => $r->nama,
            'id_jabatan' => $r->id_jabatan,
            'alamat' => $r->alamat,
            'nohp' => $r->nohp,
            'id_prodi' => $r->id_prodi,
        );


        $pesan = '';
        $rec = DB::table('tbdosen')
            ->where('nip', $r->nip)
            ->first();
        if ($rec == null) {
            DB::table('tbdosen')->insertgetId($x);
        } else {
            $pesan = "nip Sudah Terdaftar";
        }
        return view('dosen.list')
            ->with('judul', 'Daftar Dosen')
            ->with('pesan', $pesan);;
    }

    public function show($id)
    {
        return view('dosen.formedit')
            ->with('judul', 'Form Edit Dosen')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('dosen.formedit');
    }

    public function update(Request $r)
    {
        $x = array(
            'nip' => $r->nip,
            'nama' => $r->nama,
            'id_jabatan' => $r->id_jabatan,
            'nohp' => $r->nohp,
            'alamat' => $r->alamat,
            'id_prodi' => $r->id_prodi,
        );
        DB::table('tbdosen')
            ->where('id', $r->id)
            ->update($x);
        return redirect('/dosen');
    }
    public function destroy(Request $r)
    {
        DB::table('tbdosen')
            ->where('id', $r->id)
            ->delete();

        return view('dosen.list')
            ->with('judul', 'Daftar Dosen');
    }
}