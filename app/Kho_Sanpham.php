<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho_Sanpham extends Model
{
    public    $timestamps   = false;

    protected $table        = 'Kho_Sanpham';
    protected $fillable     = ['k_ma', 'sp_ma', 'bksp_soluongton'];
    

    public    $incrementing = false;


}
