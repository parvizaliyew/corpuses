

<?php $__env->startSection('title'); ?>
    Profil Güncəllə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('admin.profil.update')); ?>" autocomplete="off" method="post">
  <?php echo csrf_field(); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profil</h4>
        <form class="forms-sample">
          <div class="form-group">
            <label for="name">Ad</label>
            <input value="<?php echo e(auth()->user()->name); ?>" name="name" type="name" class="form-control" id="name" placeholder="Ad">
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
            <label for="lname">Soyad</label>
            <input value="<?php echo e(auth()->user()->lname); ?>" name="lname" type="name" class="form-control" id="lname" placeholder="Soyad">
          </div>
          <?php $__errorArgs = ['lname'];
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
            <label for="exampleInputEmail3">Email adresi</label>
            <input value="<?php echo e(auth()->user()->email); ?>" name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <?php $__errorArgs = ['email'];
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
            <label for="exampleInputPassword3">Yeni şifrə</label>
            <input type="password" name="reset_password" class="form-control" id="exampleInputPassword3" autocomplete="new-password"  placeholder="Şifrə">
          </div>

          <div class="form-group">  
            <label for="exampleInputPassword4">Yeni şifrəni təkrarla</label>
            <input type="password"  name="confirm_password" class="form-control" id="exampleInputPassword4" placeholder="Şifrə">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Yenilə</button>
        </form>
      </div>
    </div>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/auth/profil_update.blade.php ENDPATH**/ ?>