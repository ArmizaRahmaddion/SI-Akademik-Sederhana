<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbruangan extends Model
{
    use HasFactory;
     protected $table = 'tbruangan';
     protected $fillable = ['kode', 'nama'];
}