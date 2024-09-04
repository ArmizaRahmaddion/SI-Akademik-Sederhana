<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TbMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tbmahasiswa';
    protected $fillable = ['nim', 'nama', 'nohp', 'alamat', 'id_pa', 'id_prodi','id_fakultas'];

    public function dosenpa(): BelongsTo
    {
        return $this->belongsTo(Tbdosen::class, 'id_pa');
    }
    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Tbprodi::class, 'id_prodi');
    }
    public function tbfakultas(): BelongsTo
    {
        return $this->belongsTo(Tbfakultas::class, 'id_fakultas');
    }
}