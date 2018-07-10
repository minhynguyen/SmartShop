@extends('backend.layouts.app')   

@section('title')
  Sửa SP
@endsection


@section('page-header')
      <h1>
        Sửa SP
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
      </h1>
@endsection

@section('content')
<form name="frmSanPham" method="POST" action="{{route('sanpham.update', ['sanpham'=> $sanpham->sp_ma]) }}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa SP</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Loại</label>
            <select name="l_ma" id="l_ma">
              @foreach($dsLoai as $loai)
              <option value="{{$loai->l_ma}}" <?php echo ($loai->l_ma == $sanpham->l_ma) ? 'selected' : ''  ?>>{{$loai->l_ten}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN SP</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_ten" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_ten}}">
          </div>
           <div class="form-group">

            <label for="exampleInputEmail1">gia goc</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giagoc" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_giagoc}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">gia ban</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giaban" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_giaban}}">
          </div>
          <div class="form-group">
            <img src="{{ asset('upload/' . $sanpham->sp_hinh)}}" width="50px", height="50px">
            <label for="exampleInputEmail1">hinh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="sp_hinh" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_hinh}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">thong tin</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_thongtin" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_thongtin}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">danh gia</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_danhgia" placeholder="Nhập Tên Chủ Đề" value="{{$sanpham->sp_danhgia}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">TRẠNG THÁI</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sp_trangthai" placeholder="Nhập Trạng Thái" value="{{$sanpham->sp_trangthai}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tao moi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sp_taomoi" placeholder="Nhập Trạng Thái" value="{{$sanpham->sp_taomoi}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">cap nhat</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sp_capnhat" placeholder="Nhập Trạng Thái" value="{{$sanpham->sp_capnhat}}">
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
          <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



