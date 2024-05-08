<?php $__env->startSection('content'); ?>
<!-- login area start -->
<section class="login-page">
    <div class="container">
        <div class="row">
            <div class="login">
                <div class="form text-center p20 bg-white sign-in bg-shadow">
                    <div class="logo">
                        <img src="<?php echo e(asset('backend/assets_v2/images/logo.png')); ?>" class="login-logo img-fluid">
                    </div>
                    <h3>Sign In</h3>
                    <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>" class="p20">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="admin_login_password" placeholder="password" name="password">
                                <label for="admin_login_password">Password</label>
                            </div>
                            <div class="form-check text-left">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <div class="mt10">
                                <button class="btn w-100 color-white button-sm bg-dark-blue waves-effect waves-light" type="submit">Sign
                                    In</button>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo e(route('admin.password.forget')); ?>" title="Forget your password ?">Forget your password</a>
                </div>
                <!--    sign in-->
            </div>
        </div>
        <!--contact us -->
    </div>
</section>
<!-- jQuery  -->
<script src="<?php echo e(asset('backend/assets_v2/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets_v2/js/bootstrap.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/auth/login_v2.blade.php ENDPATH**/ ?>