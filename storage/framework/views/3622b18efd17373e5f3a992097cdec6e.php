<?php $__env->startSection('title'); ?>
Edit Pemmission
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Edit Permission
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Permission</h4>
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
                <h4 class="header-title"><b>Edit Permission : <?php echo e($permission->name); ?></b></h4>
                <div class="p20">
                    <div>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('permission.update', $permission->id)); ?>" method="POST">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <div class="form-row">
                                <label for="name">Group Name</label>
                                <select class="form-control" name="lstGroupNameOnStore">
                                    <option>select group</option>
                                    <?php $__currentLoopData = $permissionGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id); ?>" <?php echo e(( $row->id == $permission->group_id) ? 'selected' : ''); ?>>
                                        <?php echo e($row->group_name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="name">Permission Name</label>
                                <input type="text" class="form-control" id="name" name="txtPermissionRouteName" placeholder="Enter Route Name" value="<?php echo e($permission->name); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Route</button>
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
<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/permission_group/v2/edit_permission_v2.blade.php ENDPATH**/ ?>