<?php $__env->startSection('title'); ?>
    Permission Lists Pages
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
    Permission Lists
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-box">
                    <h4 class="page-title">Permission Lists</h4>
                    <!-- breadcumbs -->
                    <?php echo $__env->make('backend.layouts.partials.v2.breadcumbs_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- end of breadcumbs -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- end row -->
    <div class="row">
    <?php if(Auth::user()->hasPermissionTo('permission.create.form.view')): ?>
        <div>
            <p class="float-right">
                <a class="btn btn-warning waves-effect waves-light text-white fl-r" href="<?php echo e(route('permission.create')); ?>" type="button">Create Permission</a>
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
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">SL</th>
                                    <th width="20%">Name</th>
                                    <th width="20%">Guard Name</th>
                                    <th width="20%">Group Name</th>
                                    <th width="35%">Action Name</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $permissionModel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->guard_name); ?></td>
                                    <td><?php echo e($row->group_name); ?></td>
                                    <td>
                                        <a class="btn btn-info text-white" href=<?php echo e(route('permission.edit', $row->permission_main_id)); ?>>Edit</a>
                                        <a class="btn btn-danger text-white" href="<?php echo e(route('permission.destroy', $row->permission_main_id)); ?>" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($row->permission_main_id); ?>').submit();">Delete</a>
                                        <form id="delete-form-<?php echo e($row->permission_main_id); ?>" action="<?php echo e(route('permission.destroy', $row->permission_main_id)); ?>" method="POST" style="display: none;">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- new data table end -->
        </div>
    </div> <!-- container -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after_domready_script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/permission_group/v2/index_permission_v2.blade.php ENDPATH**/ ?>