@extends('backend.layouts.app')   

@section('title')
  Cập Nhật Hãng Sản Xuất
@endsection


@section('page-header')
      <h1>
        Cập Nhật Hãng Sản Xuất
        <small>Cập Nhật Hãng Sản Xuất</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('hangsanxuat.update', ['hang'=> $hang->hsx_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cập Nhật Hãng Sản Xuất</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN HÃNG SẢN XUẤT</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="hsx_ten" placeholder="Nhập Tên Hãng Sản Xuất" value="{{$hang->hsx_ten}}">
          </div>

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($hang->hsx_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="hsx_trangthai", id="hsx_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="hsx_trangthai", id="hsx_trangthai">
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



