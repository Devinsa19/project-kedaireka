

<?php $__env->startSection('content'); ?>
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Data Buku</h4>
            <form action="<?php echo e(route("update", $book ->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="book_types">Genre</label>
                    <select class="custom-select d-block w-100 form-control" id="book_types" name="book_types_id">
                      <?php $__currentLoopData = $bookTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($bookType->id); ?>"<?php echo e($bookType->id === $book->book_types_id ? "selected" : ""); ?>><?php echo e($bookType->genre); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
              </div>
              <div class="form-group">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="number" class="form-control" id="kode_buku" name="kode_buku" value="<?php echo e($book->kode_buku); ?>">
              </div>
              <div class="form-group">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo e($book->judul_buku); ?>">
              </div>
              <div class="form-group">
                <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo e($book->pengarang); ?>">
              </div>
              <div class="form-group">
                <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo e($book->penerbit); ?>">
              </div>
              <div class="form-group">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo e($book->tahun_terbit); ?>">
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Devi\Documents\kedaireka\latihanGithub\project-kedaireka\exercise5\buku-app\resources\views/books/edit.blade.php ENDPATH**/ ?>