

<?php $__env->startSection('title'); ?>
    Dekanat
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dekanat</h4>
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="title" value="<?php echo e($dekanat->name); ?>" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="title" value="<?php echo e($dekanat->getKorpus->name); ?>" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.dekanat.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/dekanat/show.blade.php ENDPATH**/ ?>