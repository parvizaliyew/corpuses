

<?php $__env->startSection('title'); ?>
    Haqqımızda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <!-- About Start -->
        <div class="container-fluid mb-5 py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 px-0">
                    <img width="900px" height="1000px" class="img-fluid" src="<?php echo e($about->img); ?>" alt="Image">
                </div>
                <div  class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                    <h5 class="text-primary mb-3">Haqqımızda</h5>
                    <h1 class="mb-4"><?php echo e($about->title); ?></h1>
                    <p><?php echo e($about->desc); ?></p>
                   
                </div>
            </div>
        </div>
        <!-- About End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/about.blade.php ENDPATH**/ ?>