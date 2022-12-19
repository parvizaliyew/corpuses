

<?php $__env->startSection('title'); ?>
Xəbərlər
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Xəbərlər</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="<?php echo e(route('index')); ?>"> Əsas Səhifə </a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Xəbərlər</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-12">
                <div class="row">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height: 300px; object-fit:fill" src="<?php echo e(asset($n->img)); ?>" alt="">
                                <a href="<?php echo e(route('single',$n->id)); ?>" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3"><?php echo e($n->title); ?></h4>                                 
                                </a>
                            </div>
                            <p class="m-0 p-4"><?php echo e(Str::limit( $n->desc,200,'...')); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        
                        <nav aria-label="Page navigation" class="parvizLi">
                            <ul class="pagination justify-content-center mb-0">
                              <?php if($page > 1): ?>
                              <li class="page-item">
                                  <a href="?page=<?php echo e($page-1); ?>"><span style="font-size: 20px !important"><</span></a>
                              </li>
                              <?php endif; ?>
                              <?php for($i=1; $i<= ceil($len/4); $i++): ?>
  
                                  <li class="<?php echo e($page == $i ? 'active' : ''); ?> page-item">
                                      <a href="?page=<?php echo e($i); ?>" ><?php echo e($i); ?></a>
                                  </li>
                              <?php endfor; ?>
                              <?php if($page < ceil($len / 4)): ?>
                                  <li class="page-item">
                                      <a href="?page=<?php echo e($page+1); ?>">></a>
                                  </li>
                              <?php endif; ?>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
            <style>
                .parvizLi li{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 50%
                }
                .parvizLi a{
                    padding: 5px 10px;
                }
                .parvizLi a:hover{
                    text-decoration: none
                }
                .parvizLi .active{
                    background-color: blue; 
                    
                }
                .parvizLi .active a{
                    text-decoration: none;
                    color: white;
                    border-radius: 10px
                }
            </style>
            <!-- Blog Grid End -->

         
        </div>
    </div>
    <!-- Blog End -->


   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/news.blade.php ENDPATH**/ ?>