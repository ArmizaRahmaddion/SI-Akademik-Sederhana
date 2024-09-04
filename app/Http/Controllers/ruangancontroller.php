<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ruanganController extends Controller
{
    public function index()
    {
        return view('ruangan.list')->with('judul', 'Daftar ruangan');
    }

    public function create()
    {
        return view('ruangan.form')->with('judul', 'Form ruangan');
    }

    public function store(Request $r)
    {
        $x = array(
            'kode' => $r->kode,
            'nama' => $r->nama,
        );

        DB::table('tbruangan')->insert($x);

        return view('ruangan.list')
            ->with('nim', $r->nim)
            ->with('nama', $r->nama);
    }

    public function show($id)
    {
        return view('ruangan.formedit')
            ->with('judul', 'Form Edit ruangan')
            ->with('id', $id);
    }

    public function edit()
    {
        return view('ruangan.formedit');
    }

    public function update(Request $r)
    {


        $x = array(
            'kode' => $r->kode,
            'nama' => $r->nama,
        );
        DB::table('tbruangan')
            ->where('id', $r->id)
            ->update($x);

        // Redirect to the list view after updating the record
        return redirect('/ruangan');
    }
    public function destroy(Request $r)
    {
        DB::table('tbruangan')
            ->where('id', $r->id)
            ->delete();

        return view('ruangan.list')
            ->with('judul', 'Daftar ruangan');
    }
}
