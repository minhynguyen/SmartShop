<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use DB;
use Carbon\Carbon;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dssanpham = SanPham::all();
        $dslsp = DB::table('LoaiSanPham')->where('lsp_trangthai','2')->get();
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
        return view('backend.sanpham.index')->with('dssanpham',$dssanpham)
                                            ->with('dshsx',$dshsx)
                                            ->with('dslsp',$dslsp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dssanpham = SanPham::all();
        $dslsp = DB::table('LoaiSanPham')->where('lsp_trangthai','2')->get();
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
        return view('backend.sanpham.create')->with('dssanpham',$dssanpham)
                                            ->with('dshsx',$dshsx)
                                            ->with('dslsp',$dslsp);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $sp = new SanPham();
        $sp->sp_ten = $request->sp_ten;
        $sp->lsp_ma = $request->lsp_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->hsx_ma = $request->hsx_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_seri = $request->sp_seri; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_mota = $request->sp_mota; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_giagoc = $request->sp_giagoc; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_giaban = $request->sp_giaban; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_danhgia = $request->sp_danhgia; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_taomoi = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_trangthai = $request->sp_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $sp->save();

        return redirect(route('sanpham.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = SanPham::find($id);
        $dslsp = DB::table('LoaiSanPham')->where('lsp_trangthai','2')->get();
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
                                            
        return view('backend.sanpham.edit')->with('sp', $sp)
                                            ->with('dshsx',$dshsx)
                                            ->with('dslsp',$dslsp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $sp = SanPham::find($id);
        $sp->sp_ten = $request->sp_ten;
        $sp->lsp_ma = $request->lsp_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->hsx_ma = $request->hsx_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_seri = $request->sp_seri; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_mota = $request->sp_mota; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_giagoc = $request->sp_giagoc; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_giaban = $request->sp_giaban; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_danhgia = $request->sp_danhgia; //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $sp->sp_trangthai = $request->sp_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $sp->save();

        return redirect(route('sanpham.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = SanPham::find($id);
        $sp->delete(); return redirect(route('sanpham.index'));
    }
}
