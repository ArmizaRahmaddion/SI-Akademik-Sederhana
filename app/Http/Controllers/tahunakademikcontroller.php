<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbtahunakademik;

class tahunakademikController extends Controller
{
    public function index()
    {
        return view('tahunakademik.list')->with('judul', 'Daftar tahunakademik');
    }
    public function create()
    {
        return view('tahunakademik.form')->with('judul', 'form tahunakademik');
    }

    public function store(Request $r)
    {
        $x = array(
            'kode_akademik' => $r->kode_akademik,
            'nama_akademik' => $r->nama_akademik,
        );


        $pesan = '';
        $rec = DB::table('tbtahunakademik')
            ->where('kode_akademik', $r->kode_akademik)
            ->first();
        if ($rec === null) {
            Tbtahunakademik::create($x);
        } else {
            $pesan = "kode Sudah Terdaftar";
        }
        return view('tahunakademik.list')
            ->with('judul', 'Daftar tahunakademik')
            ->with('pesan', $pesan);;
    }

    public function show($id)
    {
        return view('tahunakademik.formedit')
            ->with('judul', 'Form Edit tahunakademik')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('tahunakademik.edit');
    }

    public function update(Request $r)
    {
        $x = array(
            'kode_akademik' => $r->kode_akademik,
            'nama_akademik' => $r->nama_akademik,
        );
        DB::table('tbtahunakademik')
            ->where('id', $r->id)
            ->update($x);

        return view('tahunakademik.list')
            ->with('judul', 'Daftar Tahunakademik');
    }
    public function destroy(Request $r)
    {
        DB::table('tbtahunakademik')
            ->where('id', $r->id)
            ->delete();

        return view('tahunakademik.list')
            ->with('judul', 'Daftar Tahunakademik');
    }
}
