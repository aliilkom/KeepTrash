<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tukarpoin extends Model
{
    protected $fillable = ['nama_barang', 'nilai_tukar', 'image', 'keterangan'];
}
