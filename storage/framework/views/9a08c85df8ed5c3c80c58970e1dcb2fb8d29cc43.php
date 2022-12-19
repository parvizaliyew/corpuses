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
    <style>
     .auth .login-bg {
    background: red;
    background-size: cover;
}
    </style>
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('manager/')); ?>/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div  style="background:url(<?php echo e(asset('/manager/assets/images/auth/lockscreen-bg.jpg')); ?>) !important ; background-size:cover !important" class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Daxil olun</h3>
                <form action="<?php echo e(route('admin.login_post')); ?>" method="POST" id="loginForm">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" name="email" id="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label for="password">Şifrə *</label>
                    <input type="password" id="password" name="password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Məni xatırla </label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button id="submit" type="submit"  class="btn btn-primary btn-block enter-btn">Daxil ol</button>
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
</html><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/auth/login.blade.php ENDPATH**/ ?>