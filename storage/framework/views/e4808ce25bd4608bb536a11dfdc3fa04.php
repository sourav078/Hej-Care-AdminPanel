<?php $__env->startSection('title'); ?>
Dashboard Page - Admin Panel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
Dashboard Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <!-- breadcumbs -->
                <?php echo $__env->make('backend.layouts.partials.v2.breadcumbs_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end of breadcumbs -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.list')): ?>
        
<div class="col-lg-3 col-md-6 mb30">
    <div class="card bg-warning">
        <div class="desh-card card-body">
            <a href="<?php echo e(route('roles.index')); ?>">
                <div class="row mb30 align-items-center">
                    <div class="col">
                        <h3 class="color-white"><?php echo e($total_roles); ?></h3>
                    </div>
                    <div class="col-auto">
                        <p class="color-white">Roles</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div><!-- end col-->
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.list')): ?>


<div class="col-lg-3 col-md-6 mb30">
    <div class="card bg-warning">
        <div class="desh-card card-body">
            <a href="<?php echo e(route('permission.index')); ?>">
                <div class="row mb30 align-items-center">
                    <div class="col">
                        <h3 class="color-white"><?php echo e($total_permissions); ?></h3>
                    </div>
                    <div class="col-auto">
                        <p class="color-white">Permission</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div><!-- end col-->
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.list')): ?>
    <?php if (isset($component)) { $__componentOriginald9d483af1fd319ce0ab419f6b5c52fdc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9d483af1fd319ce0ab419f6b5c52fdc = $attributes; } ?>
<?php $component = App\View\Components\UserTypeRoleUserCountCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-type-role-user-count-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\UserTypeRoleUserCountCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9d483af1fd319ce0ab419f6b5c52fdc)): ?>
<?php $attributes = $__attributesOriginald9d483af1fd319ce0ab419f6b5c52fdc; ?>
<?php unset($__attributesOriginald9d483af1fd319ce0ab419f6b5c52fdc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9d483af1fd319ce0ab419f6b5c52fdc)): ?>
<?php $component = $__componentOriginald9d483af1fd319ce0ab419f6b5c52fdc; ?>
<?php unset($__componentOriginald9d483af1fd319ce0ab419f6b5c52fdc); ?>
<?php endif; ?>
<?php endif; ?>
</div><!-- end row -->
</div> <!-- container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/dashboard/index_v2.blade.php ENDPATH**/ ?>