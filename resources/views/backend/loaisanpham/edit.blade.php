@extends('backend.layouts.app')   

@section('title')
  CẬP NHẬT LOẠI SẢN PHẨM
@endsection


@section('page-header')
      <h1>
        CẬP NHẬT LOẠI SẢN PHẨM
        <small>CẬP NHẬT LOẠI SẢN PHẨM</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('loaisanpham.update', ['loaisanpham'=> $lsp->lsp_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">CẬP NHẬT LOẠI SẢN PHẨM</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Loại Sản Phẩm</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lsp_ten" placeholder="Nhập Tên Chủ Đề" value="{{$lsp->lsp_ten}}">
          </div>


          <div class="form-group">
                <label>Hãng Sản Xuất</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="hsx_ma", id="hsx_ma">
                  @foreach($dshsx as $hsx)
                    <option value="{{$hsx->hsx_ma}}" <?php echo ($hsx->hsx_ma == $lsp->hsx_ma) ? 'selected' : ''  ?>>{{$hsx->hsx_ten}}</option>
                  @endforeach
                </select>
          </div>
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($lsp->lsp_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="lsp_trangthai", id="lsp_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="lsp_trangthai", id="lsp_trangthai">
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



