<?php $__env->startSection('title'); ?>
Create Role
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Role List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Create Roles</h4>
                <!-- breadcumbs -->
                <?php echo $__env->make('backend.layouts.partials.v2.breadcumbs_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end of breadcumbs -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <!-- new data table start -->
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="header-title"><b>Create Roles</b></h4>
                <div class="p20">
                    <div>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('roles.store')); ?>" method="POST" class="p20">
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <div class="form-group">
                                    <label for="txtRoleName">Enter a role name</label>
                                    <input type="text" name="name" class="form-control" id="txtRoleName" placeholder="Enter a role name">
                                </div>
                                <div class="form-group permission-checkbox-raw-wrapper">
                                    <label for="name">Permissons</label>
                                    <div class="form-check">
                                        <input type="checkbox" name="" class="form-check-input" id="checkPermissionAll" value="" />
                                        <label class="form-check-label" for="checkPermissionAll">All</label>
                                    </div>
                                    <hr>
                                    <?php $i = 1; ?>
                                    <?php $__currentLoopData = $permissionGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <?php
                                        // $permissions = App\Models\User::getPermissionsByGroupName($group->name);
                                        $permissions = App\Models\User::getPermissionsGroupNameById($group->id);
                                        $j = 1;
                                        ?>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input pr-group-<?php echo e($i); ?>" id="checkPermissionGroup-<?php echo e($i); ?>" value="<?php echo e($group->group_name); ?>" onclick="checkPermissionByGroupName('role-<?php echo e($i); ?>-management-checkbox', this)" />
                                                    <label class="custom-control-label" for="checkPermissionGroup-<?php echo e($i); ?>"><?php echo e($group->group_name); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 role-<?php echo e($i); ?>-management-checkbox">
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input checkbox-permission-checkbox-list permission-child-<?php echo e($permission->id); ?>" name="permissions[]" id="checkPermission-<?php echo e($permission->id); ?>" value="<?php echo e($permission->name); ?>" onclick="permissionGroupCheckUncheck('permission-child-<?php echo e($permission->id); ?>', 'pr-group-<?php echo e($i); ?>', 'role-<?php echo e($i); ?>-management-checkbox')" />
                                                    <label class="custom-control-label" for="checkPermission-<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                                </div>
                                            </div>
                                            <?php $j++; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- new data table end -->
    </div>
</div> <!-- container -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('on_demand_footer_script_if_exist'); ?>
<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/role-functions-list.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/onload-scripts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after_domready_script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/roles/v2/create_roles_v2.blade.php ENDPATH**/ ?>