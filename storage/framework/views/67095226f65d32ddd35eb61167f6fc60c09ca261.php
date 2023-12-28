<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="<?php echo e($id, false); ?>" style="width: 100%; height: 100%;">
            <?php if(!empty(old($column, $value))): ?>
            <?php echo old($column, $value); ?>

            <?php else: ?>
                <p></p>
            <?php endif; ?>
        </div>

        <input id="input-<?php echo e($id, false); ?>" type="hidden" name="<?php echo e($name, false); ?>" value="<?php echo e(old($column, $value), false); ?>" />

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH C:\Users\Bruno\Downloads\chatty-app-code\smhelp.wuaze.com\vendor\laravel-admin-ext\wang-editor\resources\views\editor.blade.php ENDPATH**/ ?>