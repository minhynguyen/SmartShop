<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    const CREATED_AT ='dh_taomoi';
    const UPDATED_AT ='dh_capnhat';
    
    protected $table = 'DonHang';
    protected $fillable = ['kh_ma', 'dh_thoigiandat', 'dh_thoigiannhan', 'dh_nguoinhan', 'dh_diachi', 'dh_sodienthoai', 'dh_ngayxuly', 'dh_tongtien', 'dh_taomoi', 'dh_capnhat', 'dh_trangthai'];
    protected $guarded = ['dh_ma'];
    protected $primaryKey = 'dh_ma';
    protected $dates =['dh_taomoi', 'dh_capnhat', 'dh_ngayxuly', 'dh_thoigiannhan', 'dh_thoigiandat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
