

<?php $__env->startSection('title'); ?>
    Qrup
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">group</h4>
          <div class="form-group">
            <label for="exampleInputName1">Qrup </label>
            <input type="text"  value="<?php echo e($group->name); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Kafedra </label>
            <?php if($group->kafedra_id==0): ?>
            <input type="text" value="Kafedra silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text"  value="<?php echo e($group->getKafedra->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.group.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/groups/show.blade.php ENDPATH**/ ?>