<?php $__env->startSection('title'); ?>
Role List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Role List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Roles List</h4>
                <!-- breadcumbs -->
                <?php echo $__env->make('backend.layouts.partials.v2.breadcumbs_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end of breadcumbs -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
    <?php if(Auth::user()->hasRole('superadmin', 'web')): ?>
        <div>
            <p class="float-right">
                <a class="btn btn-warning waves-effect waves-light text-white fl-r" href="<?php echo e(route('roles.create')); ?>" type="button">Create Roles</a>
            </p>
        </div>
    <?php endif; ?>
    </div>

    <div class="row">
        <!-- new data table start -->
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="header-title"><b>Permission List</b></h4>
                <div class="p20">
                    <form action="<?php echo e(route('admin.roles.multiple.create')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="main-dashboard-inner-content" style="width: 100%; float: left;">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="nav-link <?php if($loop->index == 0): ?>active<?php endif; ?>" data-bs-toggle="tab" href="#<?php  echo str_replace(' ','-', $role->name) ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo e($role->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <!-- tab content start -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- now here just get the all role list -->
                                <?php 
                                    $i = 0;
                                    $counter = 0; 
                                ?>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane show <?php if($loop->index == 0): ?>active<?php endif; ?>" id="<?php  echo str_replace(' ','-', $role->name) ?>" role="tabpane<?php echo e($role->id); ?>" aria-labelledby="home-tab">
                                    <div class="form-row">
                                        <!-- print the all permission in a group -->
                                        <?php
                                            $i++;
                                        ?>
                                        <?php $__currentLoopData = $permissionGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="role_group_grid_box ow">
                                            <?php
                                            $permissions = App\Models\User::getPermissionsGroupNameById($group->id);
                                            $j = 1;
                                            ?>
                                            <div class="role_group_header">
                                                <h5><strong><?php echo e($group->group_name); ?></strong></h5>
                                                <div class="form-check ow">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input pr-group-<?php echo e($i); ?>" id="checkPermissionGroup-<?php echo e($i); ?>" value="<?php echo e($group->group_name); ?>" onclick="checkPermissionByGroupName('role-<?php echo e($i); ?>-management-checkbox', this)" <?php echo e(count($permissions) > 0 && App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''); ?> <?php echo ($role->name == 'superadmin' ? 'disabled' : '')
                                                        ?>/>
                                                        <label class="custom-control-label select-all-label" for="checkPermissionGroup-<?php echo e($i); ?>">Select All</label>
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                            <div class="role_group_header_body role-<?php echo e($i); ?>-management-checkbox">
                                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php 
                                                $counter++;
                                                //$permission_id_modified_value = $permission->id + $counter; 
                                            ?>
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" data-loop-value=<?php echo e($loop->index); ?> class="custom-control-input checkbox-permission-checkbox-list permission-child-<?php echo e($counter.'-rid-'.$role->id.'-'.$permission->id); ?>" data-value="<?php echo e($role->hasPermissionTo($permission->name)); ?>" name="permissions[<?php echo e($role->id); ?>][]" <?php echo e($role->hasPermissionTo($permission->name) ? 'checked' : ''); ?> id="checkPermission-<?php echo e($counter.'-rid-'.$role->id.'-'.$permission->id); ?>" value="<?php echo e($permission->name); ?>" onclick="permissionGroupCheckUncheck('permission-child-<?php echo e($counter.'-rid-'.$role->id.'-'.$permission->id); ?>', 'pr-group-<?php echo e($i); ?>', 'role-<?php echo e($i); ?>-management-checkbox')" <?php echo ($role->name == 'superadmin' ? 'disabled' : '')
                                                        ?>/>
                                                        <label class="custom-control-label permission-name-list-label" for="checkPermission-<?php echo e($counter.'-rid-'.$role->id.'-'.$permission->id); ?>"><?php echo e(str_replace(".", " ", $permission->name)); ?></label>
                                                        
                                                    </div>
                                                </div>
                                                <?php $j++; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!--end of print all role and permission here-->
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- end of role list loop here -->
                            </div>
                            <!-- tab content end -->
                        </div>
                        <?php if (\Illuminate\Support\Facades\Blade::check('role', 'superadmin')): ?>
                        <div class="form-submit-footer">
                            <input type="submit" name="btnSubmitMultipleRole" class="btn btn-primary" />
                        </div>
                        <?php endif; ?>
                    </form>
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

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/roles/v2/index_roles_v2.blade.php ENDPATH**/ ?>