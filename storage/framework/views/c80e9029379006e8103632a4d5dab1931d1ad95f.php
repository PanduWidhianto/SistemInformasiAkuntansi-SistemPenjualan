<?php $__env->startSection('rekap'); ?>

	<div class="row">
		<div class="col-lg-7 col-md-10">
	    	<h1 class="display-2 text-white"><i class="fas fa-shopping-cart"></i> Keranjang</h1>
	    	<p class="text-white mt-0 mb-5">Form Pengisian Penjualan</p>
	  	</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-xl-7 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Form Penjualan</h3>
            </div>
          </div>
        </div>
        <div class="card-body">


          <?php if($keranjang->count() <= 0): ?>
            <form method="POST" action="<?php echo e(url('/admin/keranjang')); ?>" >
              <?php echo csrf_field(); ?>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                          <label for="penjual">Nama Penjual</label>
                          <select name="penjual" class="form-control" id="penjual" required=""  <?php $__errorArgs = ['penjual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                            <option selected="" disabled="" value="">-- Pilih Penjual --</option>
                            <?php $__currentLoopData = $penjual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e(encrypt($row->id)); ?>" ><?php echo e($row->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['penjual'];
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
                      <div class="form-group focused">
                        <label class="form-control-label" for="nama_pembeli">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control form-control-alternative"  <?php $__errorArgs = ['nama_pembeli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> value="<?php echo e(old('nama_pembeli') ? old('nama_pembeli') : ''); ?>" placeholder="Masukan nama pembeli">
                        <?php $__errorArgs = ['nama_pembeli'];
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
                       <div class="form-group focused">
                          <label for="status">Status</label>
                          <select name="status" class="form-control"  <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="status" required>
                            <option selected disabled="" value="">-- Pilih Status --</option>
                            <option value="Online" <?php echo e(old('status') == 'Online' ? 'selected' : ''); ?>>Online</option>
                            <option value="Offline" <?php echo e(old('status') == 'Offline' ? 'selected' : ''); ?>>Offline</option>
                          </select>
                          <?php $__errorArgs = ['status'];
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
                      <div class="form-group focused">
                        <label for="traffics_id">Traffic</label>
                        <select class="form-control" name="traffics_id"  <?php $__errorArgs = ['traffics_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="traffics_id" required>
                          <option selected disabled="" value="">-- Pilih Traffic --</option>
                          <?php $__currentLoopData = $tarffics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $traffic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($traffic->id); ?>" <?php echo e(old('traffics_id') == $traffic->id ? 'selected' : ''); ?>><?php echo e($traffic->nama); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['traffics_id'];
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
                       <label for="form_sex">Provinsi <small>*</small></label>
                        <select class="form-control m-b"  <?php $__errorArgs = ['provinsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  id="propinsi">
                          <option selected="" value="">-- Pilih Provinsi --</option>
                       </select>
                        <input id="input_propinsi" name="provinsi" type="hidden" value="">
                        <?php $__errorArgs = ['provinsi'];
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
                       <label for="form_post">Kab / Kota <small>*</small></label>
                        <select class="form-control m-b"  <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  id="kabupaten">
                          <option selected="" value="">-- Pilih Kabupaten --</option>
                        </select>
                        <input id="input_kabupaten" name="kabupaten" type="hidden" value="">
                        <?php $__errorArgs = ['kabupaten'];
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
                     <label for="form_sex">Kecamatan <small>*</small></label>
                        <select class="form-control m-b"  <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  id="kecamatan">
                       <option selected="" value="">-- Pilih Kecamatan --</option>
                     </select>
                        <input id="input_kecamatan" name="kecamatan" type="hidden" value="">
                        <?php $__errorArgs = ['kecamatan'];
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
                     <label for="form_post">Kelurahan / Desa <small>*</small></label>
                      <select class="form-control m-b"  <?php $__errorArgs = ['kelurahan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="kelurahan">
                       <option selected="" value="">-- Pilih Kelurahan --</option>
                     </select>
                        <input id="input_kelurahan" name="kelurahan" type="hidden" value="">
                        <?php $__errorArgs = ['kelurahan'];
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
                  <div class="col-md-12">
                    <div class="form-group focused">
                        <label for="barang_id">Produk</label>
                        <select class="form-control"  <?php $__errorArgs = ['barang_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="barang_id" id="barang_id" required>
                          <option selected disabled="" value="">-- Pilih Produk --</option>
                          <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>" <?php echo e(old('barang_id') == $row->id ? 'selected' : ''); ?> ><?php echo e($row->nama); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['barang_id'];
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
                    <div class="form-group focused">
                      <label class="form-control-label" for="jumlah">Jumlah Produk</label>
                      <input type="number" name="jumlah"  <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> style="border: 1px solid red" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="jumlah" class="form-control form-control-alternative" value="<?php echo e(old('jumlah') ? old('jumlah') : ''); ?>" placeholder="Masukan jumlah">
                      <?php $__errorArgs = ['jumlah'];
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
              <!-- Description -->
              <div class="pl-lg-4">
                <div class="row">
                  </div>
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</button>
              </div>
            </form>
          <?php elseif( $keranjang->count() > 0  ): ?>
            <form method="POST" action="<?php echo e(url('/admin/keranjang/add')); ?>" >
              <?php echo csrf_field(); ?>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                        <label for="barang_id">Produk</label>
                        <select class="form-control" name="barang_id" id="barang_id"  required>
                          <option selected disabled="" value="">-- Pilih Produk --</option>
                          <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>" <?php echo e(old('barang_id') == $row->id ? 'selected' : ''); ?>><?php echo e($row->nama); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php $__errorArgs = ['barang_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <h5 class="text-danger ml-2 mt-1"> <?php echo e($message); ?> </h5>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="jumlah">Jumlah Produk</label>
                      <input type="number" name="jumlah" id="jumlah" class="form-control form-control-alternative" value="<?php echo e(old('jumlah') ? old('jumlah') : ''); ?>" placeholder="Masukan jumlah">
                      <?php $__errorArgs = ['jumlah'];
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
              <!-- Description -->
              <div class="pl-lg-4">
                <div class="row">
                  </div>
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</button>
              </div>
            </form>
          <?php endif; ?>
          





        </div>
      </div>
    </div>
    <?php if( $keranjang->count() > 0 ): ?>
      <div class="col-xl-5 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Keranjang</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
              <div class="pl-lg-4">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label for="penjual">Nama Penjual</label>
                      <input type="text" name="nama_pembeli" id="nama_pembeli" readonly="" class="form-control form-control-alternative" value="Tomy Wibowo" placeholder="">
              
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="nama_pembeli">Nama Pembeli</label>
                      <input type="text" name="nama_pembeli" id="nama_pembeli" readonly="" class="form-control form-control-alternative" value="Fra" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <div class="row">
                <div class="col">
                  <table class="table">
                    <?php $__currentLoopData = $keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th>Produk</th>
                        <th>:</th>
                        <th><?php echo e($cart->nama); ?></th>
                      </tr>
                      <tr>
                        <th>Jumlah</th>
                        <th>:</th>
                        <th><?php echo e($cart->jumlah); ?></th>
                      </tr>
                      <tr>
                        <th>Aksi</th>
                        <th>:</th>
                        <th><button type="button" onclick="onDestroy('<?php echo e(url('/admin/keranjang/' . encrypt($cart->id))); ?>', 'Yakin!')" class="btn btn-sm btn-danger" href="">Hapus</button></th>
                      </tr>
                      <tr>
                        <th colspan="3"></th>
                        
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                </div>
              </div>
              <!-- Description -->
                <a href="<?php echo e(url('/admin/checkout')); ?>" class="btn btn-primary float-right"><i class="fas fa-money-check"></i>&nbsp; Lihat Resi</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
    
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <form id="destroy_form" action="" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
  </form>

  <script type = "text/javascript" >
      var return_first = function() {
          var tmp = null;
          $.ajax({
              'async': false,
              'type': "get",
              'global': false,
              'dataType': 'json',
              'url': 'https://x.rajaapi.com/poe',
              'success': function(data) {
                  tmp = data.token;
              }
          });
          return tmp;
      }();
  $(document).ready(function() {
      $.ajax({
          url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/provinsi',
          type: 'GET',
          dataType: 'json',
          success: function(json) {
              if (json.code == 200) {
                  for (i = 0; i < Object.keys(json.data).length; i++) {
                      $('#propinsi').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                  }
              } else {
                  $('#kabupaten').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
              }
          }
      });
      $("#propinsi").change(function() {
          var propinsi = $("#propinsi").val();
          var textProv = $('#propinsi option:selected').text();
          $('#input_propinsi').val(textProv);
          $.ajax({
              url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/kabupaten',
              data: "idpropinsi=" + propinsi,
              type: 'GET',
              cache: false,
              dataType: 'json',
              success: function(json) {
                  $("#kabupaten").html('');
                  if (json.code == 200) {
                      for (i = 0; i < Object.keys(json.data).length; i++) {
                          $('#kabupaten').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                      }
                      $('#kecamatan').html($('<option>').text('-- Pilih Kecamatan --').attr('value', '-- Pilih Kecamatan --'));
                      $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --').attr('value', '-- Pilih Kelurahan --'));

                  } else {
                      $('#kabupaten').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
                  }
              }
          });
      });
      $("#kabupaten").change(function() {
          var kabupaten = $("#kabupaten").val();
          var textKab = $('#kabupaten option:selected').text();
          $('#input_kabupaten').val(textKab);

          $.ajax({
              url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/kecamatan',
              data: "idkabupaten=" + kabupaten + "&idpropinsi=" + propinsi,
              type: 'GET',
              cache: false,
              dataType: 'json',
              success: function(json) {
                  $("#kecamatan").html('');
                  if (json.code == 200) {
                      for (i = 0; i < Object.keys(json.data).length; i++) {
                          $('#kecamatan').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                      }
                      $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --').attr('value', '-- Pilih Kelurahan --'));
                      
                  } else {
                      $('#kecamatan').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
                  }
              }
          });
      });
      $("#kecamatan").change(function() {
          var kecamatan = $("#kecamatan").val();
          var textKec = $('#kecamatan option:selected').text();
          $('#input_kecamatan').val(textKec);
          $.ajax({
              url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/kelurahan',
              data: "idkabupaten=" + kabupaten + "&idpropinsi=" + propinsi + "&idkecamatan=" + kecamatan,
              type: 'GET',
              dataType: 'json',
              cache: false,
              success: function(json) {
                  $("#kelurahan").html('');
                  if (json.code == 200) {
                      for (i = 0; i < Object.keys(json.data).length; i++) {
                          $('#kelurahan').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                      }
                  } else {
                      $('#kelurahan').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
                  }
              }
          });
      });
      $("#kelurahan").change(function() {
          var textLur = $('#kelurahan option:selected').text();
          $('#input_kelurahan').val(textLur);
      });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/pages/keranjang/create.blade.php ENDPATH**/ ?>