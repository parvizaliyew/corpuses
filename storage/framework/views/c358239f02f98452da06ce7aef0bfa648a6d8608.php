

<?php $__env->startSection('title'); ?>
    Müəllim
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Müəllim</h4>
          <div class="form-group">
            <label for="exampleInputName1">Ad </label>
            <input type="text" value="<?php echo e($teacher->name); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName3">Soyad </label>
            <input type="text"  value="<?php echo e($teacher->surname); ?>" class="form-control" id="exampleInputName3" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">teacher </label>
            <?php if($teacher->kafedra_id==0): ?>
            <input type="text" name="title" value="Kafedra silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" name="title" value="<?php echo e($teacher->getKafedra->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 600px; height:500px" src="<?php echo e(asset($teacher->img)); ?>" alt=""> 
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.teacher.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/teacher/show.blade.php ENDPATH**/ ?>