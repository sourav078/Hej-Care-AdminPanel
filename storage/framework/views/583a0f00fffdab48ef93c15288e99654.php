<?php $__env->startSection('title'); ?>
    Portfolio List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_breadcumbs_title'); ?>
    Portfolio List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-box">
                    <h4 class="page-title">Portfolio List</h4>
                    <!-- breadcumbs -->
                <?php echo $__env->make('backend.layouts.partials.v2.breadcumbs_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- end of breadcumbs -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <?php if(Auth::user()->hasPermissionTo('portfolio.create.form')): ?>
                <div>
                    <p class="float-right">
                        <a class="btn btn-warning waves-effect waves-light text-white fl-r" href="<?php echo e(route('portfolio.create')); ?>" type="button">Create Portfolio</a>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <!-- new data table start -->
            <div class="col-sm-12">
                <div>
                    <?php echo $__env->make('backend.layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="header-title"><b>Portfolio List</b></h4>
                    <div class="p20">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th width="20%">Title</th>
                                <th width="20%">Description</th>
                                <th width="20%">Image</th>
                                <th width="20%">Link</th>
                                <th width="20%">Action</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($portfolio->title); ?></td>
                                    <td><?php echo $portfolio->description; ?></td>
                                    <td><img src="<?php echo e(asset('storage/' . $portfolio->image)); ?>" alt="<?php echo e($portfolio->title); ?>" style="max-width: 100px;"></td>
                                    <td><?php echo e($portfolio->link); ?></td>
                                    <td>
                                        <a class="btn btn-info text-white" href="<?php echo e(route('portfolio.edit', $portfolio->id)); ?>">Edit</a>
                                        <a class="btn btn-danger text-white" href="<?php echo e(route('portfolio.destroy', $portfolio->id)); ?>" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($portfolio->id); ?>').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-<?php echo e($portfolio->id); ?>" action="<?php echo e(route('portfolio.destroy', $portfolio->id)); ?>" method="POST" style="display: none;">
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

<?php echo $__env->make('backend.layouts.master_v2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codeact-laravel-cms\resources\views/backend/pages/portfolio/index.blade.php ENDPATH**/ ?>