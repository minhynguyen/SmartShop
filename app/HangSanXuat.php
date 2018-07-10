<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model
{
    const CREATED_AT ='hsx_taomoi';
    const UPDATED_AT ='hsx_capnhat';
    
    protected $table = 'HangSanXuat';
    protected $fillable = ['hsx_ten',  'hsx_taomoi', 'hsx_capnhat', 'hsx_trangthai'];
    protected $guarded = ['hsx_ma'];
    protected $primaryKey = 'hsx_ma';
    protected $dates =['hsx_taomoi', 'hsx_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
