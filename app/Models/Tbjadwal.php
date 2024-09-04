<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tbjadwal extends Model
{
    use HasFactory;
    
    protected $table = 'tbjadwal';
    protected $fillable = ['id','id_hari','id_ruangan','id_dosen','id_kelas','id_matakuliah','id_tahunakademik','jammasuk','jamkeluar'];

    public function Tbhari(): Belongsto
    {
        return $this->belongsTo(Tbhari::class,'id_hari');
        
    }
    public function Tbruangan(): Belongsto
    {
        return $this->belongsTo(Tbruangan::class,'id_ruangan');
        
    }
    public function Tbdosen(): Belongsto
    {
        return $this->belongsTo(Tbdosen::class,'id_dosen');
        
    }
    public function Tbkelas(): Belongsto
    {
        return $this->belongsTo(Tbkelas::class,'id_kelas');
        
    }
    public function Tbmatakuliah(): Belongsto
    {
        return $this->belongsTo(Tbmatakuliah::class,'id_matakuliah');
        
    }
    public function Tbtahunakademik(): Belongsto
    {
        return $this->belongsTo(Tbtahunakademik::class,'id_tahunakademik');
        
    }
}