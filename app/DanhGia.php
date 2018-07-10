<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    public    $timestamps   = false;

    protected $table        = 'DanhGia';
    protected $fillable     = ['sp_ma', 'kh_ma', 'dg_sosao'];
    public    $incrementing = false;
}
