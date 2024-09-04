<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tbfakultas extends Model
{
    use HasFactory;

    protected $table = 'tbfakultas';
    protected $fillable = ['kode_fakultas', 'nama_fakultas', 'id_dekan'];

    public function tbdosen(): BelongsTo
    {
        return $this->belongsTo(Tbdosen::class, 'id_dekan');
    }
}