<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TigaA3Controller extends Controller
{
    public function perkalian(){
        return view ('perkalian2')
        ;
    }
    public function penjumlahan(){
        return view ('penjumlahan2')
        ;
    }
    public function daftarbarang(){
        return view ('daftarbarang2')
        ;
    }
    public function berita (request $r){
        $berita= $r->berita;
        return view ('berita')
        ->with('berita', $berita)
        ;
    }

    public function mahasiswa(){
            return view ('mahasiswa')
            ;
    }

    public function matakuliah(){
        return view ('matakuliah')
        ;
}

    public function dosen(){
    return view ('dosen')
    ;
}


public function fakultas(){
    return view ('fakulltas')
    ;
}

public function prodi(){
    return view ('prodi')
    ;
}

public function tahunakademik(){
    return view ('tahunakademik')
    ;
}
        
}
