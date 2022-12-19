

<?php $__env->startSection('title'); ?>
    Dərs
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs</h4>
          <div class="form-group">
            <label for="exampleInputName1">Dərs </label>
            <input type="text" name="title" value="<?php echo e($lesson->name); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Müəllim </label>
            <?php if($lesson->muellim_id==0): ?>
            <input type="text"  value="Müəllim silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" value="<?php echo e($lesson->getTeacher->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="exampleInputName2"> Qrup </label>
            <?php if($lesson->qrup_id==0): ?>
            <input type="text" name="title" value="Qrup silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" name="title" value="<?php echo e($lesson->getGroup->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.lesson.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/lessons/show.blade.php ENDPATH**/ ?>