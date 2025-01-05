@extends('_layouts.admins._master')
@section('title','Thêm mới loại sản phẩm')

@section('content-body')
<div class="container"> 
    <div class="row">
        <div class="col">
            <form action="{{route('pvdadmin.pvdloaisanpham.pvdcreate')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="pvdmaloai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('pvdmaloai')}}"
                              id="pvdmaloai" name="pvdmaloai">
                            @error('pvdmaloai')
                                <span class="text-danger">{{$message}}</span>   
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pvdtenloai" class="col-sm-2 col-form-label">Tên loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('pvdtenloai')}}"
                              id="pvdtenloai" name="pvdtenloai">
                            @error('pvdtenloai')
                                <span class="text-danger">{{$message}}</span>   
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pvdtrangthai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                              <input type="radio" id="pvdtrangthai1" name="pvdtrangthai" value="1" checked>
                              <label for="pvdtrangthai1">hiển thị</label>
                              &nbsp;
                              <input type="radio" id="pvdtrangthai0" name="pvdtrangthai" value="0">
                              <label for="pvdtrangthai0">khóa</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Ghi lại</button>
                        <a href="{{route('pvdadmin.pvd-list')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@endsection