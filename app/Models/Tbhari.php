<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbhari extends Model
{
    use HasFactory;
    
    protected $table = 'tbhari';

    protected $fillable = ['id','hari'];
}