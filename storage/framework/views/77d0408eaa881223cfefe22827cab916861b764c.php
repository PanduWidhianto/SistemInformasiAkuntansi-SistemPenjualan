<?php $__env->startSection('rekap'); ?>

	<div class="row">
		<div class="col-lg-7 col-md-10">
	    	<h1 class="display-2 text-white"><?php echo e($perusahaan->nama); ?></h1>
	    	<p class="text-white mt-0 mb-4"><?php echo e($perusahaan->slogan); ?></p>
	  	</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card text-center ">
            <i style="<?php echo e(!is_null($perusahaan->logo) ? 'display: none' : ''); ?>" class="fas fa-building fa-10x pt-5 pb-5"></i>
          <img style="<?php echo e(is_null($perusahaan->logo) ? 'display: none' : ''); ?>" class="img-thumbnail img-fluid" src="<?php echo e(asset('/storage/logo_perusahaan/' . $perusahaan->logo)); ?>" alt="Card image cap">
        </div>
    </div>
    <div class="col-xl-8 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Edit Perusahaan</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
		      <form method="post" action="<?php echo e(url('/admin/profil-perusahaan/' . encrypt($perusahaan->id))); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="pl-lg-4">
              <div class="row">
              	<div class="col">
              	  <div class="form-group focused">
                    <label class="form-control-label" for="nama">Nama Perusahaan</label>
                    <input type="text" id="nama" name="nama" <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative " style="background: white;" value="<?php echo e(old('nama') ? old('nama') : $perusahaan->nama); ?>">
                  
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
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="telp">Telp</label>
                    <input type="text" name="telp" id="telp" <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('telp') ? old('telp') : $perusahaan->telp); ?>">
                  
        						<?php $__errorArgs = ['telp'];
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
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" name="email" id="email" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('email') ? old('email') : $perusahaan->email); ?>">
                  
        						<?php $__errorArgs = ['email'];
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
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="fax">Fax</label>
                    <input type="text" name="fax" id="fax" <?php $__errorArgs = ['fax'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('fax') ? old('fax') : $perusahaan->fax); ?>">
                  
        						<?php $__errorArgs = ['fax'];
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
                    <label class="form-control-label" for="site">Situs</label>
                    <input type="text" name="site" id="site" <?php $__errorArgs = ['site'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('site') ? old('site') : $perusahaan->site); ?>">
                  
        						<?php $__errorArgs = ['site'];
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
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('facebook') ? old('facebook') : $perusahaan->facebook); ?>">
                  
        						<?php $__errorArgs = ['facebook'];
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
                    <label class="form-control-label" for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" style="background: white" value="<?php echo e(old('instagram') ? old('instagram') : $perusahaan->instagram); ?>">
                  </div>
                </div>
              </div>
              <div class="row">
              	<div class="col">
              		<div class="form-group focused">
    						    <label for="logo">Logo</label>
    						    <input type="file" class="form-control-file " <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="gambar" name="logo">
				          </div>
              	</div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="alamat">Alamat</label>
                    <textarea style="background: white" <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" name="alamat" id="alamat" rows="4"><?php echo e(old('alamat') ? old('alamat') : $perusahaan->alamat); ?></textarea>
                  
        						<?php $__errorArgs = ['alamat'];
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
                    <label class="form-control-label" for="slogan">Slogan</label>
                    <textarea style="background: white" <?php $__errorArgs = ['slogan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" name="slogan" id="slogan" rows="4"><?php echo e(old('slogan') ? old('slogan') : $perusahaan->slogan); ?></textarea>
                  
        						<?php $__errorArgs = ['slogan'];
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
                    <label class="form-control-label" for="deskripsi">Deskripsi</label>
                    <textarea style="background: white" <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" name="deskripsi" id="deskripsi" rows="4"><?php echo e(old('deskripsi') ? old('deskripsi') : $perusahaan->deskripsi); ?></textarea>
                  
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
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="sejarah">Sejarah</label>
                    <textarea style="background: white" <?php $__errorArgs = ['sejarah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> class="form-control form-control-alternative" name="sejarah" id="sejarah" rows="4"><?php echo e(old('sejarah') ? old('sejarah') : $perusahaan->sejarah); ?></textarea>
                  
        						<?php $__errorArgs = ['sejarah'];
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
            <button type="submit" class="btn btn-primary float-right">Update</button>
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/profil-perusahaan/edit.blade.php ENDPATH**/ ?>