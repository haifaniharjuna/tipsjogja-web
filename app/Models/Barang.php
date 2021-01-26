<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    // mass assignment solution
    protected $fillable = ['kode_barang','nama_barang','satuan','harga_distributor','harga_retail','stok'];
    use HasFactory;
}
