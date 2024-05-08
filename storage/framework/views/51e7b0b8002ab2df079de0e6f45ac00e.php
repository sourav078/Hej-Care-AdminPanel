<?php $__env->startSection('title'); ?>
Create Permission Group
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Create Permission Group
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Create Permission Group</h4>
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
                <h4 class="header-title"><b>Create Permission Group</b></h4>
                <div class="p20">
                    <div>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('permission.store')); ?>" method="POST" class="p20">
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <div class="form-group">
                                    <select class="form-control" name="lstGroupNameOnStore">
                                        <option value="">Select Group</option>
                                        <?php $__currentLoopData = $permissionGroupName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_permission_group_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row_permission_group_name->id); ?>"><?php echo e($row_permission_group_name->group_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtPermissionRouteName">Enter Permission Route Name</label>
                                    <input type="text" name="txtPermissionRouteName" id="txtPermissionRouteName" class="form-control" placeholder="type permission route name" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Group</button>
                                </div>
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

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/permission_group/v2/create_permission_v2.blade.php ENDPATH**/ ?>