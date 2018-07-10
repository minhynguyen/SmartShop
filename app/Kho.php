<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    const CREATED_AT ='k_taomoi';
    const UPDATED_AT ='k_capnhat';
    
    protected $table = 'Kho';
    protected $fillable = ['k_ten',  'k_taomoi', 'k_capnhat', 'k_trangthai'];
    protected $guarded = ['k_ma'];
    protected $primaryKey = 'k_ma';
    protected $dates =['k_taomoi', 'k_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
