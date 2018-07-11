@extends('backend.layouts.app')   

@section('title')
  Danh Sách Các Khách Hàng
@endsection


@section('page-header')
      <h1>
        Danh Sách Các Khách Hàng
        <small>Danh Sách Các Khách Hàng</small>
      </h1>
@endsection


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<style>
  a {
    color: #ffffff !important;
}
td{
  text-align: center; !important;
}

th{
  text-align: center; !important;
}
</style>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các Khách Hàng</h3>

              <!-- <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>STT</th>
                  <th>Tên Khách Hàng</th>
                  <th>Tài Khoản</th>
                  <th>Giới Tính</th>
                  <th>Email</th>
                  <th>Địa Chỉ</th>
                  <th>Điện Thoại</th>
                  <th>Ngày Tạo</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th style="text-align: center;" colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('khachhang.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Khách Hàng</a></button></th>
                </tr>
                @foreach ($dsKhach as $kh)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{$kh->kh_hoten}}</td>
                    <td>{{$kh->kh_taikhoan}}</td>
                    @if ($kh->kh_gioitinh === 1)
                        <td style="text-align: center;">Nữ</td>
                    @else
                        <td style="text-align: center;">Nam</td>
                    @endif
                    
                    <td>{{$kh->kh_email}}</td>
                    <td>{{$kh->kh_diachi}}</td>
                    <td>{{$kh->kh_dienthoai}}</td>
                    <td>{{$kh->kh_taomoi}}</td>
                    <td>{{$kh->kh_capnhat}}</td>
                    @if ($kh->kh_trangthai === 1)
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('khachhang.edit', ['khachhang' => $kh->kh_ma]) }}" ><i class="fa fa-edit"></i> Cập Nhật</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('khachhang.destroy', ['khachhang' => $kh->kh_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Xóa </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



