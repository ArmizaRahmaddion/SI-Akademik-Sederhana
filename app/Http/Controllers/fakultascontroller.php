<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbfakultas;

class fakultasController extends Controller
{
    public function index()
    {
        return view("fakultas.list")
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', 'Data Fakultas');
    }

    public function create(Request $r)
    {
        return view("fakultas.form")
            ->with('judul', 'Form Fakultas');
    }

    public function store(Request $r)
    {
        $x = [
            'kode_fakultas' => $r->kode_fakultas,
            'nama_fakultas' => $r->nama_fakultas,
            'id_dekan' => $r->id_dekan,
        ];

        $rec = Tbfakultas::where('kode_fakultas', $r->kode_fakultas)->first();

        if ($rec === null) {
            Tbfakultas::create($x);
        } else {
            $pesan = "Kode Sudah Terdaftar";
            return redirect()->route('fakultas.index')
                ->with('judul', 'Daftar Fakultas')
                ->with('pesan', $pesan);
        }

        return redirect()->route('fakultas.index')
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', 'Data Fakultas berhasil disimpan');
    }

    public function show($id)
    {
        return view('fakultas.formedit')
            ->with('judul', 'Form Edit Fakultas')
            ->with('id', $id);
    }

    public function edit($id)
    {
    }

    public function update(Request $r)
    {
        $x = [
            'kode_fakultas' => $r->kode_fakultas,
            'nama_fakultas' => $r->nama_fakultas,
            'id_dekan' => $r->id_dekan,
        ];

        DB::table('tbfakultas')
            ->where('id', $r->id)
            ->update($x);

        return view('fakultas.list')
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', '');
    }

    public function destroy(Request $r)
    {
        DB::table('tbfakultas')
            ->where('id', $r->id)
            ->delete();

        return view('fakultas.list')
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', '');
    }

    public function deletefakultas(Request $r)
    {
        DB::table('tbfakultas')
            ->where('id', $r->id)
            ->delete();

        return view('fakultas.list')
            ->with('judul', 'Daftar Fakultas')
            ->with('pesan', '');
    }
}