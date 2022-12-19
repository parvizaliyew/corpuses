

<?php $__env->startSection('title'); ?>
    <?php echo e($news->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
       <!-- Page Header Start -->
       <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Xəbər</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="<?php echo e(route('index')); ?>">Əsas Səhifə</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">    <?php echo e($news->title); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-12">
               

                <div class="mb-5">
                    
                    <h2 class="mb-4"><?php echo e($news->title); ?></h2>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="<?php echo e(asset($news->img)); ?>" alt="Image">
                    <p><?php echo e($news->desc); ?></p>
                </div>

                <!-- Related Post Start -->
               
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End --> 
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/single.blade.php ENDPATH**/ ?>