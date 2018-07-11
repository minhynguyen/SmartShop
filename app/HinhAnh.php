<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'HinhAnh';
    protected $fillable     = [ 'ha_ten'];
    protected $guarded = ['ha_ma'];
    protected $primaryKey = 'ha_ma';
}
