<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book-App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col-2">
            <div class="list-group">
                <a href="/" class="list-group-item list-group-item-action">
                  Tabel Data Buku
                </a>
            <a href="<?php echo e(url('/book-types')); ?>" class="list-group-item list-group-item-action active" aria-current="true">Tabel Genre Buku</a>
              </div>
        </div>
        <div class="col-8">
            <div class="card">
                <h1 class="card-header">Tabel Genre Buku</h1>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="card text-end list-group-item">
                            
                        </li>
                        <li class="list-group-item"></li>
                      </ul>
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>No. </th>
                            <th>Genre</th> 
                            <th>Kode Genre</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $bookTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no + 1); ?></td>
                            <td><?php echo e($type->genre); ?></td>
                            <td><?php echo e($type->kode_genre); ?></td>
                            <td>
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </table>
                    <?php echo e($bookTypes->links()); ?>

                </div>
              </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\Devi\Documents\kedaireka\latihanGithub\project-kedaireka\exercise5\buku-app\resources\views/bookTypes/index.blade.php ENDPATH**/ ?>