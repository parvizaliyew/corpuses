

<?php $__env->startSection('title'); ?>
    Mesaj
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="page-header">
            <h3 style="font-size: 1.8rem" class="page-title"> Mesajlar </h3>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="font-size:20px"> # </th>
                <th style="font-size:20px">Ad  </th>
                <th style="font-size:20px">Email  </th>
                <th style="font-size:20px"> Baslıq  </th>
                <th style="font-size:20px"> Tarix  </th>
                <th style="font-size:20px"> Mesaj  </th>
                <th style="font-size:20px"> Proseslər </th>
              </tr>
            </thead>
            <tbody id="sliders">
              <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                <td class="handle">
                    <?php echo e($loop->index+1); ?>

                </td>
                <td>
                  <?php echo e($m->name); ?>

                </td>
                <td>
                    <?php echo e($m->email); ?>

                </td>
                <td>
                  <?php echo e(Str::limit($m->title, 15, '...')); ?>

                </td>
                <td>
                  <?php if($m->seen_message===null): ?>
                      <button class="btn btn-success">Yeni mesaj</button>
                  <?php else: ?>
                      <?php echo e(($m->created_at->diffForHumans())); ?> oxundu
                  <?php endif; ?>
                </td>
              <td>
                <?php echo e(Str::limit($m->msj, 15, '...')); ?>

              </td>
              <td>
                <a href="<?php echo e(route('admin.mesaj.show',$m->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-eye"></i> </a>
                <a href="<?php echo e(route('admin.mesaj.delete',$m->id)); ?>"><i  style="font-size: 1.975rem !important ; color:blue ; margin-right:7px" class="mdi mdi-delete-forever"></i> </a>

            </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </tbody>
          </table>

        </div>
      </div>
      <div style="margin-left: 870px">  <?php echo e($messages->links()); ?>  </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/message/index.blade.php ENDPATH**/ ?>