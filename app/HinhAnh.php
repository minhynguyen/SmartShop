<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'HinhAnh';
    protected $fillable     = ['ha_ma', 'ha_ten'];
    public    $incrementing = false;
}
