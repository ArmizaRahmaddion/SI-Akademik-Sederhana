<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Tbkelas extends Model
{
    use HasFactory;
    protected $table = 'tbkelas';
    protected $fillable = ['kode_kelas', 'nama_kelas', 'id_tahunakademik'];

    public function tbtahunakademik(): BelongsTo
{
    return $this->belongsTo(Tbtahunakademik::class, 'id_tahunakademik');
}
}