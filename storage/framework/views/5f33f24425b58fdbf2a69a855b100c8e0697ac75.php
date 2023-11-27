<?php $__env->startSection('rekap'); ?>

  <div class="row">
    <div class="col-lg-7 col-md-9">
      <h1 class="display-2 text-white"><i class="fas fa-shopping-bag"></i> Produk</h1>
      <p class="text-white mt-0 mb-2">Menampilkan List Daftar Produk</p>
    </div>
    <div class="offset-md-1 col-md-2  offset-lg-1 col-lg-3">
      <h1 class="display-3 text-white float-right "><?php echo e($jmlProduk); ?> Produk</h1>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php if( $user->role == 'pemilik' || $user->role == 'administrator' ): ?>
    <div class="row">
      <div style="margin-top: -20px" class="col-md-6 mb-3">
        <a href="<?php echo e(url('/admin/produk/create')); ?>" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Produk</a> 
      </div>
    </div>
  <?php endif; ?>
	<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h1 class="display-3 mb-0">Daftar Produk</h1>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga Jual</th>
                <th class="text-center" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <?php if( is_null($item->gambar) ): ?>
                      <div class="card text-center ml-1">
                        <i class="fas fa-shopping-bag fa-3x"></i>
                      </div>
                    <?php else: ?>
                      <a href="#" class="avatars rounded-circle mr-3">
                        <img class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/foto_produk')); ?>/<?php echo e($item->gambar); ?>" alt="Card image cap">
                      </a>
                    <?php endif; ?>
                  </div>
                </th>
                <td>
                  <?php echo e($item->nama); ?>

                </td>
                <td>
                  Rp. <?php echo e(number_format($item->harga_jual, 0, '.', '.')); ?>

                </td>
                <td class="text-center">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="btn  btn-success ml-3 mt-2" href="<?php echo e(url('/admin/produk')); ?>/<?php echo e(encrypt($item->id)); ?>"><i class="fas fa-eye"></i> Lihat</a><br>
                      <?php if($user->role == 'pemilik' || $user->role == 'administrator'): ?>
                        <a class="btn  btn-primary ml-3 mt-2" href="<?php echo e(url('/admin/produk')); ?>/<?php echo e(encrypt($item->id)); ?>/edit"><i class="fas fa-pen"></i> Edit</a><br>
                        <button type="button" onclick="onDestroy('<?php echo e(url('/admin/produk/' . encrypt($item->id))); ?>', 'Yakin, produk <?php echo e($item->nama); ?> akan dihapus?')" type="submit" class="btn  ml-3 mt-2 btn-danger "><i class="fa fa-trash"></i> Hapus</button>
                      <?php endif; ?>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <br><br>
          </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <?php echo e($items->onEachSide(5)->links()); ?>

          </nav>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <form id="destroy_form" method="post" action="">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
  </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/barang/index.blade.php ENDPATH**/ ?>