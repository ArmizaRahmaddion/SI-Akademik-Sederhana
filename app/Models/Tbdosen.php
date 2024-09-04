<?php

namespace App\Models;

use App\Models\Tbjabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tbdosen extends Model
{
    use HasFactory;

    protected $table = 'tbdosen';
    protected $fillable = ['id', 'id_jabatan', 'nip', 'nama', 'alamat', 'nohp'];

    public function tbjabatan(): BelongsTo
    {
        return $this->belongsTo(Tbjabatan::class, 'id_jabatan');
    }
    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Tbprodi::class, 'id_prodi');
    }
}