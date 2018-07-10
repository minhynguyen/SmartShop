<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kho;
use DB;
use Carbon\Carbon;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsKho = kho::all();
        return view('backend.kho.index')->with('dsKho',$dsKho);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kho.create');
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
        $kho = new kho();
        $kho->k_ten = $request->k_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $kho->k_trangthai = $request->k_trangthai;
        $kho->k_capnhat = Carbon::now();
        $kho->k_trangthai = Carbon::now();
        $kho->save();

        return redirect(route('kho.index')); //trả về trang cần hiển thị
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kho = kho::find($id);
        return view('backend.kho.edit')->with('kho', $kho); 
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
        $kho = kho::find($id);
        $kho->k_ten = $request->k_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $kho->k_capnhat = Carbon::now();
        $kho->k_trangthai = $request->k_trangthai;
        $kho->save();

        return redirect(route('kho.index')); //trả về trang cần hiển thị
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
        $kho = kho::find($id);
        $kho->delete();
        return redirect(route('kho.index'));
    }
}
