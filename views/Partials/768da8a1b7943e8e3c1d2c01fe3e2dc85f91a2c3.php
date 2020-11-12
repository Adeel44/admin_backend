<?php $__env->startSection('content'); ?>

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Subadmin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Subadmin</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
                                    <ul class="list-group">
                                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <?php echo e($admin->name); ?>

                                            <span class="badge">
                                                    <?php $__currentLoopData = $admin->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="badge-warning badge-pill ml-2">
                                                            <?php echo e($role->name); ?>

                                                        </span> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                            <?php echo e($admin->active? 'Active' : 'Inactive'); ?>

                                            <div class="float-right">
                                                <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($admin->id); ?>').submit();">Delete</a>
                                                <form id="delete-form-<?php echo e($admin->id); ?>" action="<?php echo e(route('admin.delete',[$admin->id])); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                                </form>

                                                <a href="<?php echo e(route('admin.edit',[$admin->id])); ?>" class="btn btn-sm btn-primary mr-3">Edit</a>
                                            </div>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if($admins->count()==0): ?>
                                        <p>No <?php echo e(config('multiauth.prefix')); ?> created Yet, only super <?php echo e(config('multiauth.prefix')); ?> is available.</p>
                                        <?php endif; ?>
                                    </ul>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

		<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<button type="button" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->

        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\heils\resources\views/admin/subadmin-list.blade.php ENDPATH**/ ?>