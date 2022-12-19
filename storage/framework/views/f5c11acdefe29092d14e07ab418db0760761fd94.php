

<?php $__env->startSection('title'); ?>
    Müəllim
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Müəllimlər </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="<?php echo e(route('admin.teacher.create')); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Şəkil  </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Soyad  </th>
                <th style="font-size:20px">Kafedra  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                <td class="handle">
                    <?php echo e($loop->index+1); ?>

                </td>
                <td> <img style="width: 100px; height:100px" src="<?php echo e(asset($teacher->img)); ?>" alt=""> </td>
                <td>
                  <?php echo e($teacher->name); ?>

                </td>
                <td>
                    <?php echo e($teacher->surname); ?>

                  </td>
                <td>
                  <?php if($teacher->kafedra_id==0): ?>
                      Kafedra silinib
                  <?php else: ?>
                  <?php echo e($teacher->getKafedra->name); ?>

                  <?php endif; ?>
                  
                </td> 
                <td>
                    <a href="<?php echo e(route('admin.teacher.show',$teacher->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="<?php echo e(route('admin.teacher.edit',$teacher->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <form action="<?php echo e(route('admin.teacher.destroy',$teacher->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
  
                        <button class="btn" style="font-size: 1.975rem !important ; color:blue; display:inline-block ; margin-top:-52px ;margin-left:65px" type="submit"><i class="mdi mdi-delete-forever"></i></button>
                    </form>
                </td>
              </tr>
              <tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  <?php echo e($teachers->links()); ?>  </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/teacher/index.blade.php ENDPATH**/ ?>