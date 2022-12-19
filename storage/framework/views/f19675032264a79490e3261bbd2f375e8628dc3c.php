

<?php $__env->startSection('title'); ?>
    Slayder
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Slayder </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> 
                    <a href="<?php echo e(route('admin.slider.create')); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-plus"></i></a>
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
                <th style="font-size:20px"> Başlıq </th>
                <th style="font-size:20px"> Mətin </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr id="sorts_<?php echo e($slider->id); ?>">
                <td class="handle">
                    
                  <i style="font-size: 30px !important" class="mdi mdi-arrow-all"></i>
                </td>
                <td> <img style="width: 100px; height:100px" src="<?php echo e(asset($slider->img)); ?>" alt=""> </td>
                <td>
                  <?php echo e($slider->title); ?>

                </td>
                <td> <?php echo e(Str::limit( $slider->desc   ,15)); ?> </td>
                <td>
                    <a href="<?php echo e(route('admin.slider.show',$slider->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                    <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-grease-pencil"></i></a>
                    <a href="<?php echo e(route('admin.slider.delete',$slider->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue" class="mdi mdi-delete-forever"></i></a>
                </td>
              </tr>
              <tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">      <?php echo e($sliders->links()); ?>    </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
    $('#sliders').sortable({
                handle : '.handle',
                update : function () {
                    let siralama = $('#sliders').sortable('serialize');
                    $.get("<?php echo e(route('admin.slider.sort')); ?>?"+siralama, function() {});
                }

            });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/slider/index.blade.php ENDPATH**/ ?>