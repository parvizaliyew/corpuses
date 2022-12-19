

<?php $__env->startSection('title'); ?>
    Tələbələr
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Tələbələr </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
               
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Soyad  </th>
                <th style="font-size:20px">Email  </th>
              </tr>
            </thead>
            <tbody id="sliders">
              <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                <td class="handle">
                    <?php echo e($loop->index+1); ?>

                </td>
                <td>
                  <?php echo e($student->name); ?>

                </td>
                <td>
                    <?php echo e($student->lname); ?>

                  </td>
                  <td>
                    <?php echo e($student->email); ?>

                  </td>
              </tr>
              <tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </tbody>
          </table>

        </div>
      </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/users/index.blade.php ENDPATH**/ ?>