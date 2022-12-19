

<?php $__env->startSection('title'); ?>
    Korpus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Korpus</h4>
          <div class="form-group">
            <label for="exampleInputName1">AD</label>
            <input type="text" value="<?php echo e($korpus->name); ?>" class="form-control" id="exampleInputName1" placeholder="Ad">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" name="title" value="<?php echo e($korpus->title); ?>" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mətn</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" placeholder="<?php echo e($korpus->desc); ?>" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 600px; height:500px" src="<?php echo e(asset($korpus->img)); ?>" alt=""> 
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.korpus.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/korpus/show.blade.php ENDPATH**/ ?>