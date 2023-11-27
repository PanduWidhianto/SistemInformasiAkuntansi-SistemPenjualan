<?php $__env->startSection('rekap'); ?>
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white">Profil Akun</h1>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mb-5">
		  <div class="col-md-5 col-xs-10 offset-xs-1">
        <?php if( is_null($user->gambar) ): ?>
          <div class="card text-center">
              <i class="fas fa-user fa-10x pt-5 pb-5"></i>
          </div>
        <?php else: ?>
            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/profil_user')); ?>/<?php echo e($user->gambar); ?>" alt="Card image cap">
        <?php endif; ?>
		  </div>
		  <div class="col-md-6 ">
        <div class="card card-profile shadow">
          <div class="card-body pt-0 pt-md-4">
            <div class="text-center mt-4">
              <hr>
              <h1>
                <?php echo e($user->name); ?><span class="font-weight-light"><?php echo e(', ' . $user->umur); ?></span>
              </h1>
              <div class="h5 font-weight-300">
                <?php echo e($user->alamat); ?> <?php echo e(', ' .  strtoupper($user->negara)); ?>

              </div>
              <div class="h5 mt-4">
                <?php echo e($perusahaan->nama); ?> - <?php echo e($user->role); ?>

              </div>
              <div>
                <?php echo e($user->instansiasi); ?>

              </div>
              <hr class="my-4" style="width: 60%">
              <p><?php echo e($user->deskripsi ? '" ' . $user->deskripsi . ' "' : ''); ?></p>
              <div style="font-size: 14px" class=" text-muted mt-4 text-left">
                  <?php echo e($user->email); ?>

              </div>
              <hr>
              <a href="<?php echo e(url('/admin/profil')); ?>/<?php echo e(encrypt($user->id)); ?>/edit" class="btn btn-primary ">Ubah Profil</a>
            </div>
          </div>
        </div>
      </div>
	 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/profil/index.blade.php ENDPATH**/ ?>