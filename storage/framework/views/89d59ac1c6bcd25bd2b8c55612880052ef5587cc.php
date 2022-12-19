<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title','Admin Panel'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('manager/')); ?>/assets/css/custom.css">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('manager/')); ?>/assets/images/favicon.png" />
  </head>
  <body>
    <style>
      

    </style>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <h1 class="mytitle">Admin Panel</h1>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="<?php echo e(asset('manager/')); ?>/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo e(asset('manager/')); ?>/assets/images/admin.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lname); ?></h5>
                <?php
                $user=App\Models\User::with('roles')->find(auth()->user()->id);
                $user=$user->roles->pluck('name')->first();
                ?>
                  <span><?php echo e(strtoupper ($user)); ?></span>
                </div>
              </div>
                
            </div>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Admin Panel</span>
            </a>
          </li>
          <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.slider.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter"></i>
              </span>
              <span class="menu-title">Slayder</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo e(route('admin.about')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-text"></i>
              </span>
              <span class="menu-title">Haqqında</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.korpus.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-newspaper"></i>
              </span>
              <span class="menu-title">Korpuslar</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.kafedra.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-library"></i>
              </span>
              <span class="menu-title">Kafedra</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.dekanat.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-bookmark"></i>
              </span>
              <span class="menu-title">Dekanat</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.teacher.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-page-variant"></i>
              </span>
              <span class="menu-title">Müəllim</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.group.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">Qrup</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.lesson.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-information"></i>
              </span>
              <span class="menu-title">Dərslər</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.exam.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-biohazard"></i>
              </span>
              <span class="menu-title">İmtahan balı</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.mesaj.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-facebook-messenger"></i>
              </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>

          
          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.setting.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
              <span class="menu-title">Ayarlar</span>
            </a>
          </li>

          <?php endif; ?>
          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.profil')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-star"></i>
              </span>
              <span class="menu-title">Profil</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="<?php echo e(route('admin.telebe.index')); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-information"></i>
              </span>
              <span class="menu-title">Tələbələr</span>
            </a>
          </li>
         <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'tələbə')): ?>
         <li class="nav-item menu-items">
          <a class="nav-link " href="<?php echo e(route('admin.result')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-biohazard"></i>
            </span>
            <span class="menu-title">Imtahan Nəticəsi</span>
          </a>
        </li>
         <?php endif; ?>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper"><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>