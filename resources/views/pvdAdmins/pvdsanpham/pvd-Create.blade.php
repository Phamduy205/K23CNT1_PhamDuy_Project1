@extends('_layouts.admins._master')
@section('title', 'Thêm sản phẩm')
@section('content-body')
<style>
    .input {
        font-size: larger;
        font-weight: bolder;
    }

    input[type="file"] {
        margin-top: -10px;
        padding: 15px;
        font-size: 16px;
        border: 2px solid #ced4da;
        border-radius: 5px;
        background-color: #f8f9fa;
        cursor: pointer;
    }

    input[type="file"]:hover {
        border-color: #80bdff;
        background-color: #e9ecef;
    }

    input[type="file"]:focus {
        border-color: #80bdff;
        outline: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('pvdadmin.pvdloaisanpham.pvdcreatesubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2>Thêm mới sản phẩm</h2>
                    </div>
                    <div class="card-body">
                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdmasanpham" class="col-form-label">Mã sản phẩm</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="pvdmasanpham" class="form-control" name="pvdmasanpham" style="height: 60px"  value="{{old('pvdmasanpham')}}">
                            </div>
                            @error('pvdmasanpham')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdtensanpham" class="col-form-label">Tên sản phẩm</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="pvdtensanpham" class="form-control" name='pvdtensanpham' style="height: 60px"  value="{{old('pvdtensanpham')}}">
                            </div>
                            @error('pvdtensanpham')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdhinhanh" class="col-form-label">Hình ảnh</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="pvdhinhanh" id="pvdhinhanh" style="height: 60px;" onchange="previewImage(event)">
                                </div>
                                @error('pvdhinhanh')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                                <div class="mt-3">
                                    <!-- Hiển thị hình ảnh hiện tại nếu có -->
                                    @if(isset($oldImage))
                                        <p>Hình ảnh hiện tại:</p>
                                        <img src="{{ asset('path/to/images/' . $oldImage) }}" alt="Hình ảnh hiện tại" id="currentImage" style="max-width: 100%; max-height: 150px;">
                                    @endif
                                    <!-- Hiển thị bản xem trước -->
                                    <p class="mt-2" id="previewText" style="display: none;">Hình ảnh mới:</p>
                                    <img id="previewImage" style="max-width: 100%; max-height: 150px; display: none;">
                                </div>
                            </div>
                        </div>


                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdsoluong" class="col-form-label">Số lượng</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="number" id="pvdsoluong" class="form-control" name='pvdsoluong' style="height: 60px"  value="{{old('pvdsoluong')}}">
                            </div>
                            @error('pvdsoluong')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvddongia" class="col-form-label">Đơn giá</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="number" id="pvddongia" class="form-control" name='pvddongia' style="height: 60px"  value="{{old('pvddongia')}}">
                            </div>
                            @error('pvddongia')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdmaloai" class="col-form-label">Mã loại</label>
                            </div>
                            <div class="col-3 border-3">
                                <select class="form-select" name="pvdmaloai" style="font-size: 1.5rem; border-width: 3px; border-style: solid; height: 60px;">
                                    <option value="" disabled {{ old('pvdmaloai', isset($oldMaLoai) ? $oldMaLoai : '') == '' ? 'selected' : '' }}>Chọn mã loại</option>
                                    @foreach($pvdloaisanphams as $loai)
                                        <option value="{{ $loai->pvdmaloai }}"
                                            {{ old('pvdmaloai', isset($oldMaLoai) ? $oldMaLoai : '') == $loai->pvdmaloai ? 'selected' : '' }}>
                                            {{ $loai->pvdmaloai }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('pvdmaloai')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>


                        @php
                            $oldTrangThai = 1;
                        @endphp
                        <div class="row g-5 align-items-center mb-2">
                            <div class="col-auto">
                                <label for="pvdtrangthai" class="col-form-label">Trạng thái</label>
                            </div>
                            <div class="col-auto">
                                <input type="radio" id="TrangThai1" name="pvdtrangthai" class="form-check-input mr-2" value="1"
                                    {{ old('pvdtrangthai', $oldTrangThai) == 1 ? 'checked' : '' }}>
                                <label for="TrangThai1" class="form-check-label">Hiển thị</label>
                                &nbsp; &nbsp; &nbsp;
                                <input type="radio" id="TrangThai0" name="pvdtrangthai" class="form-check-input mr-2" value="0"
                                    {{ old('pvdtrangthai', $oldTrangThai) == 0 ? 'checked' : '' }}>
                                <label for="TrangThai0" class="form-check-label">Ẩn</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Thêm</button>
                        <a href="{{ route('pvdadmin.pvdsanpham.pvd-List') }}" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection