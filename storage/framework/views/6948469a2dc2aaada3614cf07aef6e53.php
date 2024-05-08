<!-- LOGO -->
<div class="topbar-left">
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo">
        <span><img src="<?php echo e(asset('backend/assets_v2/images/logo.png')); ?>" class="logo-name img-fluid"></span>
    </a>
</div>

<nav class="navbar navbar-custom ">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <button class="button-menu-mobile open-left waves-light waves-effect">
                <img src="<?php echo e(asset('backend/assets_v2/images/icon/toggle.png')); ?>" class="top-toggle img-fluid">
            </button>
        </li>
    </ul>
    <!--left side-->
        <!-- end of showing vendor balance info -->
    <ul class="nav navbar-nav pull-right">
        <li class="nav-item dropdown">
            <?php if(auth()->guard()->check()): ?>
            <a class="nav-link  nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <?php if(isset($profileImage) && file_exists('storage/images/profile_image/thumb/'.$profileImage)): ?>
                <img src="<?php echo e(asset('storage/images/profile_image/thumb/'.$profileImage)); ?>" alt="" title="<?php echo e(auth()->user()->firstname); ?>" width="60" />
                <?php else: ?>
                <img src="<?php echo e(asset('backend/assets_v2/images/users/avatar-1.jpg')); ?>" alt="user" class="top-avatar img-circle">
                <?php endif; ?>
                <span class="name-avatar"><?php echo e(Auth::user()->full_name); ?><i class="icofont-thin-down"></i></span>
            </a>
            <div class="dropdown-menu">
                <a href="<?php echo e(route('admin.home.account.settings')); ?>" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-power"></i> <span>User Settings</span>
                </a>
                 <a href="<?php echo e(route('admin.logout')); ?>" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-power"></i> <span class="text-danger">Logout</span>
                </a>
            </div>
            <?php endif; ?>
        </li>
    </ul>

</nav>
<?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/layouts/partials/v2/topbar_v2.blade.php ENDPATH**/ ?>