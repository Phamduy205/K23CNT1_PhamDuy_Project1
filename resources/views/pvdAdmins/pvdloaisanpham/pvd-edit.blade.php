@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm')

@section('content-body')
    <div class="container boder">
        <div class="row">
            <div class="col">
                <form action="{{ route('pvdadmin.pvdeditloaisanphamSubmit', $pvdlsp->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $pvdlsp->id }}">
                    <div class="card-header">
                        <h2>Sửa thông tin loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <!-- Mã Loại -->
                        <div class="mb-3 row">
                            <label for="pvdmaloai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $pvdlsp->pvdmaloai }}" id="pvdmaloai" name="pvdmaloai">
                            </div>
                        </div>

                        <!-- Tên Loại -->
                        <div class="mb-3 row">
                            <label for="pvdtenloai" class="col-sm-2 col-form-label">Tên Loại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $pvdlsp->pvdtenloai }}" id="pvdtenloai" name="pvdtenloai">
                            </div>
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3 row">
                            <label for="pvdtrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pvdtrangthai1" name="pvdtrangthai" value="1" {{ $pvdlsp->pvdtrangthai == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pvdtrangthai1">Hiển thị</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pvdtrangthai0" name="pvdtrangthai" value="0" {{ $pvdlsp->pvdtrangthai == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pvdtrangthai0">Khóa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                        <a href="{{ route('pvdadmin.pvd-list') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection