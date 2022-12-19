

<?php $__env->startSection('title'); ?>
    Kafedra
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kafedra</h4>
          <div class="form-group">
            <label for="exampleInputName1">Kafedra </label>
            <input type="text" name="title" value="<?php echo e($kafedra->name); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Dekanat </label>
            <?php if($kafedra->dekanat_id==0): ?>
            <input type="text" name="title" value="Dekanatlıq silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" name="title" value="<?php echo e($kafedra->getDekanat->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.kafedra.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/kafedra/show.blade.php ENDPATH**/ ?>