

<?php $__env->startSection('title'); ?>
    Əlaqə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Bizimlə Əlaqə</h5>
            <h1 class="m-0">İstənilən sual üçün əlaqə saxlayın</h1>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6075.018932826429!2d49.867149877938026!3d40.419716435498266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030881acd579c89%3A0xef1c14d894d5d19d!2zxLBzbGFtIEFixLHFn292LCBCYWvEsSwgQXrJmXJiYXljYW4!5e0!3m2!1saz!2s!4v1669355401372!5m2!1saz!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
            <div class="col-12">
                <div class="contact-form bg-white">
                    <div id="success"></div>
                    <form  action="<?php echo e(route('contact_post')); ?>" method="POST"  novalidate="novalidate">
                        <?php echo csrf_field(); ?>
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Adınız" required="required" data-validation-required-message="Zəhmət olmasa adınızı daxil edin" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Emailiniz" required="required" data-validation-required-message="Zəhmət olmasa emailiniz daxil edin" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="title" type="text" class="form-control" id="subject" placeholder="Baslıqınız" required="required" data-validation-required-message="Zəhmət olmasa baslıqızı daxil edin" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="msj" class="form-control" rows="6" id="message" placeholder="Mesajınız" required="required" data-validation-required-message="Zəhmət olmasa mesajızı daxil edin"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit" id="sendMessageButton">Göndər</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/contact.blade.php ENDPATH**/ ?>