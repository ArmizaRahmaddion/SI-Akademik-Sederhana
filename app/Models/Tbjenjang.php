<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbjenjang extends Model
{
    use HasFactory;
    protected $table = 'tbjenjang';
    protected $fillable = ['id', 'nama_jenjang'];
}