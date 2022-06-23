@extends('backend.layout.master')

@section('title')
    Danh sách Sản phẩm
@endsection

@section('feature-title')
    Danh sách Sản phẩm
@endsection

@section('feature-description')
    Danh sách các Sản phẩm có trong Hệ thống. Bạn có thể CRUD!
@endsection

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/DataTables-1.10.7/media/css/jquery.dataTables.css">

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@section('content')
    <a href="{{ route('backend.sanpham.create') }}" class="btn btn-primary">Thêm mới Sản phẩm</a>
    <a href="{{ route('backend.sanpham.print') }}" class="btn btn-success">In danh sách Sản phẩm</a>
    <a href="{{ route('backend.sanpham.pdf') }}" class="btn btn-danger">Xuất PDF Sản phẩm</a>
    <table class="table table-striped table-bordered" id="table_sanpham">
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Mã sản phẩm</th>
                <th>Giá gốc</th>
                <th>Loại sản phẩm</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            ?>
            @foreach ($danhsachsanpham as $sp)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>
                        <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="sanpham-thumbnail" />
                    </td>
                    <td>{{ $sp->sp_ten }}</td>
                    <td>{{ $sp->sp_giaGoc }}</td>
                    <td>{{ $sp->loaisanpham->l_ten }}</td>
                    <td>
                        <a href="{{ route('backend.sanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-success">Sửa</a>
                        <form class="d-inline" method="post"
                            action="{{ route('backend.sanpham.destroy', ['id' => $sp->sp_ma]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</button>
                        </form>
                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('backend.sanpham.destroy', ['id' => $sp->sp_ma]) }}">Xóa</a> --}}

                    </td>
                </tr>
                <?php
                $stt++;
                ?>
            @endforeach
        </tbody>
    </table>
    {{ $danhsachsanpham->links() }}
@endsection
<script>
    $(document).ready(function() {
        $('#table_sanpham').DataTable();
    });
</script>
