@extends('backend.layouts.app')   

@section('title')
  CẬP NHẬT KHO
@endsection


@section('page-header')
      <h1>
        CẬP NHẬT KHO
        <small>CẬP NHẬT KHO</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('kho.update', ['kho'=> $kho->k_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">CẬP NHẬT KHO</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN KHO</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="k_ten" placeholder="Nhập Tên Chủ Đề" value="{{$kho->k_ten}}">
          </div>
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($kho->k_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="k_trangthai", id="k_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="k_trangthai", id="k_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
                </select>
                @endif

          </div>
          
          

          <!-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div> -->
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">SỬA</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



