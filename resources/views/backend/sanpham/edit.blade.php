@extends('backend.layouts.app')   

@section('title')
  Cập Nhật Sản Phẩm
@endsection


@section('page-header')
      <h1>
        Cập Nhật Sản Phẩm
        <small>Cập Nhật Sản Phẩm</small>
      </h1>
@endsection

@section('content')
  <form name="frmLoai" method="POST" action="{{route('sanpham.update', ['sanpham'=> $sp->sp_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cập Nhật Sản Phẩm</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Loại Sản Phẩm</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lsp_ma" id="lsp_ma">
              @foreach($dslsp as $loai)
              <option value="{{$loai->lsp_ma}}" <?php echo ($loai->lsp_ma == $sp->lsp_ma) ? 'selected' : ''  ?>>{{$loai->lsp_ten}}</option>
              @endforeach
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Hãng Sản Xuất</label>
            
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="hsx_ma" id="hsx_ma">
              
              @foreach($dshsx as $hsx)
              <option value="{{$hsx->hsx_ma}}" <?php echo ($hsx->hsx_ma == $sp->hsx_ma) ? 'selected' : ''  ?>>{{$hsx->hsx_ten}}</option>
              @endforeach
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_ten" placeholder="Nhập Tên Sản Phẩm" value="{{$sp->sp_ten}}">
          </div>


           <div class="form-group">
            <label for="exampleInputEmail1">Giá Gốc</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giagoc" placeholder="Nhập Giá Gốc Nhập Kho" value="{{$sp->sp_giagoc}}">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Giá Bán</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giaban" placeholder="Nhập Giá Bán" value="{{$sp->sp_giaban}}">
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Seri</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_seri" placeholder="Nhập Số Seri" value="{{$sp->sp_seri}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Đánh Giá</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="sp_danhgia" id="sp_danhgia">
              <option value="0">0 Sao</option>
              <option value="1">1 Sao</option>
              <option value="2">2 Sao</option>
              <option value="3">3 Sao</option>
              <option value="4">4 Sao</option>
              <option value="5">5 Sao</option>
            </select>
          </div>

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($sp->sp_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="sp_trangthai", id="sp_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="sp_trangthai", id="sp_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
                </select>
                @endif

          </div>

          <div class="form-group">
                <label>Mô Tả</label>
                <textarea id="editor1" name="sp_mota" rows="10" cols="80" style="width: 100%">
                  {{$sp->sp_mota}}
                </textarea>
          </div>

          <div class="form-group">
            <label>Hình Ảnh Nhà Trọ</label>
              <div id="filediv">
                <input type="file" id="file" name="images[]" multiple="multiple" accept="image/*" title="Select Images To Be Uploaded">
                <br>
            </div>
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
@section('script')
<script src="{{ asset ('theme/upload-image.js') }}"></script>
<script src="{{ asset ('theme/ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace('editor1');</script>


@endsection


