@extends('backend.layouts.app')   

@section('title')
  Thêm Sản Phẩm
@endsection


@section('page-header')
      <h1>
        Thêm Sản Phẩm
        <small>Thêm Sản Phẩm</small>
      </h1>
@endsection

@section('content')
<form name="frmSanPham" method="POST" action="{{route('sanpham.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  <!-- enctype="multipart/form-data" để đưa ảnh lên host -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Sản Phẩm</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Loại Sản Phẩm</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lsp_ma" id="lsp_ma">
              @foreach($dslsp as $loai)
              <option value="{{$loai->lsp_ma}}">{{$loai->lsp_ten}}</option>
              @endforeach
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Hãng Sản Xuất</label>
            
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="hsx_ma" id="hsx_ma">
              @foreach($dshsx as $hsx)
              <option value="{{$hsx->hsx_ma}}">{{$hsx->hsx_ten}}</option>
              @endforeach
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_ten" placeholder="Nhập Tên Sản Phẩm" value="{{old('sp_ten')}}">
          </div>


           <div class="form-group">
            <label for="exampleInputEmail1">Giá Gốc</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giagoc" placeholder="Nhập Giá Gốc Nhập Kho" value="{{old('sp_giagoc')}}">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Giá Bán</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_giaban" placeholder="Nhập Giá Bán" value="{{old('sp_giaban')}}">
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Seri</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="sp_seri" placeholder="Nhập Số Seri" value="{{old('sp_seri')}}">
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
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="sp_trangthai", id="sp_trangthai">
                    <option value="2">Khả Dụng</option>
                    <option value="1">Khóa</option>
                </select>
          </div>

          <div class="form-group">
                <label>Mô Tả</label>
                <textarea id="editor1" name="sp_mota" rows="10" cols="80" style="width: 100%">
                  {{old('sp_mota')}}
                </textarea>
          </div>

          <div class="form-group">
            <label>Hình Ảnh Sản Phẩm</label>
              <div id="filediv">
                <input type="file" id="file" name="images[]" multiple="multiple" accept="image/*" title="Select Images To Be Uploaded">
                <br>
            </div>
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
@section('script')
<script src="{{ asset ('theme/upload-image.js') }}"></script>
<script src="{{ asset ('theme/ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace('editor1');</script>
<script>
  $('#add_more').click(function() {
      "use strict";
      $(this).before($("<div/>", {
        id: 'filediv'
      }).fadeIn('slow').append(
        $("<input/>", {
          name: 'file[]',
          type: 'file',
          id: 'file',
          multiple: 'multiple',
          accept: 'image/*'
        })
      ));
    });

    $('#upload').click(function(e) {
      "use strict";
      e.preventDefault();

      if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
      }

      // Now, upload the files below...
      // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
    });

    function deletePreview(ele, i) {
      "use strict";
      try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
      } catch (e) {
        console.log(e.message);
      }
    }

    $("#file").on('change', function() {
      "use strict";

      // create an empty array for the files to reside.
      window.filesToUpload = [];

      if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function(i, img) {
          var reader = new FileReader(),
            newElement = $("<div id='previewImg" + i + "' class='media-object'><img width= auto; height=200/><hr/></div>"),
            deleteBtn = $("<button class='btn btn-danger delete1' onClick='deletePreview(this, " + i + ")'>Xóa Ảnh Này</button>").prependTo(newElement),
            preview = newElement.find("img");

          reader.onloadend = function() {
            preview.attr("src", reader.result);
            preview.attr("alt", img.name);
          };

          try {
            window.filesToUpload.push(document.getElementById("file").files[i]);
          } catch (e) {
            console.log(e.message);
          }

          if (img) {
            reader.readAsDataURL(img);
          } else {
            preview.src = "";
          }

          newElement.appendTo("#filediv");
        });
      }
    });
</script>

@endsection



