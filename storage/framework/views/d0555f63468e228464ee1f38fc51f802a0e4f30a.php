<div class="row">
    <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-<?php echo e($field['width'], false); ?>">
        <?php echo $field['element']->render(); ?>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\Users\Bruno\Downloads\chatty-app-code\smhelp.wuaze.com\vendor\encore\laravel-admin\resources\views\form\row.blade.php ENDPATH**/ ?>