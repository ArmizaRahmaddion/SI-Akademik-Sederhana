<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbjabatan extends Model
{
    use HasFactory;
    protected $table = 'tbjabatan';
    protected $fillable = ['id', 'nama_jabatan'];

    public function tbdosen()
    {
        return $this->hasOne(Tbdosen::class, 'id_jabatan');
    }
}
