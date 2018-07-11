@extends('backend.layouts.app')   

@section('title')
  Thêm Loại Sản Phẩm
@endsection


@section('page-header')
      <h1>
        Thêm Loại Sản Phẩm
        <small>Thêm Loại Sản Phẩm</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('loaisanpham.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Loại Sản Phẩm</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Loại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lsp_ten" placeholder="Nhập Tên Loại Sản Phẩm">
          </div>

          

          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lsp_trangthai", id="lsp_trangthai">
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



