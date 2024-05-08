<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php echo $__env->make('backend.layouts.partials.v2.styles_v2_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript">
        const baseUrl = "<?php echo URL::to('/') ?>";
    </script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <?php echo $__env->make('backend.layouts.partials.v2.topbar_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Top Bar End -->

        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <?php echo $__env->make('backend.layouts.partials.v2.left_side_bar_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Left Sidebar End -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div> <!-- content -->
            <!-- modal for alert -->
            
            <!-- model for alert end -->
        </div>
        <!-- End content-page -->
        <footer class="footer text-right">
            Copyright © 2020 <a href="#">vioresume</a> | All Rights Reserved
        </footer>
    </div>
    <!-- END wrapper -->


    <!-- bootstrap js  -->
    <script src="<?php echo e(asset('backend/assets_v2/js/bootstrap.min.js')); ?>"></script>
    <!-- tagsinput js  -->
    <script src="<?php echo e(asset('backend/assets_v2/js/bootstrap-tagsinput.js')); ?>"></script>
    <!-- dataTables js  -->
    <script src="<?php echo e(asset('backend/assets_v2/js/dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets_v2/js/datatables.button.js')); ?>"></script>


    <!-- chart js  -->
    
    <!--  js -->
    <script src="<?php echo e(asset('backend/assets_v2/js/waves.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets_v2/js/jquery.app.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets_v2/js/functions.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets_v2/js/common-script.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- on_demand_footer_script_if_exist is for if any script need to load on this master template. example : chart.js related script -->
    <?php echo $__env->yieldContent('on_demand_footer_script_if_exist'); ?>
    <!-- script on ready -->
    <?php echo $__env->yieldContent('after_domready_script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/layouts/master_v2.blade.php ENDPATH**/ ?>