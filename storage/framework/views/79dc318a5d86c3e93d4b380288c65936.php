<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <div>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <div>
            <p><?php echo e(Session::get('success')); ?></p>
        </div>
    </div>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <div class="alert alert-danger">
        <div>
            <p><?php echo e(Session::get('error')); ?></p>
        </div>
    </div>
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<!-- create a custom model -->
<div class="modal fade" tabindex="-1" id="statusDisplayModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title dialog-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="dialog-body">Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end of custom modal -->
<?php /**PATH C:\xampp\htdocs\Hej-Care_AdminPanel\resources\views/backend/layouts/partials/messages.blade.php ENDPATH**/ ?>