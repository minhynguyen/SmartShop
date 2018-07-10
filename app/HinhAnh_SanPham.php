<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh_SanPham extends Model
{
    public    $timestamps   = false;

    protected $table        = 'HinhAnh_SanPham';
    protected $fillable     = ['sp_ma', 'ha_ten'];
    public    $incrementing = false;
}
