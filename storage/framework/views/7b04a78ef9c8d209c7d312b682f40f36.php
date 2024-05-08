<ol class="breadcrumb">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard.view')): ?>
    <li>
        <a href="<?php echo e(route('admin.home')); ?>">Dashboard</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('group.list')): ?>
    <li>
        <a href="<?php echo e(route('group.index')); ?>">Group</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.list')): ?>
    <li>
        <a href="<?php echo e(route('permission.index')); ?>">Permission</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.list')): ?>
    <li>
        <a href="<?php echo e(route('roles.index')); ?>">Role</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.list')): ?>
    <li>
        <a href="<?php echo e(route('users.index')); ?>">User</a>
    </li>
    <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service.list')): ?>
    <li>
        <a href="<?php echo e(route('service.index')); ?>">Service</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('videoQuestion.list')): ?>
    <li>
        <a href="<?php echo e(route('video_question.index')); ?>">Question</a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('jobInterest.list')): ?>
    <li>
        <a href="<?php echo e(route('job_interest.index')); ?>">Job Interest</a>
    </li>
    <?php endif; ?>
    <li class="active">
        <?php echo $__env->yieldContent('active_breadcumbs_title'); ?>
    </li>
</ol>
<?php /**PATH C:\xampp\htdocs\Hej-Care_AdminPanel\resources\views/backend/layouts/partials/v2/breadcumbs_v2.blade.php ENDPATH**/ ?>