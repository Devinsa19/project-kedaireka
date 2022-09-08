

<?php $__env->startPush('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/../../css/vertical-layout-light/style.css')); ?>">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body py-3 d-flex justify-content-between align-items-center">
        <h4 class="card-title float-start">Tabel Buku</h4>
        <a href="<?php echo e(route("create")); ?>" class="btn btn-primary fa-pull-right">Tambah Buku</a>
    </div>
    <div class="card-body ">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No. </th>
                <th>Genre</th> 
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no + 1); ?></td>
                        <td><?php echo e($book->genrebuku); ?></td>
                        <td><?php echo e($book->kode_buku); ?></td>
                        <td><?php echo e($book->judul_buku); ?></td>
                        <td><?php echo e($book->pengarang); ?></td>
                        <td><?php echo e($book->penerbit); ?></td>
                        <td><?php echo e($book->tahun_terbit); ?></td>
                        <td class="d-flex">
                            <a href="<?php echo e(route("edit", $book->id)); ?>" class="btn btn-outline-warning">Edit</a>
                            <form action="<?php echo e(route("destroy", $book->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
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

<?php $__env->startPush('script'); ?>
  <script src="<?php echo e(asset('assets/../../vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/../../js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/../../js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/../../js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/../../js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/../../js/todolist.js')); ?>"></script>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Devi\Documents\kedaireka\latihanGithub\project-kedaireka\exercise5\buku-app\resources\views/books/table.blade.php ENDPATH**/ ?>