<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.partials.head_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <?php if(Route::is(['map-grid'])): ?>
  <body class="map-page">
  <?php endif; ?>
  <?php if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500'])): ?>
  <?php echo $__env->make('layout.partials.header_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('layout.partials.nav_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php endif; ?>
 <?php echo $__env->yieldContent('content'); ?>
 <?php echo $__env->make('layout.partials.footer_admin-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html>
<?php /**PATH E:\PHP Xampp\htdocs\heils\resources\views/layout/mainlayout_admin.blade.php ENDPATH**/ ?>