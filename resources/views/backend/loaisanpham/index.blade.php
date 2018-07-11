@extends('backend.layouts.app')   

@section('title')
  Danh Sách Loại Sản Phẩm
@endsection


@section('page-header')
      <h1>
        Danh Sách Loại Sản Phẩm
        <small>Danh Sách Loại Sản Phẩm</small>
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
              <h3 class="box-title">Danh Sách Loại Sản Phẩm</h3>

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
                  <th>Tên Loại</th>
                  <th>Ngày Tạo</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th style="text-align: center;" colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('loaisanpham.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Loại Sản Phẩm</a></button></th>
                </tr>
                @foreach ($dslsp as $lsp)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$lsp->lsp_ten}}</td>
                    <td>{{$lsp->lsp_taomoi}}</td>
                    <td>{{$lsp->lsp_capnhat}}</td>
                    @if ($lsp->lsp_trangthai === 1)
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('loaisanpham.edit', ['lsp' => $lsp->lsp_ma]) }}" ><i class="fa fa-edit"></i> Cập Nhật</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('loaisanpham.destroy', ['lsp' => $lsp->lsp_ma])}}">
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



