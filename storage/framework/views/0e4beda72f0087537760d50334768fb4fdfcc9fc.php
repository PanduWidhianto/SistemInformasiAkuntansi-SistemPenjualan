<?php $__env->startSection('rekap'); ?>
		<div class="row">
      <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white"><i class="fas fa-shopping-bag"></i> Tambah Produk</h1>
        <p class="text-white mt-0 mb-2">Menampilkan Form Tambah Produk</p>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	  <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card text-center ">
              <i style="" class="fas fa-shopping-bag fa-10x pt-5 pb-5"></i>
              <img style="display: none" class="img-thumbnail img-fluid" src="" alt="Card image cap">
          </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Form Tambah Produk</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="<?php echo e(url('/admin/produk')); ?>" enctype="multipart/form-data">
            	<?php echo csrf_field(); ?>
              <h6 class="heading-small text-muted mb-4">Informasi Produk</h6>
              <div class="pl-lg-4">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="nama">Nama Produk</label>
                      <input required="" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Masukan nama produk" <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> value="<?php echo e(old('nama')); ?>" type="text">

          						<?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          							<h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
          						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="harga_asli">Harga Asli</label>
                      <input required="" type="number" name="harga_asli" id="harga_asli" class="form-control form-control-alternative" <?php $__errorArgs = ['harga_asli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> value="<?php echo e(old('harga_asli')); ?>" placeholder="Masukan harga asli">
                    
            					<?php $__errorArgs = ['harga_asli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            						<h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
            					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="harga_jual">Harga Jual</label>
                      <input required="" type="number" name="harga_jual" id="harga_jual" class="form-control form-control-alternative" <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> value="<?php echo e(old('harga_jual')); ?>" placeholder="Masukan harga jual">
                    
                      <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <div class="pl-lg-4">
                <div class="row">
                	<div class="col-lg-6">
                	   <div class="form-group focused">
				                <label class="form-control-label" for="gambar">Foto Produk</label>
				                <input type="file" class="form-control-file" id="gambar" name="gambar">
				    
            						<?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            							<h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
            						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				            </div>
                	</div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="satuan">Satuan</label>
                      <input required="" id="satuan" name="satuan" class="form-control form-control-alternative" placeholder="masukan satuan" <?php $__errorArgs = ['satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> value="<?php echo e(old('satuan')); ?>" type="text">
                    
            					<?php $__errorArgs = ['satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            						<h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
            					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="deskripsi">Deskripsi Produk</label>
                  <textarea rows="4" name="deskripsi" <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" placeholder="Deskripsi Produk"><?php echo e(old('deskripsi')); ?></textarea>
          				
                  <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          					<h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
          				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

	<script>
		const inpFile  = document.getElementById('gambar');
		const imageSrc = document.querySelector('.row .col-xl-4 .card img.img-thumbnail');
		const profileDefault = document.querySelector('.row .col-xl-4 .card i');

		inpFile.addEventListener('change', function() {
			const file = this.files[0];
			if(file) {
      			const reader = new FileReader()

      			profileDefault.style.display = "none"
      			imageSrc.style.display = "block"

      			reader.addEventListener("load", function() {
      				imageSrc.setAttribute('src', this.result)
      			})

      			reader.readAsDataURL(file)
			}
		})
	</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/barang/create.blade.php ENDPATH**/ ?>