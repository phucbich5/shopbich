@extends('backend.layout.master')

@section('title')
    Thêm hình ảnh liên quan
@endsection

@section('feature-title')
    Thêm hình ảnh liên quan
@endsection

@section('feature-description')
    Thêm hình ảnh liên quan. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('custom-css')
    <style>
        .preview-upload {
            border: 1px solid;
            width: 60px !important;
            height: 60px !important;
            border-radius: 50%;
        }

        .preview-upload img {
            max-width: 60px;
            border-radius: 50%;
        }
    </style>
@endsection

@section('content')
    <div class="p-3 bg-dark" style="color: #fff !important; border-radius:10px">
        <form method="post" action="{{ route('backend.sanpham.store_img_lq') }}">
            {{ csrf_field() }}
            <div class="d-flex">
                <div class="form-group mr-4">
                    <label for="sp_ma">Tên sản phẩm</label>
                    <select name="sp_ma" class="form-control">
                        @foreach ($sanpham as $sp)
                            <option value="{{ $sp->sp_ma }}">{{ $sp->sp_ten }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-2 mr-4">
                    <label for="ha_stt">Thứ tự hình ảnh</label><br>
                    <input id="ha_stt" type="number" name="ha_stt">
                </div>
                <div class="form-group d-flex my-2">
                    <div class="file-loading" style="width:50%;">
                        <label>Hình liên quan</label>
                        <input id="ha_ten" type="file" name="ha_ten">
                    </div>
                    <div class="preview-upload">
                        <img id='ha_ten-upload' style="width:60px" />
                    </div>
                </div>
    
            </div>
    
            <button class="btn btn-primary">Add</button>
        </form>
    </div>
    
    <div class="mt-5 p-3 bg-light" style="border-radius: 10px" >
        <table class="table table-striped table-bordered mt-5" id="img_lienquan">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số thứ tự hình</th>
                    <th>Hình ảnh</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($img_lienquan as $img_lq)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $img_lq->ma_sanpham->sp_ten }}</td>
                        <td>{{ $img_lq->ha_stt }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . $img_lq->ha_ten) }}" class="sanpham-thumbnail" />
                        </td>
    
                        <td>
                            <form class="d-inline" method="post"
                                action="{{ route('backend.sanpham.destroy_img_lq', ['id' => $img_lq->sp_ma]) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
@endsection

@section('custom-scripts')
    <script>
        // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#ha_ten-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
        $("#ha_ten").change(function() {
            readURL(this);
        });

        $(document).ready(function() {
            $('#img_lienquan').DataTable();
        });
    </script>
@endsection
