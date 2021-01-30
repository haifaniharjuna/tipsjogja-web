<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    // mass assignment solution
    protected $fillable = ['kode_petugas','nama','password','telepon','email'];  
    use HasFactory;
}
