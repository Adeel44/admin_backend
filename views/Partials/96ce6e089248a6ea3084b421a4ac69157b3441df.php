<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Main</span>
							</li>
							<li class="<?php echo e(Request::is('admin/index_admin') ? 'active' : ''); ?>">
								<a href="index_admin"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="<?php echo e(Request::is('admin/appointment-list') ? 'active' : ''); ?>">
								<a href="appointment-list"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li  class="<?php echo e(Request::is('admin/customers') ? 'active' : ''); ?>">
								<a href="customers"><i class="fe fe-users"></i> <span>Customers</span></a>
							</li>
							<li  class="<?php echo e(Request::is('admin/staff-list') ? 'active' : ''); ?>">
								<a href="staff-list"><i class="fe fe-user-plus"></i> <span>Staff</span></a>
							</li>
							<li  class="<?php echo e(Request::is('admin/patient-list') ? 'active' : ''); ?>">
								<a href="patient-list"><i class="fe fe-vector"></i> <span>Request Management</span></a>
							</li>
							<li  class="<?php echo e(Request::is('admin/booking') ? 'active' : ''); ?>">
								<a href="booking"><i class="fe fe-star-o"></i> <span>Booking Management</span></a>
							</li>
							<li  class="<?php echo e(Request::is('admin/subadmin-list') ? 'active' : ''); ?>">
								<a href="subadmin-list"><i class="fe fe-document"></i> <span>Subadmin List</span></a>
							</li>


						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
<?php /**PATH E:\PHP Xampp\htdocs\heils\resources\views/layout/partials/nav_admin.blade.php ENDPATH**/ ?>