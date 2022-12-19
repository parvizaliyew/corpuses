

<?php $__env->startSection('title'); ?>
    Slayder
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slayder</h4>
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" name="title" value="<?php echo e($slider->title); ?>" class="form-control" id="exampleInputName1" placeholder="Başlıq">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mətn</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" placeholder="<?php echo e($slider->desc); ?>" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Şəkil</label> <br> 
            <img style="width: 600px; height:500px" src="<?php echo e(asset($slider->img)); ?>" alt=""> 
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.slider.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/slider/show.blade.php ENDPATH**/ ?>