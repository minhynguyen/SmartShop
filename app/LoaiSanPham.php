<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    const CREATED_AT ='lsp_taomoi';
    const UPDATED_AT ='lsp_capnhat';
    
    protected $table = 'LoaiSanPham';
    protected $fillable = ['lsp_ten', 'lsp_taomoi', 'lsp_capnhat', 'lsp_trangthai'];
    protected $guarded = ['lsp_ma'];
    protected $primaryKey = 'lsp_ma';
    protected $dates =['lsp_taomoi', 'lsp_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
