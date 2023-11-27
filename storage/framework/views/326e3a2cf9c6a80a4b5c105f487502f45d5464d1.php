<?php $__env->startSection('rekap'); ?>

	<div class="row">
		<div class="col-lg-7 col-md-10">
	    	<h1 class="display-2 text-white"><i class="fas fa-poll-h"></i> &nbsp;Penjualan</h1>
	    	<p class="text-white mt-0 mb-5">Menampilkan Rincian Data Penjualan</p>
	  	</div>
	</div>

  <?php if($user->role == 'pemilik' || $user->role == 'administrator'): ?>
    <div class="row">
      <div class="col">
        <a href="<?php echo e(url('/admin/keranjang/create')); ?>" class="btn btn-success"><i class="fas fa-plus"></i> &nbsp;Tambah Penjualan</a>
      </div>
    </div>
  <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0"><?php echo e($totalPenjualan); ?> Penjualan</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Produk</th>
                    <th scope="col">Penjual</th>
                    <th scope="col">Status</th>
                    <th scope="col">Traffic</th>
                    <th scope="col">Jml</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <?php if( is_null($sell->gambar) ): ?>
                          <div class="card text-center ml-1">
                            <i class="fas fa-shopping-bag fa-3x"></i>
                          </div>
                        <?php else: ?>
                          <a href="#" class="avatars rounded-circle mr-3">
                            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/foto_produk')); ?>/<?php echo e($sell->gambar); ?>" alt="Card image cap">
                          </a>
                        <?php endif; ?>
                      </div>
                    </th>
                    <th>
                      <?php echo e($sell->nama_barang); ?>

                    </th>
                    <td>
                     <?php echo e($sell->nama_penjual); ?>

                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class=" <?php echo e($sell->status == 'Offline' ? 'bg-warning' : 'bg-success'); ?> "></i> <?php echo e($sell->status); ?>

                      </span>
                    </td>
                    <td>
                      <?php echo e($sell->nama_traffic); ?>

                    </td>
                    <td>
                      <?php echo e($sell->jumlah); ?> <?php echo e($sell->satuan); ?>

                    </td>
                    <td>
                      <?php echo e($sell->created_at->format('l, d, M, Y')); ?>

                    </td>
                    <td class="text-center">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="btn  btn-success ml-3 mt-2" href="<?php echo e(url('/admin/penjualan')); ?>/<?php echo e(encrypt($sell->id)); ?>"><i class="fas fa-eye"></i> Detail</a><br>
                          
                          <?php if( $user->role == 'pemilik' || $user->role == 'administrator'): ?>
                            <button name="submit" onclick="onDestroy('<?php echo e(url('/admin/penjualan/' . encrypt($sell->id))); ?>', 'Yakin penjualan akan dihapus?')" type="submit" class="btn  ml-3 mt-2 btn-danger "><i class="fa fa-trash"></i> Hapus</button>
                          <?php endif; ?>

                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <?php echo e($penjualan->onEachSide(5)->links()); ?>

              </nav>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <form class="d-inline" id="destroy_form" action="" method="post">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/penjualan/index.blade.php ENDPATH**/ ?>