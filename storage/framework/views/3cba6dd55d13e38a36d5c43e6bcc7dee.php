<div class="sidebar-inner">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <ul>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard.view')): ?>
            <li class="has_sub">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect">
                    <img src="<?php echo e(asset('backend/assets_v2/images/icon/dashboard-01.svg')); ?>" class="img-fluid">
                    <span>Dashboard</span>
                </a>
            </li>
            <?php endif; ?>
            <!-- role all menu here -->
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['roles.list', 'group.list', 'permission.list'])): ?>
            <li <?php if(Route::currentRouteName() == 'roles.index' || Route::currentRouteName() == 'roles.edit' || Route::currentRouteName() == 'roles.create'): ?> class="has_sub active" <?php else: ?> class="has_sub" <?php endif; ?>>
                <a href="javascript:void(0);" class="waves-effect">
                    <img src="<?php echo e(asset('backend/assets_v2/images/icon/Role-management-03.svg')); ?>" class="img-fluid">
                    <span>Role Management</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('group.list')): ?>
                    <li <?php if(Route::currentRouteName() == 'group.index' || Route::currentRouteName() == 'group.edit' || Route::currentRouteName() == 'group.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                        <a href="javascript:void(0);" class="waves-effect">
                            <span>Group</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li <?php if(Route::currentRouteName() == 'group.index'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('group.index')); ?>" class="waves-effect">
                                    <span>Group List</span>
                                </a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('group.create.form.view')): ?>
                            <li <?php if(Route::currentRouteName() == 'group.create'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('group.create')); ?>" class="waves-effect">
                                    <span>Group Create</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.list')): ?>
                    <li <?php if(Route::currentRouteName() == 'permission.index' || Route::currentRouteName() == 'permission.edit' || Route::currentRouteName() == 'permission.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                        <a href="javascript:void(0);" class="waves-effect">
                            <span>Permission</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li <?php if(Route::currentRouteName() == 'permission.index'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('permission.index')); ?>" class="waves-effect">
                                    <span>Permission List</span>
                                </a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.create.form.view')): ?>
                            <li <?php if(Route::currentRouteName() == 'permission.create'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('permission.create')); ?>" class="waves-effect">
                                    <span>Permission Create</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['roles.list', 'roles.create.form.view'])): ?>
                    <li <?php if(Route::currentRouteName() == 'roles.list' || Route::currentRouteName() == 'roles.create.form.view'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                        <a href="javascript:void(0);" class="waves-effect">
                            <span>Role</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.list')): ?>
                            <li <?php if(Route::currentRouteName() == 'roles.index'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('roles.index')); ?>" class="waves-effect">
                                    <span>Role List</span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.create.form.view')): ?>
                            <li <?php if(Route::currentRouteName() == 'roles.create'): ?> class="active" <?php endif; ?>>
                                <a href="<?php echo e(route('roles.create')); ?>" class="waves-effect">
                                    <span>Role Create</span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>
            <!-- end of role menu -->
            <!-- user menu -->
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.list')): ?>
            <li <?php if(Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                <a href="javascript:void(0);" class="waves-effect">
                    <img src="<?php echo e(asset('backend/assets_v2/images/icon/users-04.svg')); ?>" class="img-fluid">
                    <span>Users</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="collapse">
                    <li <?php if(Route::currentRouteName() == 'users.index'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('users.index')); ?>">User List</a></li>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.create.form')): ?>
                    <li <?php if(Route::currentRouteName() == 'users.create'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('users.create')); ?>">Create User</a></li>
                    <li <?php if(Route::currentRouteName() == 'users.restore'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('users.restore')); ?>">Restore Deleted User</a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service.list')): ?>
            <li <?php if(Route::currentRouteName() == 'service.index' || Route::currentRouteName() == 'service.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                <a href="javascript:void(0);" class="waves-effect">
                    <img src="<?php echo e(asset('backend/assets_v2/images/icon/users-04.svg')); ?>" class="img-fluid">
                    <span>Service</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="collapse">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service.create.form')): ?>
                        <li <?php if(Route::currentRouteName() == 'service.create'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(route('service.create')); ?>">Create Service</a>
                        </li>
                    <?php endif; ?>
                    <li <?php if(Route::currentRouteName() == 'service.index'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('service.index')); ?>">Manage Service</a></li>
                </ul>
            </li>
            <?php endif; ?>

                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('portfolio.list')): ?>
            <li <?php if(Route::currentRouteName() == 'portfolio.index' || Route::currentRouteName() == 'portfolio.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                <a href="javascript:void(0);" class="waves-effect">
                    <img src="<?php echo e(asset('backend/assets_v2/images/icon/users-04.svg')); ?>" class="img-fluid">
                    <span>Portfolio</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="collapse">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('portfolio.create.form')): ?>
                        <li <?php if(Route::currentRouteName() == 'portfolio.create'): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(route('portfolio.create')); ?>">Create Portfolio</a>
                        </li>
                    <?php endif; ?>
                    <li <?php if(Route::currentRouteName() == 'portfolio.index'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('portfolio.index')); ?>">Manage Portfolio</a></li>
                </ul>
            </li>
            <?php endif; ?>
            <!-- end of user menu -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog.list')): ?>
                    <li <?php if(Route::currentRouteName() == 'blog.index' || Route::currentRouteName() == 'blog.create'): ?> class="active has_sub" <?php else: ?> class="has_sub" <?php endif; ?>>
                        <a href="javascript:void(0);" class="waves-effect">
                            <img src="<?php echo e(asset('backend/assets_v2/images/icon/users-04.svg')); ?>" class="img-fluid">
                            <span>Blog</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="collapse">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog.create.form')): ?>
                                <li <?php if(Route::currentRouteName() == 'blog.create'): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(route('blog.create')); ?>">Create Blog</a>
                                </li>
                            <?php endif; ?>
                            <li <?php if(Route::currentRouteName() == 'blog.index'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('blog.index')); ?>">Manage Blog</a></li>
                        </ul>
                    </li>
                <?php endif; ?>




        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>
</div>
<?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/layouts/partials/v2/left_side_bar_v2.blade.php ENDPATH**/ ?>