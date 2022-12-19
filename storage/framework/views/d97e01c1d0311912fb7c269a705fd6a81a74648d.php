<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('manager/')); ?>/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Qeydiyyatdan Keçin</h3>
                <form action="<?php echo e(route('admin.signup_post')); ?>" method="POST" id="loginForm">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="name">Ad *</label>
                    <input  type="text" name="name" id="name" class="form-control p_input">
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
                    <label for="lname">Soyad *</label>
                    <input type="text" name="lname" id="lname" class="form-control p_input">
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
                    <label for="email">Email *</label>
                    <input type="text" name="email" id="email" class="form-control p_input">
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
                    <label for="group">Qrup *</label> <br>
                    <select class="form-control"  name="group_id" id="group">
                      <option  value="" >Qrup Seçin</option>
                      <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($g->id); ?>"><?php echo e($g->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>

                  <?php $__errorArgs = ['group_id'];
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
                    <label for="password">Şifrə *</label>
                    <input type="password" id="password" name="password" class="form-control p_input">
                  </div>
                  <?php $__errorArgs = ['password'];
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
                    <label for="password_ver">Şifrəni Təkrarla *</label>
                    <input type="password" id="password_ver" name="password_ver" class="form-control p_input">
                  </div>
                  <?php $__errorArgs = ['password_ver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger mt-2"><?php echo e($message); ?></span> <br>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <div class="text-center">
                    <button id="submit" type="submit"  class="btn btn-primary btn-block enter-btn">Göndər</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('manager/')); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('manager/')); ?>/assets/js/off-canvas.js"></script>
    <script src="<?php echo e(asset('manager/')); ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo e(asset('manager/')); ?>/assets/js/misc.js"></script>
    <script src="<?php echo e(asset('manager/')); ?>/assets/js/settings.js"></script>
    <script src="<?php echo e(asset('manager/')); ?>/assets/js/todolist.js"></script>
    <!-- endinject -->

  </body>
</html><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/auth/register.blade.php ENDPATH**/ ?>