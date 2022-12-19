

<?php $__env->startSection('title'); ?>
    <?php echo e($korpus->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-4">
                    <h5 class="text-primary mb-3"><?php echo e($korpus->name); ?></h5>
                    <h1 class="mb-3"><?php echo e($korpus->title); ?></h1>
                </div>

                <div class="mb-5">
                    <img style="max-height: 800px;
                    height: 800px;
                    object-fit: cover;
                    width: 1200px;" class="img-thumbnail mb-4 p-3" src="<?php echo e(asset($korpus->img)); ?>" alt="Image">
                    <p><?php echo e($korpus->desc); ?></p>
                    
                </div>
        
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <table   class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Dekanat</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dekanats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->index+1); ?></th>
                            <td><?php echo e($item->name); ?></td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                    </tbody>
                  </table>
            </div>
            <div class="col-md-6">
                <table   class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kafedra</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kafedras_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->index+1); ?></th>
                            <td><?php echo e($item); ?></td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Müəllimlər</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $teacher_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <th scope="row"><?php echo e($loop->index+1); ?></th>
                      <td><?php echo e($item); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Dərslər</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $lesson_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <th scope="row"><?php echo e($loop->index+1); ?></th>
                      <td><?php echo e($item); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md-6">
            <table   class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Qruplar</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $group_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <th scope="row"><?php echo e($loop->index+1); ?></th>
                      <td><?php echo e($item); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
              </tbody>
            </table>
          </div>
        </div>

          
    </div>
    <!-- Detail End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/korpus_single.blade.php ENDPATH**/ ?>