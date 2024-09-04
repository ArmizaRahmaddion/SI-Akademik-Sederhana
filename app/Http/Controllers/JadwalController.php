<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fakultas;

class JadwalController extends Controller
{
    public function index(Request $r)
    {
        return view('Jadwal.list')
        ->with('pesan','') 
        ;
    }

    public function create(Request $r)
    {
        return view('Jadwal.form');
    }

    public function store(Request $r)
    {
        $x = array(
            'id_hari' => $r->input('id_hari'), 
            'id_ruangan' => $r->input('id_ruangan'),
            'id_dosen' => $r->input('id_dosen'),
            'id_kelas' => $r->input('id_kelas'),
            'id_matakuliah' => $r->input('id_matakuliah'),
            'id_tahunakademik' => $r->input('id_tahunakademik'),
            'jammasuk' => $r->input('jammasuk'),
            'jamkeluar' => $r->input('jamkeluar'),
        
        );

        $pesan='';
        $rec=DB::table('tbjadwal')
        ->where('id',$r->id)
        ->first();
        if($rec==null){
            DB::table('tbjadwal')->insertGetId($x);
        } else {
            $pesan="Nip Sudah Terdaftar";
        }

        return view('Jadwal.list')
        ->with('pesan', $pesan); ;
    }

    public function show($id)
    {
        return view('Jadwal.formedit')
        ->with('id',$id);
    }

    public function update(Request $r){
       
        $x=array(
            'id_hari'=>$r->id_hari,
            'id_ruangan'=>$r->id_ruangan,
            'id_dosen'=>$r->id_dosen,
            'id_kelas'=>$r->id_kelas,
            'id_matakuliah'=>$r->id_matakuliah,
            'id_tahunakademik'=>$r->id_tahunakademik,
            'jammasuk'=>$r->jammasuk,
            'jamkeluar'=>$r->jamkeluar,
            
        );

        DB::table('tbjadwal')
        ->where('id',$r->id)
        ->update($x);

        return view ('Jadwal.list');
    }

    public function destroy(Request $r){
        DB::table('tbjadwal')
        ->where('id',$r->id)
        ->delete();

        return view ('Jadwal.list')
        ;
    }
}