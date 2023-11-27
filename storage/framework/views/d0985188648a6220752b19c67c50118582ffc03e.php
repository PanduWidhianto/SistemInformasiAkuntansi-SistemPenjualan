<?php echo $__env->make('admin.layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="">
	<?php echo $__env->make('admin.layouts.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('admin.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="main-content">
		<?php echo $__env->make('admin.layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="container-fluid mt--7">
			<?php echo $__env->yieldContent('content'); ?>
			<div class="container mt-5 pb-5">
        		<div class="copyright text-center my-auto">
          			<span><br>
          				Copyright ©2020 | This application is made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://api.whatsapp.com/send?phone=6285229940851">Tomy Wibowo</a>
        			</span><br><br><br>
        		</div>
      		</div>
		</div>
	</div>
	<?php echo $__env->make('admin.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH E:\pandu\penjualan-laravel\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>