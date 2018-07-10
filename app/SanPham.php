<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    const CREATED_AT ='sp_taomoi';
    const UPDATED_AT ='sp_capnhat';
    
    protected $table = 'SanPham';
    protected $fillable = ['sp_ten', 'lsp_ma', 'hsx_ma', 'sp_seri', 'sp_mota', 'sp_giagoc', 'sp_giaban', 'sp_danhgia', 'sp_taomoi', 'sp_capnhat', 'sp_trangthai'];
    protected $guarded = ['sp_ma'];
    protected $primaryKey = 'sp_ma';
    protected $dates =['sp_taomoi', 'sp_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
