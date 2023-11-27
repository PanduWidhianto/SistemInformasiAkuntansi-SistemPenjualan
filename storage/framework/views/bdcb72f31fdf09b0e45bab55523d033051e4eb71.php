<?php $__env->startSection('rekap'); ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Anggota</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo e(number_format($jmlAnggota, 0, '.', '.')); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Penjualan</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo e(number_format($jmlPenjualan, 0, '.', '.')); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-cart "></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Keuntungan</h5>
                      <span class="h2 font-weight-bold mb-0">Rp. <?php echo e(number_format($jmlKeuntungan, 0, '.', '.')); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-money-bill-wave"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Kas</h5>
                      <span class="h2 font-weight-bold mb-0">Rp. <?php echo e(number_format($jmlKas, 0, '.', '.')); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-wallet"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Top Traffic</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $topTraffics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $traffic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($traffic->nama); ?>

                  </th>
                  <th>
                    <?php echo e($traffic->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Penjualan /tahun</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Tahun</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $penjualanPerTahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perTahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($perTahun->year); ?>

                  </th>
                  <th>
                    <?php echo e($perTahun->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	</div>
  <div class="row mt-3">
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Penjualan /bulan</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Bulan</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $penjualanPerBulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perBulan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($perBulan->month); ?> <?php echo e($perBulan->year); ?>

                  </th>
                  <th>
                    <?php echo e($perBulan->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Penjualan /hari</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $penjualanPerDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perDay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($perDay->dayname); ?>, <?php echo e($perDay->day); ?> <?php echo e($perDay->month); ?> <?php echo e($perDay->year); ?>

                  </th>
                  <th>
                    <?php echo e($perDay->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Top Provinsi</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $topProvinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provinsi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($provinsi->provinsi); ?>

                  </th>
                  <th>
                    <?php echo e($provinsi->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Top Kabupaten</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Kabupaten</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $topKabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kabupaten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($kabupaten->kabupaten); ?>

                  </th>
                  <th>
                    <?php echo e($kabupaten->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Top Kecamatan</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $topKecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($kecamatan->kecamatan); ?>

                  </th>
                  <th>
                    <?php echo e($kecamatan->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Top Kelurahan</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th style="width: 10%" scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jml</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $topKelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelurahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <th scope="row">
                    <?php echo e($kelurahan->kelurahan); ?>

                  </th>
                  <th>
                    <?php echo e($kelurahan->jumlah); ?>

                  </th>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php if(session('perusahaanSukses')): ?>
<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Perusahaan Berhasil Dibuat',
    showConfirmButton: false,
    timer: 1500
  })
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/dashboard/index.blade.php ENDPATH**/ ?>