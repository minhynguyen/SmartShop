<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use DB;
use Carbon\Carbon;


class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dslsp = LoaiSanPham::all();
        $dslsp = DB::table('LoaiSanPham')->join('HangSanXuat', 'LoaiSanPham.hsx_ma', '=', 'HangSanXuat.hsx_ma')->get();
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
        return view('backend.loaisanpham.index')->with('dslsp',$dslsp)->with('dshsx',$dshsx);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
        return view('backend.loaisanpham.create')->with('dshsx',$dshsx);
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
        $lsp = new LoaiSanPham();
        $lsp->lsp_ten = $request->lsp_ten;
        $lsp->hsx_ma = $request->hsx_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->lsp_taomoi = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->lsp_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->lsp_trangthai = $request->lsp_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $lsp->save();

        return redirect(route('loaisanpham.index')); //trả về trang cần hiển thị
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
        $lsp = LoaiSanPham::find($id);
        $dshsx = DB::table('HangSanXuat')->where('hsx_trangthai','2')->get();
        return view('backend.loaisanpham.edit')->with('lsp', $lsp)->with('dshsx',$dshsx);
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
        $lsp = LoaiSanPham::find($id);
        $lsp->lsp_ten = $request->lsp_ten;//trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->hsx_ma = $request->hsx_ma;//trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->lsp_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $lsp->lsp_trangthai = $request->lsp_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $lsp->save();

        return redirect(route('loaisanpham.index')); //trả về trang cần hiển thị
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
        $lsp = LoaiSanPham::find($id);
        $lsp->delete();
        return redirect(route('loaisanpham.index'));
    }
}
