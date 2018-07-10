@extends('backend.layouts.app')   

@section('title')
  Cập Nhật Thông Tin Khách Hàng
@endsection


@section('page-header')
      <h1>
        Cập Nhật Thông Tin Khách Hàng
        <small>Cập Nhật Thông Tin Khách Hàng</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('khachhang.update', ['khach'=> $khach->kh_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cập Nhật Thông Tin Khách Hàng</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Khách Hàng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_hoten" placeholder="Nhập Tên Khách Hàng" value="{{$khach->kh_hoten}}">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Tài Khoản</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_taikhoan" placeholder="Nhập Tài Khoản" value="{{$khach->kh_taikhoan}}">
          </div>

          
          <div class="form-group">
                <label>Giới Tính</label>
                @if ($khach->kh_gioitinh === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_gioitinh", id="kh_gioitinh">
                    <option value="1" selected="">Nữ</option> 
                    <option value="0">Nam</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_gioitinh", id="kh_gioitinh">
                    <option value="1" >Nữ</option> 
                    <option value="0" selected>Nam</option>
                </select>
                @endif

          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Email</label>
            <input type="Email" class="form-control" id="exampleInputEmail1" name="kh_email" placeholder="Nhập Email" value="{{$khach->kh_email}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Địa Chỉ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_diachi" placeholder="Nhập Địa Chỉ Cụ Thể" value="{{$khach->kh_diachi}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Điện Thoại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_dienthoai" placeholder="Nhập Số Điện Thoại" value="{{$khach->kh_dienthoai}}">
          </div>
          


          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($khach->kh_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_trangthai", id="kh_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_trangthai", id="kh_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
                </select>
                @endif

          </div>
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



