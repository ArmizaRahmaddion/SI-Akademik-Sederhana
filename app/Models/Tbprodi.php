<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tbprodi extends Model
{
    use HasFactory;
    protected $table = 'tbprodi';
    protected $fillable = ['id_fakultas', 'kode', 'nama', 'id_jenjang', 'tglsk', 'akreditasi'];

    public function tbfakultas(): BelongsTo
    {
        return $this->belongsTo(Tbfakultas::class, 'id_fakultas');
    }
    public function tbjenjang(): BelongsTo
    {
        return $this->belongsTo(Tbjenjang::class, 'id_jenjang');
    }
}