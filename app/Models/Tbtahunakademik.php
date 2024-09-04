<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbtahunakademik extends Model
{
    use HasFactory;

    protected $table = 'tbtahunakademik';
    protected $fillable = ['kode_akademik', 'nama_akademik',];

}