

<?php $__env->startSection('title'); ?>
    Qrup Yenilə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Qrup Yenilə</h4>
        <form action="<?php echo e(route('admin.group.update',$group->id)); ?>" enctype="multipart/form-data" method="POST" class="forms-sample">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
          <div class="form-group">
            <label for="exampleInputName1">Qrup</label>
            <input type="text" value="<?php echo e($group->name); ?>" name="name" class="form-control" id="exampleInputName1" placeholder="Lafedra Adı">
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
            <label for="exampleInputName1">Kafedra Seç </label>
            <select name="kafedra_id" class="form-control" id="">
              <?php $__currentLoopData = $kafedras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kaf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option <?php echo e($group->kafedra_id==$kaf->id ? 'selected' : ''); ?> value="<?php echo e($kaf->id); ?>"><?php echo e($kaf->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <?php $__errorArgs = ['kafedra_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger mt-2"><?php echo e($message); ?></span> <br>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.group.index')); ?>">Geri</a></button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/groups/edit.blade.php ENDPATH**/ ?>