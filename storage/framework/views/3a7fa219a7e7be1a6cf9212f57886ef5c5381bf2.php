<?php $__env->startSection('rekap'); ?>

	<div class="row">
		<div class="col-lg-7 col-md-10">
	    	<h1 class="display-2 text-white"><?php echo e($perusahaan->nama); ?></h1>
	    	<p class="text-white mt-0 mb-5"><?php echo e($perusahaan->slogan); ?></p>
	  	</div>
	</div>

  <?php if($user->role == 'pemilik' || $user->role == 'administrator'): ?>
    <div class="row">
      <div class="col-md-12">
        <h3 class="mb-2" style="color: white">Undang via tautan</h3>
      </div>
      <div class="col-md-6">
        <div class="form-group focused d-inline">
          <input style="color: black;" type="text" id="myInput" class="form-control form-control-alternative" readonly="" value="<?php echo e(url('/invite')); ?>/<?php echo e($perusahaan->token); ?>">
        </div>
      </div>
      <div class="col-md-2">
        <button id="copyButton" type="button" onclick="myFunction()"  class="btn btn-success"><i class=""></i>Salin</button>
      </div>
    </div>
  <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
      <div class="col-lg-9 col-xl-9 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <h3 class="mb-0"><?php echo e($jmlAnggota); ?> Anggota</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th style="width: 20%" scope="col">Profil</th>
                  <th scope="col">Nama</th>
                  <th style="width: 20%" scope="col">Role</th>
                  <th style="width: 20%" class="text-center" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggotaPer1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr <?php if($user->id == $anggotaPer1->id): ?> style="background: #eee" <?php endif; ?>>
                    <th scope="row">
                      <div class="media align-items-center">
                        <?php if( is_null($anggotaPer1->gambar) ): ?>
                          <div class="card text-center ml-1">
                            <i class="fas fa-user fa-3x"></i>
                          </div>
                        <?php else: ?>
                          <a href="#" class="avatars rounded-circle mr-3">
                            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/profil_user')); ?>/<?php echo e($anggotaPer1->gambar); ?>" alt="Card image cap">
                          </a>
                        <?php endif; ?>
                      </div>
                    </th>
                    <td>
                      <?php echo e($anggotaPer1->name); ?>

                    </td>
                    <td>
                      <?php echo e($anggotaPer1->role); ?>

                    </td>
                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="<?php echo e(url('/admin/anggota/'.encrypt($anggotaPer1->id))); ?>">Lihat <?php echo e($anggotaPer1->name); ?></a>
                          <?php if( $user->role == 'pemilik' && $user->role != $anggotaPer1->role ): ?>
                            <?php if( $anggotaPer1->role == 'administrator' ): ?>
                              <a class="dropdown-item" href="#" onclick='updateRole("<?php echo e($anggotaPer1->name); ?>", "Turunkan", "anggota", "<?php echo e(url('/admin/anggota/' . encrypt($anggotaPer1->id) . '/' . encrypt('anggota'))); ?>")'>Turunkan menjadi anggota</a>
                            <?php else: ?>
                              <a href="#" class="dropdown-item" onclick='updateRole("<?php echo e($anggotaPer1->name); ?>", "Promosikan", "administrator", "<?php echo e(url('/admin/anggota/' . encrypt($anggotaPer1->id) . '/' . encrypt('administrator'))); ?>")'>Promosikan menjadi administrator</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="#" onclick='onDestroy("<?php echo e(url('/admin/anggota/' . encrypt($anggotaPer1->id))); ?>", "Apakah anda yakin, akan mengeluarkan <?php echo e($anggotaPer1->name); ?>?")'>Keluarkan <?php echo e($anggotaPer1->name); ?></a>
                          <?php elseif( $user->role == 'administrator' && $anggotaPer1->role == 'anggota' ): ?>
                            <a href="#" class="dropdown-item" onclick='updateRole("<?php echo e($anggotaPer1->name); ?>", "Promosikan", "administrator", "<?php echo e(url('/admin/anggota/' . encrypt($anggotaPer1->id) . '/' . encrypt('administrator'))); ?>")'>Promosikan menjadi administrator</a>
                            <a class="dropdown-item" href="#" onclick='onDestroy("<?php echo e(url('/admin/anggota/' . encrypt($anggotaPer1->id))); ?>", "Apakah anda yakin, akan mengeluarkan " . $anggotaPer1->name . "?")'>Keluarkan <?php echo e($anggotaPer1->name); ?></a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer  py-4">
            <nav aria-label="...">
              <?php echo e($anggota->onEachSide(5)->links()); ?>

            </nav>
          </div>
        </div>
      </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <form id="updateRole_form" action="" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  </form>
  <form id="destroy_form" action="" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
  </form>

  <script>
    function myFunction() {
      var copyText = document.getElementById('myInput');
      copyText.select();

      var copyButton = document.getElementById('copyButton');
      copyButton.innerHTML = 'Tersalin';

      document.execCommand("copy");

    }
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/anggota/index.blade.php ENDPATH**/ ?>