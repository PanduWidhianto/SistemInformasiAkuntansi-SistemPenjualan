  <script src="<?php echo e(asset('/admin-template/js/plugins/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/admin-template/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <!--   Optional JS   -->
  <script src="<?php echo e(asset('/admin-template/js/plugins/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/admin-template/js/plugins/chart.js/dist/Chart.extension.js')); ?>"></script>
  <!--   Argon JS   -->
  <script src="<?php echo e(asset('/admin-template/js/argon-dashboard.min.js?v=1.1.0')); ?>"></script>
  <script src="<?php echo e(asset('/admin-template/sweetalert2/dist/sweetalert2.all.js')); ?>"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    
  </script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script src="<?php echo e(asset('/admin-template/js/app.js')); ?>">
    
  </script>
      <?php if(Session::get('gagal')): ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?php echo e(Session::get('gagal')); ?>',
      })
    </script>
    <?php elseif(Session::get('success')): ?>
    <script>
      Swal.fire(
        'Berhasil!',
        '<?php echo e(Session::get('success')); ?>',
        'success'
      )
    </script>
  <?php endif; ?>
  <?php echo $__env->yieldContent('script'); ?>
<?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/layouts/partials/footer.blade.php ENDPATH**/ ?>