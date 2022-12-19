        <!-- partial:../../partials/_navbar.html -->

        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" style="background:#fff"
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span  style="color: #858796 ;font-size:25px" class="mdi mdi-menu"></span>
              </button>
             
              <ul class="navbar-nav navbar-nav-right">
                
                
                
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email" style="color: #858796"></i>
                    <span class="count bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">YENI MESAJLAR</h6>
                    <?php
                        $messages=\App\Models\Message::where('seen_message',null)->take(3)->get();
                        $messages1=\App\Models\Message::where('seen_message',null)->get();
                    ?>
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item preview-item">
                     
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1"><?php echo e($message->name); ?></p>
                        <p class="text-muted mb-0"> <button class="btn btn-success">Yeni Mesaj</button> </p>
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                    <div class="dropdown-divider"></div>
                    
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center"> <button style="border-radius:50%" class="btn btn-primary"><?php echo e($messages1->count()); ?></button>  Yeni mesaj</p>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="<?php echo e(asset('manager/')); ?>/assets/images/admin.png" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name" style="color: #858796"><?php echo e(Auth::user()->name); ?></p>
                      <i style="color: #858796" class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div style="background: #fff" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0" style="color: #858796">Profil</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?php echo e(route('admin.logout')); ?>">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1" style="color:#858796">Çıxış</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper"><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/layouts/menu.blade.php ENDPATH**/ ?>