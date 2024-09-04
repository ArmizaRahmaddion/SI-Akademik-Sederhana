<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbmatakuliah extends Model
{
    use HasFactory;
     protected $table = 'tbmatakuliah';
     protected $fillable = ['sks', 'jam','nama','kode','ruangan','hari'];
}