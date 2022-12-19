

<?php $__env->startSection('title'); ?>
    Korpuslar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Korpuslar </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="<?php echo e(route('admin.korpus.create')); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
                </li>
              </ol>
            </nav>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px"> Şəkil </th>
                <th style="font-size:20px"> Ad </th>
                <th style="font-size:20px"> Başlıq </th>
                <th style="font-size:20px"> Mətin </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              
             <?php $__currentLoopData = $korpus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $korp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr >
                <td class="handle">
                    <?php echo e($loop->index+1); ?>

                </td>
                <td> <img style="width: 100px; height:100px" src="<?php echo e(asset($korp->img)); ?>" alt=""> </td>
                <td>
                  <?php echo e(Str::limit($korp->name, 15, '...')); ?>

                </td>
                <td>
                  <?php echo e(Str::limit($korp->title, 15, '...')); ?>

                </td>
                <td> <?php echo e(Str::limit($korp->desc, 20, '...')); ?> </td>
                <td>
                    <a href="<?php echo e(route('admin.korpus.show',$korp->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="<?php echo e(route('admin.korpus.edit',$korp->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <a href="<?php echo e(route('admin.korpus.delete',$korp->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-delete-forever"></i></a>
                </td>
              </tr>
              <tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  <?php echo e($korpus->links()); ?>  </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/korpus/index.blade.php ENDPATH**/ ?>