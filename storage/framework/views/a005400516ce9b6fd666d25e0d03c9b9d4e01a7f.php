

<?php $__env->startSection('content'); ?>
    

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->index==0): ?> active <?php endif; ?>">
                    <img class="w-100" src="<?php echo e(asset($s->img)); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0"><?php echo e($s->title); ?></h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white"><?php echo e($s->desc); ?></h4>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
             
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


<br>    <br> <br>


    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="<?php echo e(asset($about->img)); ?>" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">Haqqımızda</h5>
                <h1 class="mb-4"><?php echo e($about->title); ?></h1>
                <p><?php echo e($about->desc); ?></p>
                
                <a href="<?php echo e(route('about')); ?>" class="btn btn-lg px-4 btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="m-0">Korpuslar</h1>
        </div>
        <div class="row pb-3">

            <?php $__currentLoopData = $korpuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div  class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <a href="<?php echo e(route('korpus_single',$kor->id)); ?>">
                        <img class="card-img-top" src="<?php echo e(asset($kor->img)); ?>" alt="">
                    </a><div class="card-body bg-secondary d-flex align-items-center p-0">  
                        <h6  class="card-title text-white  m-auto"> <?php echo e(Str::limit($kor->title, 30, '...')); ?></h6>
                    </div>
                    <div class="card-footer">
                        <?php echo e(Str::limit($kor->desc, 30, '...')); ?>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
           
        </div>
    </div>


    <!-- Team Start -->
    <div class="container pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="m-0">Müəllimlər</h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($key%2==0): ?>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6><?php echo e($val->name); ?></h6>
                    </div>
                    <div class="col-6">
                        <img  style="height: 250px;" class="img-thumbnail p-3" src="<?php echo e(asset($val->img)); ?>" alt="Image">
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img style="height: 250px;" class="img-thumbnail p-3" src="<?php echo e(asset($val->img)); ?>" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6><?php echo e($val->name); ?></h6>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
    <!-- Team End -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/index.blade.php ENDPATH**/ ?>