

<?php $__env->startSection('title'); ?>
    Balı Yenilə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Balı Yenilə</h4>
        <form action="<?php echo e(route('admin.exam.update',$exam->id)); ?>" enctype="multipart/form-data" method="POST" class="forms-sample">
            <?php echo csrf_field(); ?>

            <?php echo method_field("PUT"); ?>
          <div class="form-group">
            <label for="exampleInputName1"> Bal </label>
            <input type="text" value="<?php echo e($exam->price); ?>" name="price" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
          </div>
          <?php $__errorArgs = ['price'];
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
            <label for="exampleInputName1">Dərs Seç </label>
            <select name="lesson_id" class="form-control" id="">
              <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($exam->lesson_id==$l->id ? 'selected' : ''); ?> value="<?php echo e($l->id); ?>"><?php echo e($l->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Tələbə Seç </label>
            <select name="user_id" class="form-control" id="">
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($exam->user_id==$u->id ? 'selected' : ''); ?> value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Qrup Seç </label>
            <select name="qrup_id" class="form-control" id="">
              <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($exam->qrup_id==$g->id ? 'selected' : ''); ?> value="<?php echo e($g->id); ?>"><?php echo e($g->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.exam.index')); ?>">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/exams/edit.blade.php ENDPATH**/ ?>