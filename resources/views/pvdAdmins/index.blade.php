@extends('_layouts.admins._master')
@section('title', 'Quản trị nội dung')

@section('content-body')
    <div class="container">
        <div class="row">
            <h2 class="text-center my-4">Danh sách quản trị</h2>
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Chức năng quản trị</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="p-2">
                                <a href="{{ route('pvdadmin.pvd-list') }}" class="btn btn-outline-primary">Loại sản phẩm</a>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('pvdadmin.pvdsanpham.pvd-List') }}" class="btn btn-outline-primary">Sản phẩm</a>
                            </div>
                            {{-- <div class="p-2">
                                <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-primary">Hóa đơn</a>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">Người dùng</a>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('admin.admins.index') }}" class="btn btn-outline-primary">Quản trị viên</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
