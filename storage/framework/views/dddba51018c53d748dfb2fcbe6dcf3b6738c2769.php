<li>
    <a href="javascript:void(0);" class="container-refresh">
        <i class="fa fa-refresh"></i>
    </a>
</li>
<script>
    $('.container-refresh').off('click').on('click', function() {
        $.admin.reload();
        $.admin.toastr.success('<?php echo e(__('admin.refresh_succeeded'), false); ?>', '', {positionClass:"toast-top-center"});
    });
</script>
<?php /**PATH C:\Users\Bruno\Downloads\chatty-app-code\smhelp.wuaze.com\vendor\encore\laravel-admin\resources\views\components\refresh-btn.blade.php ENDPATH**/ ?>