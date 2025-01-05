@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container">
        <div class="col-122 d-flex justify-content-between">
            <h3>Danh sách loại sản phẩm</h3>
            <a href="{{ route('pvdadmin.pvdloaisanpham.pvdcreate') }}" class="btn btn-success float-end">Thêm Mới</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </thead>
                <tbody>
                    @forelse ($pvdloaisanpham as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->pvdmaloai }}</td>
                            <td>{{ $item->pvdtenloai }}</td>
                            <td>{{ $item->pvdtrangthai }}</td>
                            <td class="text-center">
                                <!-- View Button -->
                                <button class="btn btn-success" onclick="window.location.href='#/{{$item->id}}'" title="">chi tiết</button>

                                <!-- Edit Button -->
                                <button class="btn btn-primary" onclick="window.location.href='/pvd-admins/pvdloai-san-pham/pvd-edit/{{$item->id}}'" title="">Chỉnh sửa</button>

                                <!-- Delete Button -->
                                <form action="{{ route('pvdadmin.pvddeleteloaisanpham', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn chắc chắn muốn xoá loại sản phẩm này?')">
                                {{-- <form action="{{ route('pvdadmin.pvddeleteloaisanpham', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn chắc chắn muốn xoá loại sản phẩm này?')"> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="">Xoá</button>
                                </form>                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
