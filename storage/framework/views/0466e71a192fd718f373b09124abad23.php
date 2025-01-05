
<?php $__env->startSection('title', 'Danh sách Sản phẩm'); ?>
<?php $__env->startSection('content-body'); ?>
    <div class="container my-4">
        <?php if(session('success')): ?>
        <div class="alert alert-success"style="font-weight: bold;">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <div class="container">
            <div class="col-122 d-flex justify-content-between">
                <h3>Danh sách sản phẩm</h3>
                <a href="<?php echo e(route('pvdadmin.pvdsanpham.pvdCreatesanpham')); ?>" class="btn btn-success float-end">Thêm Mới</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $pvdsanphams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->pvdmasanpham); ?></td>
                            <td><?php echo e($item->pvdtensanpham); ?></td>
                            <td>
                                <img src="<?php echo e(asset($item->pvdhinhanh)); ?>" alt="Hình ảnh sản phẩm" style="width: 200px; height: 200px;">
                            </td>
                            <td><?php echo e($item->pvdsoluong); ?></td>
                            <td><?php echo e($item->pvddongia); ?></td>
                            <td><?php echo e($item->pvdmaloai); ?></td>
                            <td><?php echo e($item->pvdtrangthai==1?"Hiển thị":"Ẩn"); ?></td>

                            <td class="text-center">
                                <!-- View Button -->
                                <button class="btn btn-success " onclick="window.location.href='/'<?php echo e($item->id); ?>'" title="">chi tiết
                                </button>

                                <!-- Edit Button -->
                                <button class="btn btn-primary " onclick="window.location.href='/pvd-admins/pvdchinh-sua-san-pham/pvd-edit<?php echo e($item->id); ?>'" title="">Chỉnh sửa
                                </button>

                                <!-- Delete Button -->
                                <form action="<?php echo e(route('pvdadmin.pvdpvddeletesp', $item->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Bạn chắc chắn muốn xoá loại sản phẩm này?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger" title="">Xoá
                                    </button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="8" class="text-center">Không có loại sản phẩm nào.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($pvdsanphams->appends(request()->query())->links('pagination::bootstrap-5')); ?>

            </div>
            
        </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\dự án prj\K23CNT1_PhamVanDuy_2310900029_Prj1\resources\views/pvdadmins/pvdsanpham/pvd-List.blade.php ENDPATH**/ ?>