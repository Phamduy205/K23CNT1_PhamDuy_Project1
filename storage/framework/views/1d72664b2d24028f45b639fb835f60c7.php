
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('content-body'); ?>
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
            <form action="<?php echo e(route('pvdadmin.pvdsanpham.pvdCreateSubmitsanpham')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
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
                                <input type="text" id="pvdmasanpham" class="form-control" name="pvdmasanpham" style="height: 60px"  value="<?php echo e(old('pvdmasanpham')); ?>">
                            </div>
                            <?php $__errorArgs = ['pvdmasanpham'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdtensanpham" class="col-form-label">Tên sản phẩm</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="pvdtensanpham" class="form-control" name='pvdtensanpham' style="height: 60px"  value="<?php echo e(old('pvdtensanpham')); ?>">
                            </div>
                            <?php $__errorArgs = ['pvdtensanpham'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdhinhanh" class="col-form-label">Hình ảnh</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="pvdhinhanh" id="pvdhinhanh" style="height: 60px;" onchange="previewImage(event)">
                                </div>
                                <?php $__errorArgs = ['pvdhinhanh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="mt-3">
                                    <!-- Hiển thị hình ảnh hiện tại nếu có -->
                                    <?php if(isset($oldImage)): ?>
                                        <p>Hình ảnh hiện tại:</p>
                                        <img src="<?php echo e(asset('path/to/images/' . $oldImage)); ?>" alt="Hình ảnh hiện tại" id="currentImage" style="max-width: 100%; max-height: 150px;">
                                    <?php endif; ?>
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
                                <input type="number" id="pvdsoluong" class="form-control" name='pvdsoluong' style="height: 60px"  value="<?php echo e(old('pvdsoluong')); ?>">
                            </div>
                            <?php $__errorArgs = ['pvdsoluong'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvddongia" class="col-form-label">Đơn giá</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="number" id="pvddongia" class="form-control" name='pvddongia' style="height: 60px"  value="<?php echo e(old('pvddongia')); ?>">
                            </div>
                            <?php $__errorArgs = ['pvddongia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="pvdmaloai" class="col-form-label">Mã loại</label>
                            </div>
                            <div class="col-3 border-3">
                                <select class="form-select" name="pvdmaloai" style="font-size: 1.5rem; border-width: 3px; border-style: solid; height: 60px;">
                                    <option value="" disabled <?php echo e(old('pvdmaloai', isset($oldMaLoai) ? $oldMaLoai : '') == '' ? 'selected' : ''); ?>>Chọn mã loại</option>
                                    <?php $__currentLoopData = $pvdloaisanphams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($loai->pvdmaloai); ?>"
                                            <?php echo e(old('pvdmaloai', isset($oldMaLoai) ? $oldMaLoai : '') == $loai->pvdmaloai ? 'selected' : ''); ?>>
                                            <?php echo e($loai->pvdmaloai); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php $__errorArgs = ['pvdmaloai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <?php
                            $oldTrangThai = 1;
                        ?>
                        <div class="row g-5 align-items-center mb-2">
                            <div class="col-auto">
                                <label for="pvdtrangthai" class="col-form-label">Trạng thái</label>
                            </div>
                            <div class="col-auto">
                                <input type="radio" id="TrangThai1" name="pvdtrangthai" class="form-check-input mr-2" value="1"
                                    <?php echo e(old('pvdtrangthai', $oldTrangThai) == 1 ? 'checked' : ''); ?>>
                                <label for="TrangThai1" class="form-check-label">Hiển thị</label>
                                &nbsp; &nbsp; &nbsp;
                                <input type="radio" id="TrangThai0" name="pvdtrangthai" class="form-check-input mr-2" value="0"
                                    <?php echo e(old('pvdtrangthai', $oldTrangThai) == 0 ? 'checked' : ''); ?>>
                                <label for="TrangThai0" class="form-check-label">Ẩn</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Thêm</button>
                        <a href="<?php echo e(route('pvdadmin.pvdsanpham.pvd-List')); ?>" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\dự án prj\K23CNT1_PhamVanDuy_2310900029_Prj1\resources\views/pvdadmins/pvdsanpham/pvd-Create.blade.php ENDPATH**/ ?>