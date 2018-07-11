@extends('backend.layouts.app')   

@section('title')
  Danh Sách Sản Phẩm
@endsection


@section('page-header')
      <h1>
        Danh Sách Sản Phẩm
        <small>Danh Sách Sản Phẩm</small>
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
<!-- <a href="{{ route('sanpham.create') }}">Thêm Mới SP</a> -->
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Sản Phẩm</h3>

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
              <table class="table table-hover text-center">
                <tr>
                  <th>STT</th>
                  <th>Tên SP</th>
                  <th>Loại SP</th>
                  <th>HSX</th>
                  <th>Giá Gốc</th>
                  <th>Giá Bán</th>
                  <th>Tạo Mới</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('sanpham.create') }}" > <i class="fa fa-plus"></i> Thêm Sản Phẩm </a></button></th>
                </tr>
                @foreach ($dssanpham as $sp)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$sp->sp_ten}}</td>
                    <td>{{$sp->lsp_ten}}</td>
                    <td>{{$sp->hsx_ten}}</td>
                    <td>{{$sp->sp_giagoc}}</td>
                    <td>{{$sp->sp_giaban}}</td>
                    <td>{{$sp->sp_taomoi}}</td>
                    <td>{{$sp->sp_capnhat}}</td>
                    @if ($sp->sp_trangthai === 1)
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                     
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('sanpham.edit', ['sanpham' => $sp->sp_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('sanpham.destroy', ['sanpham' => $sp->sp_ma])}}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                        </form>
                      
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



