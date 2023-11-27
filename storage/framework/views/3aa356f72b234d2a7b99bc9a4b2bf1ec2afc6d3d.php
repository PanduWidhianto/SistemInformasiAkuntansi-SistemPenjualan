<?php $__env->startSection('rekap'); ?>

	<div class="row">
		<div class="col-lg-7 col-md-10">
	    	<h1 class="display-2 text-white"><i class="fas fa-trophy"></i> Top Kontribusi</h1>
	    	<p class="text-white mt-0 mb-5">Halaman Peringkat, Top Kontribusi dalam perusahaan</p>
	  	</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
      <div class="col-lg-9 col-xl-9 mb-0 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <h3 class="mb-0">Top Kontribusi</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th></th>
                  <th style="width: 20%" scope="col">Profil</th>
                  <th scope="col">Nama</th>
                  <th style="width: 20%" scope="col">Role</th>
                  <th style="width: 20%" class="text-center" scope="col">Jml</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $topKontribusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr <?php if($user->id == $top->id): ?> style="background: #eee" <?php endif; ?>>
                    <th style="color: <?php echo e(( $loop->iteration == 1 ) ? '#FFD700' : ''); ?> <?php echo e(( $loop->iteration == 2 ) ? '#808080' : ''); ?> <?php echo e(( $loop->iteration == 3 ) ? '#cd7f32' : ''); ?>">
                      <?php if($loop->iteration == 1 || $loop->iteration == 2 || $loop->iteration == 3 ): ?>
                        <i class="fas fa-trophy fa-3x"></i>
                      <?php endif; ?>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        <?php if( is_null($top->gambar) ): ?>
                          <div class="card text-center ml-1">
                            <i class="fas fa-user fa-3x"></i>
                          </div>
                        <?php else: ?>
                          <a href="#" class="avatars rounded-circle mr-3">
                            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/profil_user')); ?>/<?php echo e($top->gambar); ?>" alt="Card image cap">
                          </a>
                        <?php endif; ?>
                      </div>
                    </th>
                    <td>
                      <?php echo e($top->name); ?>

                    </td>
                    <td>
                      <?php echo e($top->role); ?>

                    </td>
                    <td class="text-center">
                      <?php echo e($top->jumlahOrder); ?>

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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/top-kontribusi/index.blade.php ENDPATH**/ ?>