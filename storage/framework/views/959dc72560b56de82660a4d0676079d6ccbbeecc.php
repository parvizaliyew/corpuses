

<?php $__env->startSection('title'); ?>
    Dərs Yenilə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs Yenilə</h4>
        <form action="<?php echo e(route('admin.lesson.update',$lesson->id)); ?>" enctype="multipart/form-data" method="POST" class="forms-sample">
            <?php echo csrf_field(); ?>

            <?php echo method_field("PUT"); ?>
          <div class="form-group">
            <label for="exampleInputName1">Dərs</label>
            <input type="text" value="<?php echo e($lesson->name); ?>" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
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
            <label for="exampleInputName1">Müəllimi Seç </label>
            <select name="muellim_id" class="form-control" id="">
              <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($lesson->muellim_id==$t->id ? 'selected' : ''); ?> value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Qrupu Seç </label>
            <select name="qrup_id" class="form-control" id="">
              <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($lesson->qrup_id==$g->id ? 'selected' : ''); ?> value="<?php echo e($g->id); ?>"><?php echo e($g->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.lesson.index')); ?>">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/lessons/edit.blade.php ENDPATH**/ ?>