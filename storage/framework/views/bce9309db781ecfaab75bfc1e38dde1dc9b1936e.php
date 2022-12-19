

<?php $__env->startSection('title'); ?>
    Mesaj
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Mesaj</h4>
          <div class="form-group">
            <label for="exampleInputName1">Ad</label>
            <input type="text" name="title" value="<?php echo e($message->name); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" name="title" value="<?php echo e($message->email); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Başlıq</label>
            <input type="text" name="title" value="<?php echo e($message->title); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mesaj</label>
            <textarea class="form-control"  name="desc" id="exampleTextarea1" placeholder="" rows="4"><?php echo e($message->msj); ?></textarea>
          </div>
          
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.mesaj.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/message/show.blade.php ENDPATH**/ ?>