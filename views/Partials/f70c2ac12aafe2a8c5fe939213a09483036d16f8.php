<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Roles
                    <?php if (\Illuminate\Support\Facades\Blade::check('permitTo', 'CreateRole')): ?>
                    <span class="float-right">
                        <a href="<?php echo e(route('admin.role.create')); ?>" class="btn btn-sm btn-success">New Role</a>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="card-body">
                    <?php echo $__env->make('multiauth::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <ol class="list-group">
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo e($role->name); ?>

                            <span class="badge badge-primary badge-pill"><?php echo e($role->admins->count()); ?> <?php echo e(ucfirst(config('multiauth.prefix'))); ?></span>
                            <span class="badge badge-warning badge-pill"><?php echo e($role->permissions->count()); ?>

                                Permissions</span>
                            <div class="float-right">
                                <?php if (\Illuminate\Support\Facades\Blade::check('permitTo', 'DeleteRole,UpdateRole')): ?>
                                <a href="" class="btn btn-sm btn-secondary mr-3"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($role->id); ?>').submit();">Delete</a>
                                <form id="delete-form-<?php echo e($role->id); ?>"
                                    action="<?php echo e(route('admin.role.delete',$role->id)); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                </form>
                                <?php endif; ?>

                                <?php if (\Illuminate\Support\Facades\Blade::check('permitTo', 'UpdateRole')): ?>
                                <a href="<?php echo e(route('admin.role.edit',$role->id)); ?>"
                                    class="btn btn-sm btn-primary mr-3">Edit</a>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('multiauth::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\heils\vendor\bitfumes\laravel-multiauth\src/views/roles/index.blade.php ENDPATH**/ ?>