

<?php $__env->startSection('title'); ?>
    Korpuslar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h1 class="m-0">Korpuslar</h1>
    </div>
    <div class="row pb-3">
        <?php $__currentLoopData = $korpuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-4">
            <div class="card mb-2 p-3">
                <img class="card-img-top" src="<?php echo e(asset($k->img)); ?>" alt="">
                <div class="card-body bg-secondary d-flex align-items-center p-0">
                    <h6 class="card-title text-white text-truncate m-0 ml-3"><?php echo e($k->name); ?></h6>
                    <a href="<?php echo e(route('korpus_single',$k->id)); ?>" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                </div>
                <div class="card-footer py-3 px-4">
                    <p style="color: black;" class="m-0"><?php echo e($k->title); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/korpus.blade.php ENDPATH**/ ?>