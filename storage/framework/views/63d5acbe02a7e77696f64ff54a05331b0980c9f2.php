

<?php $__env->startSection('title'); ?>
    İmtahan Nəticələri
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> İmtahan Nəticələri </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="<?php echo e(route('admin.exam.create')); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Ad  </th>
                <th style="font-size:20px"> Soyad  </th>
                <th style="font-size:20px"> Qrup  </th>
                <th style="font-size:20px"> Dərs </th>
                <th style="font-size:20px"> Bal</th>
              </tr>
            </thead>
            <tbody id="sliders">
              <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                <td class="handle">
                    <?php echo e($loop->index+1); ?>

                </td>
                <td>
                    <?php echo e($exam->getUser->name); ?>

                  </td>
            

                <td>
                  <?php echo e($exam->getUser->lname); ?>

                </td>

                <td>
                <?php if($exam->qrup_id==0): ?>
                    Qrup silinib
                <?php else: ?>
                <?php echo e($exam->getGroup->name); ?>

                <?php endif; ?>
                </td>

                <td>
                    <?php if($exam->lesson_id==0): ?>
                        Dərs silinib
                    <?php else: ?>
                    <?php echo e($exam->getLesson->name); ?>

                    <?php endif; ?>
                </td>

                <td>
                  <?php echo e($exam->price); ?>

                </td>   
              </tr>
              
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </tbody>
          </table>

        </div>
      </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>

 

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/result/index.blade.php ENDPATH**/ ?>