<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HangSanXuat;
use DB;
use Carbon\Carbon;

class HangSanXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsHang = HangSanXuat::all();
        return view('backend.hangsanxuat.index')->with('dsHang',$dsHang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.hangsanxuat.create');
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
        $hang = new hangsanxuat();
        $hang->hsx_ten = $request->hsx_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $hang->hsx_taomoi = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $hang->hsx_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $hang->hsx_trangthai = $request->hsx_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $hang->save();

        return redirect(route('hangsanxuat.index')); //trả về trang cần hiển thị
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
        $hang = HangSanXuat::find($id);
        return view('backend.hangsanxuat.edit')->with('hang', $hang);
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
        $hang = HangSanXuat::find($id);
        $hang->hsx_ten = $request->hsx_ten;//trước giống tên cột sau giống tên input ở form nhập liệu
        $hang->hsx_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $hang->hsx_trangthai = $request->hsx_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $hang->save();

        return redirect(route('hangsanxuat.index')); //trả về trang cần hiển thị
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
        $hang = HangSanXuat::find($id);
        $hang->delete();
        return redirect(route('hangsanxuat.index'));
    }
}
