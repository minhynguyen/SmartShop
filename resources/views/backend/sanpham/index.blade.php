@extends('backend.layouts.app')   

@section('title')
  Danh Sách SP
@endsection


@section('page-header')
      <h1>
        Danh Sách SP
        <small>Danh Sách SP</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<!-- <a href="{{ route('sanpham.create') }}">Thêm Mới SP</a> -->
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các SP</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center">
                <tr>
                  <th>Ma</th>
                  <th>Ten</th>
                  <th>gia goc</th>
                  <th>gia ban</th>
                  <th>hinh</th>
                  <th>thong tin</th>
                  <th>danh gia</th>
                  <th>Tao Moi</th>
                  <th>Cap Nhat</th>
                  <th>Trang Thai</th>
                  <th>loai</th>
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('sanpham.create') }}" > <i class="fa fa-plus"></i> Thêm Sản Phẩm </a></button></th>
                </tr>
                @foreach ($dsSanPham as $sp)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$sp->sp_ma}}</td>
                    <td>{{$sp->sp_ten}}</td>
                    <td>{{$sp->sp_giagoc}}</td>
                    <td>{{$sp->sp_giaban}}</td>
                    <!-- <td>{{$sp->sp_hinh}}</td> -->
                    <td><img src="{{ asset('upload/' . $sp->sp_hinh)}}" width="50px", height="50px"> </td>
                    <td>{{$sp->sp_thongtin}}</td>
                    <td>{{$sp->sp_danhgia}}</td>
                    <td>{{$sp->sp_taomoi}}</td>
                    <td>{{$sp->sp_capnhat}}</td>
                    <td>{{$sp->sp_trangthai}}</td>
                    <td>{{$sp->loai -> l_ten}}</td>
                     
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



