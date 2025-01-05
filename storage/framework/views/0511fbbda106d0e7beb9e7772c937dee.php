<?php $__env->startSection('title','Thêm mới loại sản phẩm'); ?>

<?php $__env->startSection('content-body'); ?>
<div class="container"> 
    <div class="row">
        <div class="col">
            <form action="<?php echo e(route('pvdadmin.pvdloaisanpham.pvdcreate')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="pvdmaloai" class="col-sm-2 col-form-label">Mã loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="<?php echo e(old('pvdmaloai')); ?>"
                              id="pvdmaloai" name="pvdmaloai">
                            <?php $__errorArgs = ['pvdmaloai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pvdtenloai" class="col-sm-2 col-form-label">Tên loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="<?php echo e(old('pvdtenloai')); ?>"
                              id="pvdtenloai" name="pvdtenloai">
                            <?php $__errorArgs = ['pvdtenloai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <a href="<?php echo e(route('pvdadmin.pvd-list')); ?>" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.admins._master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\dự án prj\K23CNT1_PhamVanDuy_2310900029_Prj1\resources\views/pvdAdmins/pvdloaisanpham/pvd-create.blade.php ENDPATH**/ ?>