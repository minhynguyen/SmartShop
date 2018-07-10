<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use DB;
use Carbon\Carbon;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsKhach = KhachHang::all();
        return view('backend.khachhang.index')->with('dsKhach',$dsKhach);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.khachhang.create');
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
        $khach = new KhachHang();
        $khach->kh_hoten = $request->kh_hoten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_taikhoan = $request->kh_taikhoan; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $khach->kh_gioitinh = $request->kh_gioitinh; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_email = $request->kh_email; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_diachi = $request->kh_diachi; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_dienthoai = $request->kh_dienthoai; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_taomoi = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_trangthai = $request->kh_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $khach->save();

        return redirect(route('khachhang.index')); //trả về trang cần hiển thị
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
        $khach = KhachHang::find($id);
        return view('backend.khachhang.edit')->with('khach', $khach);
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
        $khach = KhachHang::find($id);

        $khach->kh_hoten = $request->kh_hoten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_taikhoan = $request->kh_taikhoan; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_gioitinh = $request->kh_gioitinh; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_email = $request->kh_email; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_diachi = $request->kh_diachi; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_dienthoai = $request->kh_dienthoai; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_capnhat = Carbon::now(); //trước giống tên cột sau giống tên input ở form nhập liệu
        $khach->kh_trangthai = $request->kh_trangthai; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $khach->save();

        return redirect(route('khachhang.index')); //trả về trang cần hiển thị
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
        $khach = KhachHang::find($id);
        $khach->delete();
        return redirect(route('khachhang.index'));
    }
}
