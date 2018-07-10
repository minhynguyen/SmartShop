@extends('backend.layouts.app')   

@section('title')
  Thêm Khách Hàng
@endsection


@section('page-header')
      <h1>
        Thêm Khách Hàng
        <small>Thêm Khách Hàng</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('khachhang.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Khách Hàng</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Khách Hàng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_hoten" placeholder="Nhập Tên Khách Hàng">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Tài Khoản</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_taikhoan" placeholder="Nhập Tài Khoản">
          </div>

          
          <div class="form-group">
                <label>Giới Tính</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_gioitinh", id="kh_gioitinh">
                  <!-- <select > -->
                    <option value="1">Nữ</option>
                    <option value="0">Nam</option>
                  <!-- </select> -->
                </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Email</label>
            <input type="Email" class="form-control" id="exampleInputEmail1" name="kh_email" placeholder="Nhập Email">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Địa Chỉ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_diachi" placeholder="Nhập Địa Chỉ Cụ Thể">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Điện Thoại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_dienthoai" placeholder="Nhập Số Điện Thoại">
          </div>
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_trangthai", id="kh_trangthai">
                  <!-- <select > -->
                    <option value="2">Khả Dụng</option>
                    <option value="1">Khóa</option>
                  <!-- </select> -->
                </select>
          </div>
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">THÊM MỚI</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



