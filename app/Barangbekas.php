<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangbekas extends Model
{
    protected $fillable = ['nama_barang_bekas', 'berat', 'poin','image', 'keterangan'];
}
