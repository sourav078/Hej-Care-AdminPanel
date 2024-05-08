<?php $__env->startSection('title'); ?>
Edit Account Settings
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Edit Account Settings
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Account Settings</h4>
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
                <h4 class="header-title"><b>Edit User : <?php echo e($user->name); ?></b></h4>
                <div class="p20">
                    <div>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- main form start -->
                        <form autocomplete="off" action="<?php echo e(route('admin.home.account.settings.submit', $user->id)); ?>" method="POST" id="form-edit-user" enctype="multipart/form-data">
                            <?php echo method_field('POST'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form">
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="name">Full name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" value="<?php echo e($user->name); ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="email">User Email</label>
                                    <input readonly type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo e($user->email); ?>">
                                </div>
                                <div class="form-row">
                                    <?php if($userMediaInfoModel != null && file_exists('storage/images/profile_image/'.$userMediaInfoModel->profile_image)): ?>
                                        <img src="<?php echo e(asset('storage/images/profile_image/'.$userMediaInfoModel->profile_image)); ?>" alt="" title="<?php echo e($user->firstname); ?>" width="60"/>
                                    <?php endif; ?>
                                    <label for="profile_image">Upload Profile Image</label>
                                    <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                                </div>
                                <div class="form-row">
                                    <button onclick="toggle_password()" class="btn btn-link btn-toggle-password" type="button">Open change password field</button>
                                </div>
                                <div class="wrap-password-change"></div>
                                <div class="save-button-form-v1">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Account Information</button>
                                </div>
                            </div>
                        </form>
                        <!-- main form end -->
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
<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/role-functions-list.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/onload-scripts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after_domready_script'); ?>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $("#form-edit-user").attr('autocomplete', 'off');
        $("#txtUserConfirmPassword").val('');
    })
    /*
        Group header select task (select all check box seletor task auto by this script) (very important)
    */
    $(".role_group_grid_box").each(function(index, element) {
        let index_increment = index + 1;
        let current_group_inner_item_length = $(element).find('div.role_group_header_body div.form-check').length;
        if ($(element).find('.role_group_header_body .checkbox-permission-checkbox-list:checked').length === current_group_inner_item_length) {
            $('.pr-group-' + index_increment).prop('checked', true);
        } else {
            $('.pr-group-' + index_increment).prop('checked', false);
        }
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/dashboard/account_settings.blade.php ENDPATH**/ ?>