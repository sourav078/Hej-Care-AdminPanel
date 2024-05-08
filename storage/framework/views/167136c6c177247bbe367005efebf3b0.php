<?php $__env->startSection('title'); ?>
Create User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Create User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Create User Form</h4>
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
                <h4 class="header-title"><b>Create User</b></h4>
                <div class="p20">
                    <div>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('users.store')); ?>" method="POST" class="p20" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" id="txtFullName" class="form-control" placeholder="Enter Title" value="<?php echo e(old('name')); ?>"/>
                                    <label for="txtFullName">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" id="txtUserPassword" class="form-control" placeholder="type password" />
                                    <label for="txtUserPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password_confirmation" id="txtUserConfirmPassword" class="form-control" placeholder="type password" />
                                    <label for="txtUserConfirmPassword">Confirm Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" id="txtUserEmail" class="form-control" placeholder="type email address" value="<?php echo e(old('email')); ?>"/>
                                    <label for="txtUserEmail">Type Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="mobile_number" id="txtMobileNumber" class="form-control" placeholder="type mobile number" value="<?php echo e(old('mobile_number')); ?>"/>
                                    <label for="txtMobileNumber">Type Mobile Number</label>
                                </div>
                                <div class="form-group">
                                    <label for="lstRolesList">select multiple roles</label>
                                    
                                    <select name="roles[]" class="form-select select2" id="lstRolesList" multiple aria-label="multiple select example">
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after_domready_script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/users/v2/create_users_v2.blade.php ENDPATH**/ ?>