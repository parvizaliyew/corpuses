

<?php $__env->startSection('title'); ?>
    Dekanat Əlavə Et
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dekanat Əlavə Et</h4>
        <form action="<?php echo e(route('admin.dekanat.store')); ?>" enctype="multipart/form-data" method="POST" class="forms-sample">
            <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="exampleInputName1">Dekanat </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="dekanat">
          </div>
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger mt-2"><?php echo e($message); ?></span> <br>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <div class="form-group">
            <label for="exampleInputName1">Korpus Seç </label>
            <select name="korpus_id" class="form-control" id="">
              <option value="">Seç</option>
              <?php $__currentLoopData = $korpuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option  value="<?php echo e($kor->id); ?>"><?php echo e($kor->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <?php $__errorArgs = ['dekanat_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger mt-2"><?php echo e($message); ?></span> <br>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <button type="submit" class="btn btn-primary mr-2">Əlavə Et</button>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.dekanat.index')); ?>">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/dekanat/create.blade.php ENDPATH**/ ?>