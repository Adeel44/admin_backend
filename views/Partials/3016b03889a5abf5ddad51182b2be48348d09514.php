<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php if(!Route::is(['appointment-list','specialities','doctor-list','patient-list','reviews','transactions-list','settings','invoice-report','profile','login','register','forgot-password','lock-screen','error-404','error-500','blank-page','components','form-basic','form-inputs','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables','invoice','calendar'])): ?>
        <title>Carenow - Dashboard</title>
        <?php endif; ?>
        <?php if(Route::is(['appointment-list'])): ?>
        <title>Carenow - Appointment List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['specialities'])): ?>
        <title>Carenow - Specialities Page</title>
		<?php endif; ?>
        <?php if(Route::is(['doctor-list'])): ?>
        <title>Carenow - Doctor List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['patient-list'])): ?>
        <title>Carenow - Patient List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['reviews'])): ?>
        <title>Carenow - Reviews Page</title>
        <?php endif; ?>
        <?php if(Route::is(['transactions-list'])): ?>
        <title>Carenow - Transactions List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['settings'])): ?>
        <title>Carenow - Settings Page</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice-report'])): ?>
        <title>Carenow - Invoice Report Page</title>
        <?php endif; ?>
        <?php if(Route::is(['profile'])): ?>
        <title>Carenow - Profile</title>
        <?php endif; ?>
        <?php if(Route::is(['login'])): ?>
        <title>Carenow - Login</title>
		<?php endif; ?>
        <?php if(Route::is(['register'])): ?>
        <title>Carenow - Register</title>
        <?php endif; ?>
        <?php if(Route::is(['forgot-password'])): ?>
        <title>Carenow - Forgot Password</title>
        <?php endif; ?>
        <?php if(Route::is(['lock-screen'])): ?>
        <title>Carenow - Lock Screen</title>
        <?php endif; ?>
        <?php if(Route::is(['error-404'])): ?>
        <title>Carenow - Error 404</title>
		<?php endif; ?>
        <?php if(Route::is(['error-500'])): ?>
        <title>Carenow - Error 500</title>
		<?php endif; ?>
        <?php if(Route::is(['blank-page'])): ?>
        <title>Carenow - Blank Page</title>
        <?php endif; ?>
        <?php if(Route::is(['components'])): ?>
        <title>Carenow - Components</title>
        <?php endif; ?>
        <?php if(Route::is(['form-basic'])): ?>
        <title>Carenow - Basic Inputs</title>
        <?php endif; ?>
        <?php if(Route::is(['form-inputs'])): ?>
        <title>Carenow - Form Input Groups</title>
        <?php endif; ?>
        <?php if(Route::is(['form-horizontal'])): ?>
        <title>Carenow - Horizontal Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-vertical'])): ?>
        <title>Carenow - Vertical Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-mask'])): ?>
        <title>Carenow - Form Mask</title>
        <?php endif; ?>
        <?php if(Route::is(['form-validation'])): ?>
        <title>Carenow - Form Validation</title>
        <?php endif; ?>
        <?php if(Route::is(['tables-basic'])): ?>
        <title>Carenow - Tables Basic</title>
        <?php endif; ?>
        <?php if(Route::is(['data-tables'])): ?>
        <title>Carenow - Data Tables</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice'])): ?>
        <title>Carenow - Invoice</title>
        <?php endif; ?>
        <?php if(Route::is(['calendar'])): ?>
        <title>Carenow - Calendar</title>
        <?php endif; ?>
        <?php if(Route::is(['map-list'])): ?>
        <title>Carenow - Map</title>
        <?php endif; ?>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets_admin/img/favicon.png')); ?>">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap.min.css')); ?>">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/font-awesome.min.css')); ?>">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/feathericon.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/morris/morris.css')); ?>">
        <!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/select2.min.css')); ?>">
        	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap-datetimepicker.min.css')); ?>">

		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')); ?>">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/datatables/datatables.min.css')); ?>">

		<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/style.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/all.min.css')); ?>">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fancybox/jquery.fancybox.min.css')); ?>">
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/dropzone/dropzone.min.css')); ?>">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-datetimepicker.min.css')); ?>">
    <!-- Full Calander CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fullcalendar/fullcalendar.min.css')); ?>">


<?php /**PATH C:\xampp\htdocs\heils\resources\views/layout/partials/head_admin.blade.php ENDPATH**/ ?>