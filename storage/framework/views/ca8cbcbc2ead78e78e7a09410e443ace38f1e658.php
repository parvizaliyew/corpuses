

<?php $__env->startSection('title'); ?>
    Dərs Əlavə Et
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs Əlavə Et</h4>
        <form action="<?php echo e(route('admin.lesson.store')); ?>" enctype="multipart/form-data" method="POST" class="forms-sample">
            <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="exampleInputName1">Dərs </label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Dərs">
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
            <label for="exampleInputName2">Müəllim </label>
            <select name="muellim_id" class="form-control" id="exampleInputName2">
                <option value="">Seç</option>
              <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <?php $__errorArgs = ['muellim_id'];
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
            <label for="exampleInputName3"> Qrup </label>
            <select name="qrup_id" class="form-control" id="exampleInputName3">
                <option value="">Seç</option>

              <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($g->id); ?>"><?php echo e($g->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <?php $__errorArgs = ['qrup_id'];
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
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.group.index')); ?>">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/lessons/create.blade.php ENDPATH**/ ?>