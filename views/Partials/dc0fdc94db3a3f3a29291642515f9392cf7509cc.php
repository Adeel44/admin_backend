<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="content account-page" style="padding: 50px 0;">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3><?php echo e(ucfirst(config('multiauth.prefix'))); ?> Login <span>CareNow</span></h3>
                                </div>
                                <form method="POST" action="<?php echo e(route('admin.login')); ?>" aria-label="<?php echo e(__('Admin Login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group form-focus">
                                        <input id="email" type="email" class="form-control floating<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"
                                    required autofocus> <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span> <?php endif; ?>
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input id="password" type="password" class="form-control floating<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password"
                                        required> <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span> <?php endif; ?>
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <div class="text-right">

                                        <a class="forgot-link" href="<?php echo e(route('admin.password.request')); ?>">  <?php echo e(__('Forgot Your Password?')); ?> ?</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>



                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\heils\resources\views/vendor/multiauth/admin/login.blade.php ENDPATH**/ ?>